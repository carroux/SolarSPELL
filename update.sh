#!/bin/bash

# Run this script on the Raspberry Pi to update it to the latest version of the website
cd /home/pi/SolarSPELL/
git pull
cd /var/www/
sudo rm -r html
sudo cp -a /home/pi/SolarSPELL/src ./html
sudo rm -r html/content/_public
cd html/
sudo ln -s ../keep/med ./med
sudo ln -s ../keep/Wikipedia ./Wikipedia
sudo ln -s ../keep/about_us_subtitled.mp4 ./about_us_subtitled.mp4
cd content/
sudo ln -s ../../keep/_public ./_public
cd /var/www/
sudo chown -R root:root html
