Magento Multi Store Robots
------------------------------------------------------------------------------------------------------------------

This php code allows the robots.txt file to change content depending on which Multi Store website is being viewed.

It is worth noting it is driven by the url so this will only work on installations where different websites have different urls.

------------------------------------------------------------------------------------------------------------------

Example:

Website 1: Root Magento installation located at /

Website 2: Also located at / but different content served by Magento Multi-Store functionality.

------------------------------------------------------------------------------------------------------------------

Issue:

Only one robots.txt file can be present in / and is served to robots before Magento serves any content. This can cause problems with development sites and sites needing specific robots.txt instructions

------------------------------------------------------------------------------------------------------------------

Solution:

1. Apply .htaccess rewrite rule so that robots.txt is actually served by robots.php.
2. Serve different content from rbts-depend folder depending on website being viewed.
3. Echo content to the browser.

------------------------------------------------------------------------------------------------------------------

INSTRUCTIONS:

1. Copy the contents of the git repo to your magento root folder.
2. Open robots.php and change the variable strings to the stripped down urls of your website, for example $website1 for the website www.google.com would be $website1 = "google";

 1. $website1 = "website1url";
 2. $website2 = "website2url";
 3. $website3 = "website3url";
 4. $website4 = "website4url";

3. Change the content of the corresponding file in the /rbts-depend folder for each of your websites. This is what is displayed in the robots file if your defined website url matches the requested url.
4. Test it, go to the robots.php file in your browser and see what gets output.
5. Follow the instructions below to rewrite robots.txt to robots.php

------------------------------------------------------------------------------------------------------------------

MAKE IT WORK FOR ROBOTS.TXT:

Make sure you apply the change to your .htaccess file, it will not work without it.

1. You will find in your root folder (presuming Magento is installed to root) a file called.htaccess.
2. Around line 116 - 117 (dependant on version) you will find these two lines of code.

  1. Options +FollowSymLinks
  2. RewriteEngine on
         
3. A couple of spaces down from that add this code

  RewriteRule  ^robots\.txt$ /robots.php [NC,L]
        
4. Save your .htaccess file and restart the web server just to be sure
5. Go to your robots.txt file and check the output, if it displays all on one line its fine, you will see the correct format in the source code of the page.
6. Run it through any robots.txt checker to make sure it all works fine.


------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------
------------------------------------------------------------------------------------------------------------------

Written by Joe Kershaw - http://www.facebook.com/joekersh



