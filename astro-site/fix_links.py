import os
import re

def fix_links(root_dir):
    # Regex to find markdown links: [Text](/path/...)
    # We strictly look for links starting with slash /
    link_pattern = re.compile(r'\[([^\]]+)\]\((/[^\)]+)\)')
    
    for subdir, dirs, files in os.walk(root_dir):
        for file in files:
            if file.endswith('.md') or file.endswith('.mdx'):
                filepath = os.path.join(subdir, file)
                
                with open(filepath, 'r', encoding='utf-8') as f:
                    content = f.read()
                
                def replace_link(match):
                    text = match.group(1)
                    url = match.group(2)
                    
                    # Calculate relative path
                    # 1. Determine depth of current file relative to docs root
                    rel_path_from_root = os.path.relpath(subdir, root_dir)
                    
                    if rel_path_from_root == '.':
                        # File is in docs root
                        new_url = url.lstrip('/')
                    else:
                        # File is in subdirectory (e.g. rules or factions)
                        # We need to go up to root first, then down to target
                        # Count segments in rel_path_from_root
                        depth = len(rel_path_from_root.split(os.sep))
                        prefix = '../' * depth
                        new_url = prefix + url.lstrip('/')
                        
                        # Optimization: Clean up ./ and ../ usage if possible
                        # If we are in rules/ and link is rules/foo, it becomes ../rules/foo
                        # We can simplifiy this logic by just using os.path.relpath logic entirely for URLs
                        
                    # Better approach: Construct absolute source and target paths effectively
                    # Treat 'url' as absolute from src/content/docs
                    # Target absolute path (virtual)
                    target_abs_path = os.path.normpath(os.path.join(root_dir, url.lstrip('/')))
                    
                    # Compute relative path from current file's directory to target
                    new_rel_url = os.path.relpath(target_abs_path, subdir)
                    
                    # os.path.relpath returns strings with os.sep (backslash on windows), ensure forward slash for web
                    new_rel_url = new_rel_url.replace(os.sep, '/')
                    
                    return f'[{text}]({new_rel_url})'

                new_content = link_pattern.sub(replace_link, content)
                
                if new_content != content:
                    print(f"Fixing links in: {filepath}")
                    with open(filepath, 'w', encoding='utf-8') as f:
                        f.write(new_content)

if __name__ == "__main__":
    docs_root = '/home/yjmrobert/source/repos/tirules/astro-site/src/content/docs'
    fix_links(docs_root)
