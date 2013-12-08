<strong>DOWNLOAD</strong>

You can download Pysen from github by typing
git clone git://github.com/EllinorBergman/ProjektPysen.git

or as a zip from
https://github.com/EllinorBergman/ProjektPysen


<strong>INSTALLING</strong>

First of all you have to create the site/data folder, either manually or trough github by typing
mkdir site/data

Secondly you have to make it writable, either manually in your sftp program (e.g. FileZilla), or type
chmod 777 site/data

You also have to change your RewriteBase, in the .htaccess in the main directory, to the right path.

There are also some modules that needs to be installed, you do that easily by pointing your browser to module/install and clicking install.

When that is done you can log in by either root/root or doe/doe.

<strong>CUSTOMIZATION</strong>

SITE TITLE/FOOTER: Open the root/site/config file and scroll down to the information at the bottom and change it to your preferred information. If you want to remove/edit tools in the footer, you need to open root/themes/function.php, and change the information in the first function.

FAVICON: To change the favicon you need to either name it favicon.ico and save it in root/site/themes/mytheme, or if you prefer to name it something else, go in to root/site/config and change the filename.

DEBUG INFORMATION: If you would like to remove the debug information you can change it from true to false in the root/site/config file.

ADDING CONTROLLER: To add a controller, open root/site/config and change the controllers array.

ADDING MENU: Go to the my-navbar array in root/site/config and create a new array. By default the menu links to a about page, blog, and a guestbook.

CHANGING CSS: To change the style of the page you have to go into you site/themes/mytheme and add you custom css.

CHANGING THEMES: Go into root/site/config and change the line ‘parent' => ‘themes/grid', to ‘parent' => ‘themes/alternative. You also have to go into the site/themes/mytheme/style.css and change the first line to the correct theme. By default there are two different themes called Grid and Alternative.

CHANGING THE START PAGE: To change the start page you have to go into root/src/CCIndex and change the index.tpl.php and the sidebar.tpl.php.


<strong>ADD BLOG POST / PAGE</strong>

To add a blog post all you have to do is go to content/create through the webpage and fill in the information. To make it a post you specify the Type as Post. If you want it to be a page you have to type Page instead. 

You can choose to have a plain page with no filter or choose bbcode or htmlpurify. 

To put a link to a page in the menu you need to open the root/site/config and edit the my-navbar array. There you can add a new menu array. For example it can look like this: 
'page' => array('label'=>'Page', ‘url’=>’page/view/5')
Where the number 5 represents the ID for the page. 
