Bootstrap 5 Lite
==============

This is a Bootstrap 5 version of the Backdrop [Bootstrap Lite](https://backdropcms.org/project/bootstrap_lite) theme, which is itself inspired by the Drupal [Bootstrap](https://www.drupal.org/project/bootstrap) theme. It is a totally separate project from the Drupal [Bootstrap](https://www.drupal.org/project/bootstrap) theme with no guaranteed compatibility between the two themes.

This theme is still in beta and is subject to changes that may break your theme during upgrade. We recommend that you only upgrade if necessary or if you are prepared to fix minor changes.

Features
--------

1. [Bootswatch](http://bootswatch.com) support included. Easy to pick a Bootswatch free theme.
2. Load Bootstrap/Bootswatch, Bootstrap icons, and FontAwesome from [BootstrapCDN](http://bootstrapcdn.com/) or from bundled libraries.
3. Other tweaks:
  - Navbar settings (fixed, static, top, bottom).
  - Navbar user menu with cog icon.
  - Breadcrumbs tweaks.
  - Ability to use fluid or fixed width.
  - "XX time ago" for nodes and comments instead of regular time.

Installation
------------


Install this theme using the official [Backdrop CMS instructions](https://backdropcms.org/guide/themes).

The navbar content is controlled by a layout block - "Header block". By changing settings for the "Header block", you can control the visibility of the menu, logo, sitename and site slogan.

Documentation
-------------

See the official [Bootstrap 5 documentation](https://getbootstrap.com/docs/5.1/getting-started/introduction/) for a general description of Bootstrap CSS, components, and JS resources supported by the module.

Differences from Bootstrap 3
----------------------------

This theme uses the Bootstrap 5 library (versus the [Bootstrap Lite](https://backdropcms.org/project/bootstrap_lite) theme that uses Bootstrap 3).

Note that Bootstrap 5 has different icons than Bootstrap 3 did. In Bootstrap 3, icons are provided from the Glyphicon Halflings font, while Bootstrap 5 is intended to use [Bootstrap Icons](https://icons.getbootstrap.com), which is a set of SVG icons in a separate library and uses different HTML to render. You can use Boostrap Icons in your site by installing the [Bootstrap Icons](https://backdropcms.org/project/bootstrap_icons) contrib module. 

Examples:

* Bootstrap 3 cart icon: `<i class="glyphicon glyphicon-shopping-cart"></i>`
* Bootstrap 5 cart icon: `<i class="bi bi-cart"></i>`

You can also use Font Awesome 4 and/or 5 icons, which are provided by the [FontAwesome](https://backdropcms.org/project/fontawesome) contrib module. 

If you enable a Font Awesome library, this would also provide a cart icon:

* Font Awesome 4 & 5 cart icon: `<i class="fa fa-shopping-cart"></i>`

Some icons differ between Font Awesome 4 and 5. For example:

* Font Awesome 4 bandcamp icon: `<i class="fa fa-bandcamp"></i>`
* Font Awesome 5 bandcamp icon: `<i class="fab fa-bandcamp"></i>`

Differences from Drupal 7
-------------------------

These features were dropped in the port from the Drupal Bootstrap theme:

  - Starter kit. But you still can create a sub theme. See [Developing themes](https://docs.backdropcms.org/documentation/developing-themes).
  - Tooltip. The feature is there, but you need to follow the [Bootstrap documentation](https://getbootstrap.com/docs/5.1/components/tooltips/) to make it work.
  - Popovers. The feature is there, but you need to follow the [Bootstrap documentation](https://getbootstrap.com/docs/5.1/components/popovers/) to make it work.
  - Anchors settings. I believe this one needs to be done via a module.
  - Well settings.

Issues
------

Bugs and feature requests should be reported in [the Issue Queue](https://github.com/backdrop-contrib/bootstrap5_lite/issues).

Current Maintainers
-------------------

- [Andy Shillingford](https://github.com/docwilmot)
- [ Robert J. Lang](https://github.com/bugfolder)

Credits
-------

- Thanks to the Drupal [Bootstrap theme authors](http://drupal.org/node/259843/committers).
- And the Backdrop Lite maintainers:
  - [Tim Erickson](https://github.com/stpaultim), [https://www.simplo.site](https://www.simplo.site)
  - [Robert J. Lang](https://github.com/bugfolder)


License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.


Bootstrap and the Bootswatch themes are provided under the [MIT License](https://getbootstrap.com/docs/5.0/about/license/).
