import os
import re
from html.parser import HTMLParser
import sys

# Constants
SOURCE_DIR = "."
DEST_DIR = "./astro-site/src/content/docs"

# Categories mapping
CATEGORY_MAP = {
    'R': 'rules',
    'F': 'factions',
    'C': 'components'
}

def ensure_dir(path):
    if not os.path.exists(path):
        os.makedirs(path)

class ContentParser(HTMLParser):
    def __init__(self):
        super().__init__()
        self.output = ""
        self.in_header = False
        self.title = "Untitled"
        self.in_article = False
        self.in_style = False
        self.current_tag = ""
        self.list_stack = [] # Stack to track ordered/unordered
        self.list_item_count = [] # Stack to track counts for ordered lists
    
    def handle_starttag(self, tag, attrs):
        self.current_tag = tag
        if tag == "header":
            self.in_header = True
            self.output = "" # Clear anything before header
        elif tag == "article":
            self.in_article = True
        elif tag == "style":
            self.in_style = True
        
        if not self.in_article and not self.in_header:
            return

        if tag == "h1":
            self.output += "\n## "
        elif tag == "p":
            self.output += "\n"
        elif tag == "ol":
            self.list_stack.append("ol")
            self.list_item_count.append(1)
            self.output += "\n"
        elif tag == "ul":
            self.list_stack.append("ul")
            self.list_item_count.append(0) # 0 means distinct from OL
            self.output += "\n"
        elif tag == "li":
            indent = "    " * (len(self.list_stack) - 1)
            if self.list_stack and self.list_stack[-1] == "ol":
                count = self.list_item_count[-1]
                self.output += f"{indent}{count}. "
                self.list_item_count[-1] += 1
            else:
                self.output += f"{indent}- "
        elif tag == "a":
            # For links, we just output the content and then the closing tag will handle format? 
            # No, Markdown links are [text](href). HTMLParser makes this tricky because we get data in chunks.
            # Starlight supports raw HTML. Let's just output raw HTML for links if we're lazy, 
            # OR we can try to reconstruct.
            # Easiest: Reconstruct the start tag with fixed href.
            href = ""
            for k, v in attrs:
                if k == "href":
                    href = self.fix_link(v)
            self.output += f'<a href="{href}">'
        elif tag in ["i", "b", "strong", "em", "sup", "abbr", "span", "div"]:
            # Passthrough common formatting tags
            attrs_str = "".join([f' {k}="{v}"' for k, v in attrs])
            self.output += f"<{tag}{attrs_str}>"
        elif tag == "style":
            # Ignore style tags
            pass

    def handle_endtag(self, tag):
        if tag == "header":
            self.in_header = False
            self.title = self.output.strip()
            self.output = "" # Reset output for article content
        elif tag == "article":
            self.in_article = False
        elif tag == "style":
            self.in_style = False
        
        if not self.in_article:
            return

        if tag == "h1":
            self.output += "\n\n"
        elif tag == "p":
            self.output += "\n\n"
        elif tag in ["ol", "ul"]:
            if self.list_stack:
                self.list_stack.pop()
                self.list_item_count.pop()
            self.output += "\n"
        elif tag == "li":
            self.output += "\n"
        elif tag == "a":
            self.output += "</a>"
        elif tag in ["i", "b", "strong", "em", "sub", "sup", "abbr", "span", "div"]:
             self.output += f"</{tag}>"

    def handle_data(self, data):
        if self.in_style:
            return
        if self.in_header or self.in_article:
            # We assume data inside tags is just text.
            # Clean emojis/dingbats: \u2600-\u27BF includes ⚪ and ✖
            cleaned = re.sub(r'[\u2600-\u27BF]', '', data)
            # Remove excessive whitespace that might be left behind
            cleaned = re.sub(r'\s+', ' ', cleaned)
            self.output += cleaned

    def fix_link(self, path):
        if path.startswith('/R_'): return f'/rules{path}'.lower()
        if path.startswith('/F_'): return f'/factions{path}'.lower()
        if path.startswith('/C_'): return f'/components{path}'.lower()
        return path

def process_file(filename):
    if not filename.endswith(".php"):
        return

    prefix = filename[0]
    if prefix not in CATEGORY_MAP:
        return

    category = CATEGORY_MAP[prefix]
    output_dir = os.path.join(DEST_DIR, category)
    ensure_dir(output_dir)

    basename = os.path.splitext(filename)[0]
    output_filename = os.path.join(output_dir, f"{basename}.md")
    
    with open(filename, 'r', encoding='utf-8') as f:
        content = f.read()

    # Strip PHP tags
    content = re.sub(r'<\?php.*?\?>', '', content, flags=re.DOTALL)
    
    parser = ContentParser()
    parser.feed(content)
    
    markdown_content = f"---\ntitle: {parser.title}\n---\n\n{parser.output}"

    with open(output_filename, 'w', encoding='utf-8') as f:
        f.write(markdown_content)
    
    print(f"Converted {filename} -> {output_filename}")

def main():
    print("Starting migration...")
    files = [f for f in os.listdir(SOURCE_DIR) if f.endswith('.php')]
    for f in files:
        process_file(f)
    print("Migration complete.")

if __name__ == "__main__":
    main()
