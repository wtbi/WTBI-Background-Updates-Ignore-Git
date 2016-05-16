# WTBI Background Updates Ignore Git

If you find that WordPress automatic background updates are not working on your website, it may be because you have Version Control files in the root of your WordPress instillation. This plugin will fix the issue by setting WordPress to ignore version control files (.git or .svn) in the root  directory.

##Usage
Before Installing this plugin we recommend you first try to investigate why automatic updates are not working on your site. The best way to do this is to install the [Background Update Tester](https://wordpress.org/plugins/background-update-tester/) plugin, which is built by the official WordPress.org team.

Once you have installed and activated *Background Update Tester*, go to Dashboard → Update Tester.

**PASS:** Your WordPress install can communicate with WordPress.org securely.</p>
**FAIL:** The folder `/path_to_your_site/example.com/` was detected as being under version control (.git).
**PASS:** Your installation of WordPress doesn’t require FTP credentials to perform updates.
**PASS:** All of your WordPress files are writable.

**This site is not able to apply these updates automatically. But we’ll email admin_email@example.com when there is a new security release.**

If you see a screen which contains the the following go ahead and install our plugin. Once you have installed and activated our plugin go back to the Update Tester screen, which should now look more like this:

**PASS:** Your WordPress install can communicate with WordPress.org securely.
**INFO:** The folder `/home/forge/rsmotorhomerepairs.com/` was detected as being under version control (.git), but the automatic_updates_is_vcs_checkout filter is allowing updates.
**PASS:** Your installation of WordPress doesn’t require FTP credentials to perform updates.
**PASS:** All of your WordPress files are writable.

**This site is able to apply these updates automatically. Cool!**

^^That's better