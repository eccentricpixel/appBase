appBase
=======

This is a Wordpress parent and child theme built off of Foundation 5. You should add both the appBase and appBase-child folders to your themes directory.  The functionality and presentation of the site should be created within the "appBase-child" theme.  Only the bare essentials are found in the parent folder.  The nice thing about this theme is that it is not bloated with a bunch of junk files and folders, making it easy to dive right in.  The appBase parent folder should not be edited.  Foundation is included in the parent theme but any plugins being used are initialized in the child theme.  This way you can develop alternate versions of the site and very easily switch between them without compromising the core logic.  This is a great way to accomodate marketing events, pre-registration and various stages of launches for larger projects or a site with ongoing development; moreover, an easy way to test for plugin conflicts, etc.

DO NOT ADD YOUR STYLES IN STYLE.CSS.  That file is only for Wordpress to know what to do and will not be loaded by the site.  Your CSS should be added to the /less/app.less file which is then compiled to /css/app.css.  If for some peculiar reason, you don't want to use LESS, then edit the app.css directly.  /js/app.js and /css/app.css are both declared in the functions.php file.

========== IMPORTANT ========== 
Note that throughout this child theme, you'll want to use get_stylesheet_directory_uri() instead of get_template_directory_uri() BECAUSE this is a child theme!  If you use template_directory it will look to the parent files.




RECENT CHANGES:

Upgraded to Foundation 5
Upgraded to jScrollPane 2.0.19 in child theme
Added Greensock to child theme 
Added Backstretch to child theme
Added loading of plugins.min.js in child theme's functions.php
Switched app.js for a minified version in child theme's functions.php
Added Flexslider to child theme
Added plugins.less which is imported into app.less, in order to make main stylesheet cleaner to work with
General cleanup to theme files

For IE8 support, there is an additional css file called conditionally which fixes grid issues.