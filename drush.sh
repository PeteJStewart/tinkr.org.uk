#!/bin/bash

DRUSH_VERSION="$(drush --version)"

if [[ $DRUSH_VERSION == *"Drush Version   :  8"* ]]
then
  echo "Drush 8 already installed!";
else
  echo "Installing Drush 8";
  # Download latest stable release using the code below or browse to github.com/drush-ops/drush/releases.
  wget http://files.drush.org/drush.phar
  # Or use our upcoming release: wget http://files.drush.org/drush-unstable.phar  
  
  # Test your install.
  php drush.phar core-status
  
  # Rename to `drush` instead of `php drush.phar`. Destination can be anywhere on $PATH. 
  chmod +x drush.phar
  sudo mv drush.phar /usr/local/bin/drush
  
  # Enrich the bash startup file with completion and aliases.
  drush init
fi

