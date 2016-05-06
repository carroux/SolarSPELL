# Imaging an SD card for the Raspberry Pi

Follow these instructions to create a bootable SD card for the Raspberry Pi from a disk image file.

### Requirements
  - Computer running a recent version of Mac OS X
  - User account with administrator privileges
  - The password for your user account with administrator privileges (needed to overwrite the SD card)
  - 64 GB microSD card (class 10, UHS-1, or better)
  - SD card reader
  - MicroSD to SD card adapter
  - Disk image file (a suitable `.img` file, such as `2016-03-18-raspbian-jessie-lite.img`)

### Steps
1. Download RPi-sd card builder v1.2 [here](http://alltheware.wordpress.com/2012/12/11/easiest-way-sd-card-setup/) if you don't have it on your computer already.
2. Extract the zip file and open the program. You may see a message like this:

![screenshot of first warning](https://raw.githubusercontent.com/carroux/SolarSPELL/master/doc/img/first_warning.png)

3. If this happens, open the program by right-clicking on it and selecting "Open" in the menu:

![screenshot of right click](https://raw.githubusercontent.com/carroux/SolarSPELL/master/doc/img/right_click.png)

4. This will open another similar window, but this time there's an "Open" option.

![screenshot of second warning](https://raw.githubusercontent.com/carroux/SolarSPELL/master/doc/img/second_warning.png)

5. Locate the disk image file on your computer and click "Choose" in the window that opens up.
6. If you have not done so yet, connect the SD card to your computer.

![screenshot of connect card message](https://github.com/carroux/SolarSPELL/raw/master/doc/img/connect_card.png)

7. Ensure that only the check box for the SD card is selected in the next window. **Important:** Be especially careful with this step--if you select the wrong disk here, it could overwrite critical data on your hard drive or another connected storage device.

![screenshot of disk selection window](https://github.com/carroux/SolarSPELL/raw/master/doc/img/select_card.png)

The name of the disk in the window should match the icon of the SD card that shows up on your desktop when you connect it--in this example, "SanDisk". The size of the card in the window should also be close to the capacity of your card, if it's empty. Here, "59 GiB" = 64 GB.

![screenshot of SD card on desktop](https://github.com/carroux/SolarSPELL/raw/master/doc/img/card_on_desktop.png)

8. Next, you'll be prompted for an administrator password. This is the password you use to sign into/unlock your computer.

![screenshot of password prompt](https://github.com/carroux/SolarSPELL/raw/master/doc/img/enter_password.png)

9. A warning will pop up telling you not to remove the SD card until it's finished imaging it. Click "Continue".

![screenshot of eject warning](https://github.com/carroux/SolarSPELL/raw/master/doc/img/wait_for_eject.png)

10. At this point, the program will image your SD card with the disk image file you specified earlier. The amount of time this takes  Unfortunately, it's difficult to judge the program's progress with this, however a cog will spin up in your menu bar while the program continues to run. You can click on it to see a progress indicator, however this represents your progress through the overall program, not how much data it has imaged onto your SD card.

![screenshot of cog in menu bar](https://github.com/carroux/SolarSPELL/raw/master/doc/img/cog.png)

11. Once the program is finished imaging your SD card, a message will pop up and let you know that it's safe to disconnect your SD card. All done!

![screenshot of final window](https://github.com/carroux/SolarSPELL/raw/master/doc/img/finished.png)
