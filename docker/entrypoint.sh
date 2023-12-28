#!/usr/bin/env bash
# This file will do any needed post install steps.

# Template Copy
if [[ $TEMPLATE_AUTOGENERATE == "true" ]]; then
  TEMPLATE_PATH="/var/www/html/template"

  for file in `find $TEMPLATE_PATH/docker -type f ! -name "_placeholder_" `; do
    echo "Linking Template Files: $file -> ${file/docker/$TEMPLATE}"
    cp -af "$file" "${file/docker/$TEMPLATE}"

    chown www-data:www-data "${file/docker/$TEMPLATE}"
    chmod 644 "${file/docker/$TEMPLATE}"
  done;
fi;


# This should always be the end.
apache2-foreground