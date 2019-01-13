<?php

define("URL", "https://demo-code.laimmckenzie.com/MyHomeBoardPHP/v1/"); // The URL that the website is hosted on, no trailing slash.
define("WebName", "MyHomeBoardPHP"); // The name that shows on the navigation bar, title etc.
define("Name", "Name"); // Your name. :-)
define("MHBPHPVersion", "1.0");

// Weather settings
define("ShowWeather", true);
define("WeatherAPIKey", ""); // Create an account at https://openweathermap.org and put your API key here
define("WeatherLocation", "Glasgow");

// Date and Time settings
define("ShowTime", true);
define("Timezone", "Europe/London"); // Timezones list: http://php.net/manual/en/timezones.php
define("TimezoneLG", "d M Y H:iA"); // Time formatting: http://php.net/manual/en/function.date.php
define("TimezoneSM", "d/m/y"); // Time formatting: http://php.net/manual/en/function.date.php

/* News settings
TODO: Update API to one that isn't trash or using get_file_contents 
*/
define("ShowNews", true);
define("ArticleCount", 2); // The amount of articles you want to appear.
define("NewsAPI", ""); // API key required from https://newsapi.org 
define("NewsQuery", "Brexit"); // The topic you want to see if the news type is "everything".
define("NewsSource", "techcrunch"); // The news source if type is top-headlines, list available here: https://newsapi.org/sources
define("NewsType", "top-headlines"); // everything or top-headlines
define("NewsDateFormat", "d M Y H:iA"); // Time formatting: http://php.net/manual/en/function.date.php
?>