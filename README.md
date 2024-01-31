# Soniqcam
Soniqcam is an imaginary IP camera company providing fake products to fake people, created for use in [OSINT challenges](https://github.com/LinusKay/osint-challenges). Their flagship product, the Soniqcam Sprint EL52E is on shelves now, and you can build the software with this repo!

This project uses PHP to run a camera dashboard. 

## Directories
`/captures` contains screenshots for display in the Gallery page. Any `.jpg` files within this folder will be displayed.

`/media` contains internal media used by the dashboard. 

`/stream` contains images for display on the camera viewing screen. The number of available camera sources can be set in config. All images should currently be named `camera_#_latest.jpg`, otherwise they will be ignored. If a camera has no matching image (eg: 3 cameras, but `camera_3_latest.jpg` is missing) then the source will show the placeholder "offline" image. 

`/soniqcam.com` contains the soniqcam company's home page, with relevant product manuals.

## Credentials
The `admin` page is locked behind a very simple PHP login. The default credentials for this are stored within `login.php`, and are referenced in the `Soniqcam_Sprint_EL52E_Simple_User_Manual.pdf` within the Soniqcam.com dummy site. 

If you're doing a challenge related to Soniqcam and you've stumbled upon this repo then SHOO! GET OUTTA HERE! 