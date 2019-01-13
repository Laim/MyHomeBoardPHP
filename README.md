# MyHomeBoardPHP
MyHomeBoardPHP is a hostable homepage allowing you to take your bookmarks anywhere without the need of syncing browsers, as well as allowing you to customize with quick widgets (_coming soon_)

You can get a live demo here: [MyHomeBoardPHP](https://demo-code.laimmckenzie.com/MyHomeBoardPHP/)

# Setup
Downloading the source and upload anywhere on your site or localhost.

Upload the .sql file to your MySQL server, how you do this is your own choice but I use/tested this with phpmyadmin.

Open the db configuration file (include/db/conn.php) and add your database details in,.

If you are wanting to use the News or Weather widget, which at the time being are the only two you can use - you'll need to register for an API account at [NewsAPI](https://newsapi.org) and [OpenWeatherMap](https://openweathermap.org), then enter the API key into the configuration file (include/configuration.php).

# Limitations to the Drop Down
When Bootstrap 3 was released back in August 2013 [mdo](https://github.com/twbs/bootstrap/issues/21026#issuecomment-256704655) and I imagine some others decided to drop support for Submenus, this means that you can't create out of the box nested drop down menus in Navigation Bars anymore.  There are a few hacky ways that you can add it in to Bootstrap 4, but I've yet to find one that actually works well - so for the time being MyHomeBoardPHP won't be able to support them, sorry.  I am actively looking at ways of adding this as it is something I want myself. 

[Bootstrap 3 Press Release](https://blog.getbootstrap.com/2013/08/19/bootstrap-3-released/)

# TODO
* Add option to change configuration without needing to edit file
* Add option to add links without needing to access mysql/phpmyadmin
