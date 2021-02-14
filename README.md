# NextGen Image Upload

Upload .webp, .avif, and .svg image formats. A plugin that allows you to support nextgen image formats on your Wordpress site.

- Contributors: uncaughttypeerror
- Donate link: https://www.paypal.com/donate?hosted_button_id=9VU7CNG4HPWMU
- Tags: avif, webp, svg
- Requires at least: 3.0.1
- Tested up to: 5.6.1
- Stable tag: 1.0
- License: GPLv2
- License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Description

Use **NextGen Image Upload** to upload **.avif**, **.webp**, or **.svg** images to your media library.

Just install and activate it.

Head over to your media library and start uploading your next gen images. :raised_hands: :party_popper:

## Installation

### Download from Wordpress

1. Go to the **Plugins -> Add New** screen and _search_ for **NextGen Image Upload**.
2. Click **Install Now**.
3. Click **Activate**, OR Go to the **Plugins -> Installed Plugins** screen, find **NextGen Image Upload** and click the **Activate** link.

### Upload

1. Download the latest archive and unzip.
1. Go to the **Plugins -> Add New** screen, and click the **Upload Plugin** button.
1. Upload zipped archive directly.
1. Go to the **Plugins -> Installed Plugins** screen, find **NextGen Image Upload** and click the **Activate** link.

### Manual

1. Download the latest archive and unzip.
2. Upload/copy the folder to the `/wp-content/plugins/` directory.
3. Go to the **Plugins -> Installed Plugins** screen, find **NextGen Image Upload** and click the **Activate** link.

## Frequently Asked Questions

= How can I convert images to .avif or .webp? =

Use [Squoosh](https://squoosh.app/ 'Squoosh'). It is an online application that allows you to quickly upload and covert images in your browser.

= What browsers are compatible with .avif, .webp, .svg? =

- .avif: [caniuse.com/?search=avif](https://caniuse.com/avif 'Can I use avif?')
- .webp: [caniuse.com/?search=webp](https://caniuse.com/webp 'Can I use webp?')
- .svg: [caniuse.com/?search=svg](https://caniuse.com/svg-img 'Can I use svg?')

= How do I support older browsers? =

**Give them a fallback.**

Use the `<picture>` element to do this, see [The Picture element](https://developer.mozilla.org/en-US/docs/Web/HTML/Element/picture 'The Picture element - MDN')

**Example:**

    <picture>
        <source srcset="/wp-content/uploads/img.avif" type="image/avif">
        <source srcset="/wp-content/uploads/img.webp" type="image/webp">
        <img src="/wp-content/uploads/img.jpg" alt="The fallback image">
    </picture>

The browser will try the images above in the order you place them.
If .avif is not supported, the browser will check the next `<source>`, which is .webp.
If no images in any or the `<source>` elements can be loaded or supported the browser will default to the `<img>` element and load whatever image is specified.
The fallback image format specified in the last `<img>` element should be a cross-browser supported format, e.g. .png, .jpg, .gif.

## Changelog

= 1.0 =

- Initial release
