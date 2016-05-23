=== Plugin Name ===
Contributors: AronMS, wotsthebigidea
Donate link: 
Tags: automatic updates, background updates, updates, git, svn, developer
Requires at least: 4.0
Tested up to: 4.5.2
Stable tag: 1.0.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will fix WordPress automatic background updates not working when it detects version control (.git or .svn) in the root  directory.

== Description ==

If you find that WordPress automatic background updates are not working on your website, it may be because you have Version Control files in the root of your WordPress instillation. This plugin will fix the issue by setting WordPress to ignore version control files (.git or .svn) in the root  directory.

= Usage =
Before Installing this plugin we recommend you first try to investigate why automatic updates are not working on your site. The best way to do this is to install the [Background Update Tester](https://wordpress.org/plugins/background-update-tester/) plugin, which is built by the official WordPress.org team.

Once you have installed and activated *Background Update Tester*, go to Dashboard → Update Tester.
Go ahead and install our plugin if you see a screen which looks like the following...

> 
> **PASS:** Your WordPress install can communicate with WordPress.org securely.
> 
> **FAIL:** The folder `/path_to_your_site/example.com/` was detected as being under version control (.git).
>
> **PASS:** Your installation of WordPress doesn’t require FTP credentials to perform updates.
>
> **PASS:** All of your WordPress files are writable.
>

> 
> **This site is not able to apply these updates automatically. But we’ll email email@example.com when there is a new security release.**
>


Once you have installed and activated our plugin go back to the Update Tester screen, which should now look more like this...


> 
> **PASS:** Your WordPress install can communicate with WordPress.org securely.
>
> **INFO:** The folder `/path_to_your_site/example.com/` was detected as being under version control (.git), but the automatic_updates_is_vcs_checkout filter is allowing updates.
>
> **PASS:** Your installation of WordPress doesn’t require FTP credentials to perform updates.
>
> **PASS:** All of your WordPress files are writable.
>
>
> **This site is able to apply these updates automatically. Cool!**
>

^^That's better!

== Installation ==

1. Upload the wtbi-background-updates-ignore-git folder to the /wp-content/plugins/ directory
1. Activate the WTBI Auto Updates Ignore Git plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= Will this plugin fix automatic background updates on my website? =

Before Installing this plugin we recommend you first try to investigate why automatic updates are not working on your site. The best way to do this is to install the [Background Update Tester](https://wordpress.org/plugins/background-update-tester/) plugin, which is built by the official WordPress.org team. For more information on using this plugin checkout our [usage guide](https://wordpress.org/plugins/wtbi-background-updates-ignore-git/).


== Screenshots ==

== Changelog ==

= 1.0 =
* Initial Release
= 1.0.1 =
* Fixed author link
* Updated contributors
* Added pot file to make translations easier

== Upgrade Notice ==

