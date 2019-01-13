# MyHomeBoardPHP
MyHomeBoardPHP is a hostable homepage allowing you to take your bookmarks anywhere without the need of syncing browsers, as well as allowing you to customize with quick widgets (_coming soon_)

You can get a live demo here: [MyHomeBoardPHP](https://demo-code.laimmckenzie.com/MyHomeBoardPHP/v1/)

# Setup
Downloading the source and upload anywhere on your site or localhost.

Upload the .sql file to your MySQL server, how you do this is your own choice but I use/tested this with phpmyadmin.

Open the db configuration file (include/db/conn.php) and add your database details in,.

If you are wanting to use the News or Weather widget, which at the time being are the only two you can use - you'll need to register for an API account at [NewsAPI](https://newsapi.org) and [OpenWeatherMap](https://openweathermap.org), then enter the API key into the configuration file (include/configuration.php).

# TODO
* Add option to change configuration without needing to edit file
* Add option to add links without needing to access mysql/phpmyadmin
