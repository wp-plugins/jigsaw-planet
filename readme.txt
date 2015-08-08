=== Jigsaw Planet ===
Contributors: jigsawplanet, ramiy
Tags: Jigsaw Planet, jigsaw, planet, puzzle, puzzles, embed, oembed
Requires at least: 3.5
Tested up to: 4.3
Stable tag: 1.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Embed puzzles from JigsawPlanet.com into your WordPress site

== Description ==

Create playful puzzles from images and embed them to your WordPress site using [JigsawPlanet.com](https://www.jigsawplanet.com/) online tool.

= About Jigsaw Planet =

[Jigsaw Planet](https://www.jigsawplanet.com/) is an ideal place for playing free online jigsaw puzzles. [Create puzzles](https://www.jigsawplanet.com/?rc=createpuzzle) from your images, collect, exhibit and share them with your friends.

= Jigsaw Planet WordPress Plugin =

Using this plugin you can embed [jigsaw planet puzzles](https://www.jigsawplanet.com/?rc=explore&tp=3) into your WordPress site using nothing but the URL. Just copy the puzzle URL and paste it to the post text editor. Then simply click over to the visual editor to confirm that it loads properly.

= More Information =

For any questions or more information, please [contact us](https://www.jigsawplanet.com/?rc=contact).

== Installation ==

= Installation =
1. In your WordPress Dashboard go to "Plugins" -> "Add Plugin".
2. Search for "Jigsaw Planet".
3. Install the plugin by pressing the "Install" button.
4. Activate the plugin by pressing the "Activate" button.

= Updating =
* Use WordPress automatic updates to upgrade to the latest version. Ensure to backup your site just in case.

= Minimum Requirements =
* WordPress version 3.5 or greater.
* PHP version 5.2.4 or greater.
* MySQL version 5.0 or greater.

= Recommended  Requirements =
* The latest WordPress version.
* PHP version 5.4 or greater.
* MySQL version 5.5 or greater.

== Screenshots ==
1. Pasting the URL to the text-editor.
2. Pasting the URL to the visual-editor.

== Frequently Asked Questions ==

= How do I embed puzzles from Jigsaw Planet? =

For simple puzzle embed, use puzzle URL. Just paste the URL in the editor:

`http://www.jigsawplanet.com/?rc=play&pid=39f12271835b`

= How do I set custom dimentions to my puzzles? =

In WordPress 4.2 you can use the `[embed]` shortcode to set max `width` and max `height`:

`[embed width="600" height="400"]http://www.jigsawplanet.com/?rc=play&amp;pid=39f12271835b[/embed]`

**Note:** Doing it the WordPress way, using the `[embed]` shortcode, is backwards and forward compatible, and it will work with all the themes.

== Changelog ==

= 1.1 (2015-05-05) =
* Add screenshots.
* Add i18n support.
* Add hebrew (he_IL) traslation.

= 1.0 (2015-04-18) =
* Initial release.
* Register oEmbed provider.
