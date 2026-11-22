#!/bin/bash
# Copy the GITHUB_ISSUES_TOKEN environment property to a file the report form (report.php)
# can read. Elastic Beanstalk does not always pass environment properties to PHP-FPM.
# Runs as root after each deploy (.platform/hooks) and each configuration change
# (.platform/confighooks). Output goes to /var/log/eb-hooks.log; the token is never printed.
set -u
DIR=/etc/tirules
FILE="$DIR/github_token"
SOURCE=get-config
TOKEN=$(/opt/elasticbeanstalk/bin/get-config environment -k GITHUB_ISSUES_TOKEN 2>/dev/null || true)
if [ -z "$TOKEN" ] && [ -r /opt/elasticbeanstalk/deployment/env ]; then
    SOURCE=deployment-env
    TOKEN=$(grep -m1 '^GITHUB_ISSUES_TOKEN=' /opt/elasticbeanstalk/deployment/env | cut -d= -f2- || true)
    TOKEN="${TOKEN%\"}"; TOKEN="${TOKEN#\"}"
fi
TOKEN=$(printf '%s' "$TOKEN" | tr -d ' \r\n\t')
GROUP=webapp
getent group "$GROUP" >/dev/null || GROUP=root
mkdir -p "$DIR"
chown root:"$GROUP" "$DIR"
chmod 750 "$DIR"
umask 027
printf '%s' "$TOKEN" > "$FILE"
chown root:"$GROUP" "$FILE"
chmod 640 "$FILE"
echo "tirules github token hook: ${#TOKEN} characters from $SOURCE, readable by group $GROUP"
exit 0
