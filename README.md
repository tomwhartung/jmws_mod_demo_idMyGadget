# jmws_mod_demo_idmygadget
This repo contains a Joomla! module that can demonstrate IdMyGadget&copy; functionality by forcing server to emulate a specific type of device when displaying the current page.

## Goal
The goal of this module is to help site administrators see what their site looks like on different devices, without having to access the site using those devices.

This module is intended for use by site administrators and is *not* a module you would normally want site visitors to have access to.

## Status:
This module is complete and works well.

#### Demo Article
The [Change View Demo](http://joomoowebsites.com/index.php/demos/demos-joomla/joomla-modules/change-view-demo) article on [JooMooWebSites.Com](http://joomoowebsites.com) gives an example of how this template looks.

## Dependencies
To function properly, this code requires installation of code in other repos.

**TODO: Look into using Joomla Composer to manage these dependencies.**

### Required: jmws_idMyGadget_for_joomla
For this module to work properly, the jmws_idMyGadget_for_joomla must be installed.

Note that although jmws_idMyGadget_for_joomla comes with a very simple device detector (detect_mobile_browsers) installed "out of the box," it works best when you add one or more of the more sop
histicated third-party device detection tools.

Fret not, however!  You can accomplish much of this by running one or more "git clone" commands.

For information on how to install this required code, see the jmws_idMyGadget_for_joomla README.md file.

### Required: One of the jmws_*_idMyGadget templates
This module works only when used with one of the templates it was written for:

* [jmws_beez3_idMyGadget](https://github.com/tomwhartung/jmws_beez3_idMyGadget)
* [jmws_protostar_idMyGadget](https://github.com/tomwhartung/jmws_protostar_idMyGadget)
* [jmws_protostar_tomh_idMyGadget](https://github.com/tomwhartung/jmws_protostar_tomh_idMyGadget)

## Installation:

Installation of all jmws_* joomla extensions is the same.
For details, see the following documents in the [Jmws Accoutrements Repo on github](https://github.com/tomwhartung/jmws_accoutrements/):

* [Installing Jmws Joomla Extensions document](https://github.com/tomwhartung/jmws_accoutrements/blob/master/doc/joomla/install.md)
* [Jmws Github Strategy document](https://github.com/tomwhartung/jmws_accoutrements/blob/master/doc/devops/cms_github_strategy.md)

## Parameters:

This module has no additional parameters, only the ones that Joomla! adds by default to all modules.

## About IdMyGadget:

For information about the IdMyGadget Device Detection Adapter API&copy;, see the [About-IdMyGadget.md file in this directory](https://github.com/tomwhartung/jmws_mod_demo_idMyGadget/blob/master/ABOUT-IdMyGadget.md).

