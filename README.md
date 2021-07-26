# MyHomeBoardPHP
MyHomeBoardPHP is a hostable homepage allowing you to take your bookmarks anywhere without the need of syncing browsers.

MyHomeBoardPHP is meant for internal or protected external purposes only, there is no form of security to prevent anyone from modifying your links.  This is something I am wanting to add in the future.

# Features
Below are a list of some of the features included in MyHomeBoardPHP, based on the most recent release.

- Dark Mode
- Recent News based on keyword or website (brexit, techcrunch)
- Weather for your location (based on city entered into config)
- Built in search function (Google, Bing)
- Bookmark like linking system
- Mobile Responsive

# Setup
Download the source and upload anywhere on your site or localhost.

Upload the .sql file (myhomeboardphp.sql) to your MySQL server, how you do this is your own choice but I use/tested this with phpmyadmin.

Open the configuration file (include/configuration.php) and update it to your liking, DB credentials are required at the top.

If you are wanting to use the News or Weather widget, which at the time being are the only two you can use - you'll need to register for an API account at [NewsAPI](https://newsapi.org) and [OpenWeatherMap](https://openweathermap.org), then enter the API key into the configuration file (include/configuration.php).

# Limitations to the Drop Down
When Bootstrap 3 was released back in August 2013 [mdo](https://github.com/twbs/bootstrap/issues/21026#issuecomment-256704655) and I imagine some others decided to drop support for Submenus, this means that you can't create out of the box nested drop down menus in Navigation Bars anymore.  There are a few hacky ways that you can add it in to Bootstrap 4, but I've yet to find one that actually works well - so for the time being MyHomeBoardPHP won't be able to support them, sorry.  I am actively looking at ways of adding this as it is something I want myself. 

[Bootstrap 3 Press Release](https://blog.getbootstrap.com/2013/08/19/bootstrap-3-released/)

# TODO
- Add option to change configuration without needing to edit file.
- Add some form of security.
    * Password protect Link Management
- Filter and order by options in Link Management


# Thanks
Thanks to the dudes on the [PlayerSquared](https://playersquared.com/forums/) Discord for giving me some top tier design ideas and helping me with some of the link editing/adding PHP. (aka [tustin](https://github.com/tustin) + algebra)
