Bootstrap 5 Lite
==============

This is a Bootstrap 5 version of the Backdrop [Bootstrap Lite](https://backdropcms.org/project/bootstrap_lite) theme, which is itself inspired by the Drupal [Bootstrap](https://www.drupal.org/project/bootstrap) theme. It is a totally separate project from the Drupal [Bootstrap](https://www.drupal.org/project/bootstrap) theme with no guaranteed compatibility between the two themes.

This theme is still in beta and is subject to changes that may break your theme during upgrade. We recommend that you only upgrade if necessary or if you are prepared to fix minor changes.

Features
--------

1. Load Bootstrap from [BootstrapCDN](http://bootstrapcdn.com/) or from the bundled library.
2. [Bootswatch](http://bootswatch.com) support included. Easy to pick a Bootswatch free theme.
3. [Bootstrap icons](https://icons.getbootstrap.com) support included.
3. [FontAwesome 4](https://fontawesome.com/v4.7/) and [FontAwesome 5](https://fontawesome.com) support included.
4. Other tweaks:
  - Navbar settings (fixed, static, top, bottom).
  - Navbar user menu with cog icon.
  - Breadcrumbs tweaks.
  - Ability to use fluid or fixed width.
  - "XX time ago" for nodes and comments instead of regular time.

Installation
------------

  - Install this theme using the official [Backdrop CMS instructions](https://backdropcms.org/guide/themes).

  - The navbar content is controlled by a layout block - "Header block". By changing settings for the "Header block", you can control the visibility of the menu, logo, sitename and site slogan.

Documentation
-------------

See the official [Bootstrap 5 documentation](https://getbootstrap.com/docs/5.1/getting-started/introduction/) for a general description of Bootstrap CSS, components, and JS resources supported by the module.

See the official [Font Awesome 4 documentation](https://fontawesome.com/v4.7/) for a general description of Font Awesome 4. See the official [Font Awesome 5 documentation](https://fontawesome.com/v4.7/) for a general description of Font Awesome 5. Support is provided via "shims" on the settings page to use FontAwesome 5 (which is the bundled version) with FontAwesome 4 syntax, icons, and aliases for backward compatibility.

Note that Bootstrap 5 has different icons than Bootstrap 3 did. In Bootstrap 3, icons are provided from the Glyphicon Halflings font, while Bootstrap 5 comes with its own set of SVG icons, which use different HTML to render. Example:

* Bootstrap 3 cart icon: `<i class="glyphicon glyphicon-shopping-cart"></i>`
* Bootstrap 5 cart icon: `<i class="bi bi-cart"></i>`

You can also use Font Awesome 4 and 5 icons. If you enable a Font Awesome library, this would also be a cart icon:

* Font Awesome 4 & 5 cart icon: `<i class="fa fa-shopping-cart"></i>`

Some icons differ between Font Awesome 4 and 5. For example:

* Font Awesome 4 bandcamp icon: `<i class="fa fa-bandcamp"></i>`
* Font Awesome 5 bandcamp icon: `<i class="fab fa-bandcamp"></i>`

If you have content that uses Font Awesome 4 icons, but wish to use a Font Awesome 5 library, select the "Add Font Awesome v4 shims" option in the theme settings.

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

Credits
-------

- Thanks to the Drupal [Bootstrap theme authors](http://drupal.org/node/259843/committers).
- And the Backdrop Lite maintainers:
  - [Tim Erickson](https://github.com/stpaultim), [https://www.simplo.site](https://www.simplo.site)
  - [Robert J. Lang](https://github.com/bugfolder)


License
-------

This project is GPL v2 software. See the LICENSE.txt file in this directory for complete text.


Bootstrap, the Bootswatch themes, and Font Awesome are provided under the [MIT License](https://getbootstrap.com/docs/5.0/about/license/).
