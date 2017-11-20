# OSMC Module for Icinga Web 2

#### Table of Contents

1. [About](#about)
2. [License](#license)
3. [Support](#support)
4. [Requirements](#requirements)
5. [Installation](#installation)
6. [Configuration](#configuration)
7. [FAQ](#faq)
8. [Thanks](#thanks)


## About

A simple module for demonstrating different hooks. This demo was used in
our OSMC 2017 talk.

## License

Icinga Web 2 and this Icinga Web 2 module are licensed under the terms of the GNU
General Public License Version 2, you will find a copy of this license in the
LICENSE file included in the source package.

## Support

It is a demo, play with it and learn from it.

Join the [Icinga community channels](https://www.icinga.com/community/get-involved/) for questions.

## Requirements

* [Icinga Web 2](https://www.icinga.com/products/icinga-web-2/) (>= 2.5.0)

## Installation

Extract this module to your Icinga Web 2 modules directory as `osmc` directory.

Git clone:

```
cd /usr/share/icingaweb2/modules
git clone https://github.com/dnsmichi/icingaweb2-module-osmc.git osmc
```

### Enable Icinga Web 2 module

Enable the module in the Icinga Web 2 frontend in `Configuration -> Modules -> osmc -> enable`.
You can also enable the module by using the `icingacli` command:

```
icingacli module enable osmc
```

## Configuration

Look into run.php and comment/uncomment the provided hooks.

## FAQ

Learn more about Icinga Web 2's module development:

* https://www.youtube.com/watch?v=GR1QguEdilg
* https://github.com/icinga/icingaweb2-module-training

## Thanks

* [Tom](https://github.com/Thomas-Gelf) & [Eric](https://github.com/lippserd) for their time on questions.


