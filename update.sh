#!/bin/bash

# Run this script on the Raspberry Pi to update it to the latest version of the website
cd ~/SolarSPELL/
git pull
cd /var/www/
sudo rm -r html
sudo cp -a ~/SolarSPELL/src ./html
sudo rm -r html/content/_public
cd html/
sudo ln -s ../keep/med ./med
sudo ln -s ../keep/Wikipedia ./Wikipedia
cd content/
sudo ln -s ../../keep/_public ./_public
cd /var/www/
sudo chown -R root:root html
