=== ID-SK Toolkit ===
Contributors: slovenskoit, idsk
Tags: idsk, id-sk, idsk-toolkit, idsk toolkit, id-sk toolkit
Requires at least: 5.4
Tested up to: 6.7.1
Stable tag: 1.7.3
Requires PHP: 7.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Features toolkit for ID-SK theme.

== Description ==

Features toolkit for ID-SK theme. We recommend using this package with the WordPress theme [ID-SK Template](https://wordpress.org/themes/idsk-template/).

For more informations about components and their usage, visit [ID-SK Frontend – Unified design manual of electronic services](https://idsk.gov.sk/).

== Copyright ==
ID-SK Toolkit WordPress plugin
Copyright 2025 Ministry of Investments, Regional Development and Informatization of the Slovak Republic
Copyright 2021-2024 Slovensko IT, a.s.
ID-SK is distributed under the terms of the GNU GPLv2 or later and under the terms of [Open Government Licence v3.0](https://www.nationalarchives.gov.uk/doc/open-government-licence/version/3/)

== Resources ==
Unless otherwise specified, all the plugin images are created by us and licensed under the same license as the plugin is.

== Contact ==
Contact contributors via email: idsk@mirri.gov.sk

== Changelog ==

= 1.7.3 =
* fixed [CVE-2024-50517](https://www.cve.org/CVERecord?id=CVE-2024-50517) by proper sanitization
* fixed [CVE-2024-9853](https://www.cve.org/CVERecord?id=CVE-2024-9853) by removal of SVG support from codebase
  * reported by [Francesco Carlucci](https://francescocarlucci.com)
  * use other available [SVG plugins](https://wordpress.org/plugins/search/svg/) to add SVG support back
* preparation for repository takeover from slovenskoit, readme update

= 1.7.2 =
* Removed block types restriction

= 1.7.1 =
* Update ID-SK 2.11.0
* Updated component Tabs - self nesting prohibited

= 1.7.0 =
* Update ID-SK 2.10.0
* Added new component
 * Table with filters
* Multiple minor fixes

= 1.6.1 =
* Translations update

= 1.6.0 =
* Added cookies functionality
* Added new meta boxes for posts
* Added new component
 * Posts
* Updated Intro block component to newer version
* Updated component Tabs to newer version
* Removed layout settings from Related content component
* Removed custom posts - Institutions News
* Translations update

Due to modified metabox logic, it is necessary to update the Back link button on the pages.

= 1.5.0 =
* Updated components to ID-SK 2.6.2
* Added page patterns
* Added new component
 * Separator
* Removed Graph component
* Fix in Button component
* Fix for WordPress 5.8

= 1.4.3 =
* Added support for language mutations

= 1.4.2 =
* Fix in Graph component

= 1.4.1 =
* Added new component
 * Stepper banner
* Fixes in existing components

= 1.4.0 =
* Added new meta boxes for pages
* Added advanced search for ID-SK theme
* Global changes in existing ID-SK components
* Card komponent - added support for adding dynamic tags

= 1.3.1 =
* Global changes in existing ID-SK components
* Added left and right margins for grid Column component
* Fixes in existing components

= 1.3.0 =
* Added new components
 * Accordion
 * Announce
 * Button
 * Heading
 * Hidden text
 * Lists
 * Inset text
 * Tabs
* Fixes in existing components.

= 1.2.0 =
* Added new components
 * Graph component
 * Map component
* Fixes in existing components.

= 1.1.0 =
* Added new ID-SK components
* Code optimization, fixes

= 1.0.0 =
* Plugin release

== Upgrade Notice ==

= 1.7.2 =
* Removed block types restriction

= 1.7.1 =
* Update ID-SK 2.11.0
* Updated component Tabs - self nesting prohibited

= 1.7.0 =
* Update ID-SK 2.10.0
* Added new component
 * Table with filters
* Multiple minor fixes

= 1.6.1 =
* Translations update

= 1.6.0 =
* Added cookies functionality
* Added new meta boxes for posts
* Added new component
 * Posts
* Updated Intro block component to newer version
* Updated component Tabs to newer version
* Removed layout settings from Related content component
* Removed custom posts - Institutions News
* Translations update

Due to modified metabox logic, it is necessary to update the Back link button on the pages.

= 1.5.0 =
* Updated components to ID-SK 2.6.2
* Added page patterns
* Added new component
 * Separator
* Removed Graph component
* Fix in Button component
* Fix for WordPress 5.8

= 1.4.3 =
Added support for language mutations.

= 1.4.2 =
Fix in Graph component.

= 1.4.1 =
Added new component Stepper banner, fixes in existing components.

= 1.4.0 =
Global changes in existing ID-SK components, added new functionality for ID-SK theme.

= 1.3.1 =
Global changes and fixes in existing components.

= 1.3.0 =
Added new components, fixes in existing components.

= 1.2.0 =
Added new components, fixes in existing components.

= 1.1.0 =
Added new components, code optimization.

= 1.0.0 =
Release of the plugin for use with ID-SK theme.

== Additional functionalities ==

1. Gutenberg ID-SK components
2. Gutenberg ID-SK patterns
3. Support for uploading SVG images
4. Cookies

== Shortcodes & Custom functions ==

= Cookies =

Basic cookies are automatically enabled for search engines.

To show all active cookies in table view:
~~~
[idsk-cookie-list]
~~~

**You can block cookies in text editor as follow:**

Adds content in the block to the page if basic cookies are set:
~~~
[idsk-cookie]Your content[/idsk-cookie]
~~~

Adds content in the block to the page if cookies with specific ID are accepted:
~~~
[idsk-cookie id="example1"]Your content[/idsk-cookie]
~~~

**You can also block cookies with PHP:**

Adds content in the block to the page if basic cookies are set:
~~~
if ( function_exists('idsktk_cookies_allowed') && idsktk_cookies_allowed() ) {
    // Your code
}
~~~

Adds content in the block to the page if cookies with specific ID are accepted:
~~~
if ( function_exists('idsktk_cookies_allowed') && idsktk_cookies_allowed('example1') ) {
    // Your code
}
~~~

**Cookies settings page and adding own cookies**

Adds checkbox with cookies acceptance:
~~~
[idsk-cookie-allow id="example1" title="Cookie name/Cookie category name"]Cookie details[/idsk-cookie-allow]
~~~
* If no ID is specified, check box for basic cookies will be shown

Adds button for saving cookies settings. The button must be placed on the same page as the checkboxes with cookies acceptance.
~~~
[idsk-cookie-submit title="Save settings"]
~~~
