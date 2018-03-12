## homify-rfoutlet - RFOutlet Module for homify
Control you RF-Outlets with homify via 433Mhz

## Requirements
- [Homify]("https://github.com/markushaug/homify")
- <a href="https://github.com/ninjablocks/433Utils">433Utils</a>
- Sniff the 433Mhz on/off codes for your outlet

## Features

- Control you RF-Outlets with homify via 433Mhz


## SETUP
To install and use this plug-in, you'll need <a href="https://github.com/ninjablocks/433Utils">433Utils</a> and Homify installed on your computer. 

### Composer
Navigate into your homify folder and execute the following lines.
```bash
# Download & install homify-rfoutlet
$ composer require markushaug/homify-rfoutlet
```

### Extend your .ENV File
Setup the execution path in the ```.env```:

```bash
# Add the next line to your .env file and adjust <path_to> to your absolute path
$ exec_path=<path_to>/433Utils/RPi_utils/
```

## Add your rfoutlet to homify

1. To add your switch to homify, you need to sniff the on/off codes first.
2. Open up homify and navigate to your room
3. Click on `Add Thing`, choose the plug-in and enter the config-json.
4. Wollah! You added your switch successfully.

The following json is required for the plug-in, when you create a new thing:
```json 
{"default_on": <code_on>, "default_off": <code_off>}
```

If you are not able to control your switch, follow these steps for your unix user:
https://askubuntu.com/questions/147241/execute-sudo-without-password#147265


Homify's routing is fully dynamically. You can use the following URL to access your things:

- ```https://<server_ip>/thing/<thing_name>/<channel>```

## Channels
The following channels are available.

- ```on``` 
- ```off``` 
- ```output``` -> Status like 'ON' / 'OFF' 

## License

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.




