=== Plugin Name ===
Contributors: AronMS
Donate link: 
Tags: automaitc updates, background updates, updates, git, svn, developer
Requires at least: 4.0
Tested up to: 4.5.2
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

This plugin will fix the issue where WordPress prevents automatic background updates when it detects version control (.git or .svn) in the root WordPress directory.

== Description ==

If you find that WordPress automatic background updates are not working on your website, it may be because you have Version Control files in the root of your WordPress instillation. This plugin will fix the issue by setting WordPress to ignore version control files (.git or .svn) in the root  directory.

= Usage =
Before Installing this plugin we recommend you first try to investigate why automatic updates are not working on your site. The best way to do this is to install the [Background Update Tester](https://wordpress.org/plugins/background-update-tester/) plugin, which is built by the official WordPress.org team.

Once you have installed and activated *Background Update Tester*, go to Dashboard → Update Tester.

<span style="color:green">PASS:</span> Your WordPress install can communicate with WordPress.org securely.
<span style="color:red">FAIL:</span> The folder `/path_to_your_site/example.com/` was detected as being under version control (.git).
<span style="color:green">PASS:</span> Your installation of WordPress doesn’t require FTP credentials to perform updates.
<span style="color:green">PASS:</span> All of your WordPress files are writable.

**This site is not able to apply these updates automatically. But we’ll email admin_email@example.com when there is a new security release.**

If you see a screen which contains the the following go ahead and install our plugin. Once you have installed and activated our plugin go back to the Update Tester screen, which should now look more like this:

<span style="color:green;font-weight:strong;">PASS:</span> Your WordPress install can communicate with WordPress.org securely.
<span style="font-weight:strong;">INFO:</span> The folder `/home/forge/rsmotorhomerepairs.com/` was detected as being under version control (.git), but the automatic_updates_is_vcs_checkout filter is allowing updates.
<span style="color:green;font-weight:strong;">PASS:</span> Your installation of WordPress doesn’t require FTP credentials to perform updates.
<span style="color:green;font-weight:strong;">PASS:</span> All of your WordPress files are writable.

**This site is able to apply these updates automatically. Cool!**

^^That's better

== Installation ==

1. Upload the wtbi-auto-updates-ignore-git folder to the /wp-content/plugins/ directory
1. Activate the WTBI Auto Updates Ignore Git plugin through the 'Plugins' screen in WordPress

== Frequently Asked Questions ==

= Will this plugin fix automatic background updates on my website? =

Before Installing this plugin we recommend you first try to investigate why automatic updates are not working on your site. The best way to do this is to install the [Background Update Tester](https://wordpress.org/plugins/background-update-tester/) plugin, which is built by the official WordPress.org team. For more information on using this plugin checkout our [usage guide](https://wordpress.org/plugins/wtbi-background-updates-ignore-git/).


== Screenshots ==

== Changelog ==

= 1.0 =
* Initial Release

== Upgrade Notice ==


== Arbitrary section ==

