=== WP tarteaucitron.js Self Hosted ===
Contributors: rdorian
Donate link: https://paypal.me/riccidorian/
Tags: tarteaucitron.js, tarteaucitron, tarteaucitronjs, tarteaucitron js
Requires at least: 4.9
Tested up to: 5.7
Stable tag: trunk
Requires PHP: 5.6.31
License: GPLv2
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin aims to integrate and ease the use of tarteaucitron.js in WordPress. It's developed with the creator of the service tarteaucitron.js.\
No additionals servers are needed. The script is stored in your WordPress website.

== Description ==
## What is tarteaucitron.js ?

The European cookie law regulates the management of cookies, and you should ask your visitors their consent before exposing them to third-party services.

Clearly this script will:

- Disable all services by default.
- Display a banner on the first-page view and a small one on other pages.
- Display a panel to allow or deny each services one by one.
- Activate services on the second-page view if not denied.
- Store the consent in a cookie for 365 days.
Bonus:


- Load service when user click on Allow (without reloading of the page.),
- Incorporate a fallback system (display a link instead of the social button and a static banner instead of advertising.).

Sources : [Tarteaucitron.js github](https://github.com/AmauriC/tarteaucitron.js)

== Installation ==

This section describes how to install the plugin and get it working.

e.g.

1. Upload the plugin files to the `/wp-content/plugins/wp-tarteaucintron.js` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin from the 'Plugins' screen in WordPress
3. Use the Settings->wp-tarteaucintron.js screen to configure this plugin

== Frequently Asked Questions ==

= Is it the same as tarteaucitron.io? =

No it's not the same.
This plugin is developped during my free time and is using the same base : [tarteaucitron.js](https://github.com/AmauriC/tarteaucitron.js/).
In this plugin, you have only the features implemented by [tarteaucitron.js](https://github.com/AmauriC/tarteaucitron.js/) and nothing else.

= Where is the script hosted ? =

The javascript code of [tarteaucitron.js](https://github.com/AmauriC/tarteaucitron.js/) is hosted directly inside your wordpress website.

= Can I change the design to make it look like my website? =

Yes you can!
But you have to add extra CSS that will override the [tarteaucitron.js CSS](https://github.com/AmauriC/tarteaucitron.js/blob/master/css/tarteaucitron.css) rules.
This isn't a functionality of this plugin.

I you don't want to do it yourself, don't hesitate to use the paid and official plugin : https://tarteaucitron.io/

= Some services have been added but aren't visible on the admin panel =

Wait for the next update of this plugin. This may take a while since it's a free plugin that I'm doing on my free time.


== Screenshots ==

1. First time on the website :  ![picture](assets/screenshot1.png)
2. Selection of the services that the user allows or deny ![picture](assets/screenshot2.png)
3. Default view of the website with the possibility to change in the future the services allowed.![picture](assets/screenshot3.png)

== Changelog ==

= 1.2.2 =
Add option to specify external CSS file

= 1.2.1 =
fixup to restore property useExternalCSS and useExternalJs

= 1.2.0 (04/2021) =
Update to the last version (1.9.0) of [tarteaucitron.js](https://github.com/AmauriC/tarteaucitron.js)
Please check with the official documentation that all the service you are using are compatible, or update your configuration after the update.
This include the following changes:

* add services : Linkedin Insigh, Twitter Universal Website Tag, Xandr, Adobe Analytics, Clarity, Compteur.fr, Kameleoon, Matomo, statcounter.com, Verizon Dot Tag, Woopra, HelloAsso, OneSignal, Facebook (post), Instagram, Userlike, Arte.tv, Deezer, podCloud, SoundCloud
* Update service documentations
* Update backend CSS to bootstrap 5.0

= 1.1.0 =
Update to the last version of [tarteaucitron.js](https://github.com/AmauriC/tarteaucitron.js)
This include the following changes:

* add services : abtasty, contentsquare, leadforensics, google webfonts, emolytics
* Add languages: Bulgarian and Romanian
* Add the position "middle" for the banner
* Update some privacy uri
* Update some javascript function for services. e.g: recaptcha, vimeo, AT Internet, matomo, ...

Please check that all your service are working correctly.
If you can't find your service in the list of services, you'll need to add yourself the code in the textarea provided for this.

= 1.0.14 =
* Remove stat, to fix breaking call

= 1.0.13 =
* Added Option for anonymous statistics

= 1.0.12 =
* Corrected "UseExternalCss" option to load a custom alternatif css file from the default one if set to true.

= 1.0.11 =
* Update menu "Languages" to "Texts"

= 1.0.10 =
* Default value for initialisation script on the front end

= 1.0.9 =
* corrected bug on initialisation settings

= 1.0.8 =
* Added link to little documentation

= 1.0.7 =
* Corrected minor bugs

= 1.0.6 =
* removed option use external css that caused css bug on the website (this option is coming back when I found a patch)
* Changed shortcode message

= 1.0.5 =
* Corrected little bugs in update 1.0.4
* If the banner stay even after the user accept, please save at least once the initisalisation option and remove all the cookies for the website in the browser

= 1.0.4 =
* Update to script release 1.2
* Updated services by adding new services (Hubspot, Twitter Widget Api)
* Added initialisation variable 'useExternalCss'
* Added Greeks translation

= 1.0.3 =
* Added ability to change the cookie name
* Updated Service page by adding new services (adform, adsense, GetQuanty, HotJar, Koban, Matomo)
* Updated roadmap
* Updated to last version of tarteaucitron.js

= 1.0.2 =
* corrected little bug with settings

= 1.0.1 =
* Updated roadmap

= 1.0.0 =
* Added feature to customize frontend texts.

= 0.3 =
* added matomo service
* added koban service
* Updated tarteaucitron.js
* added fb-video
* Updated roadmap
* corrected some texts

= 0.2 =
* Initialisation of tarteaucitron.js without writing javascript
* Possibility to customize the expiration time of the cookie
* Possibility to choose the language for the frontend

= 0.1.1 =
* Added default value for initialisation script

= 0.1 =
* Initialisation script with a text area to insert the code. (Without the <script> tag)
* Services script with a text area and checkboxes to activates the services needed.
