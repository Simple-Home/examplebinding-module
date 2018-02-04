## homify-rfoutlet - RFOutlet Module for homify
Control you RF-Outlets with homify via 433Mhz

## Requirements
- [Homify]("https://github.com/markushaug/homify")

## Features

- Control you RF-Outlets with homify via 433Mhz

## Coming soon

- Autogeneration of HomeBridge config files


## Installation

1. Navigate into your homify folder
3. Run ```composer require markushaug/homify-rfoutlet``` 

## Usage

The following json is required for the plug-in, when you create a new thing:
- ```{"default_on":5505425, "default_off": 5505425}```

Homify's routing is fully dynamically. You can use the following URL to access your things:

- ```https://<server_ip>/thing/<thing_name>/<channel>```

## Channels
The following channels are available.

- ```on``` 
- ```off``` 
- ```output``` -> Status like 'ON' / 'OFF' 

## License

<a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/"><img alt="Creative Commons License" style="border-width:0" src="https://i.creativecommons.org/l/by-sa/4.0/88x31.png" /></a><br />This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-sa/4.0/">Creative Commons Attribution-ShareAlike 4.0 International License</a>.




