<?php

/************************************************
*
* The below configuration is required for script 
* to work
*
*************************************************/

/* Database Configuration */
define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "myhomeboardphp");

/*********************************************
*
* The below configuration is for customization
* of the site
*
**********************************************/

/* Overall Site Configuration */
define("URL", "http://192.168.0.27"); // The URL that the website is hosted on, no trailing slash.
define("WebName", "MyHomeBoardPHP"); // The name that shows on the navigation bar, title etc.
define("Name", "Name"); // Your name. :-)
define("MHBPHPVersion", "1.0.1");

/* Meta Tags Configuration */ 
define("META_AUTHOR", "Laim");
define("META_KEYWORDS", "MyHomeBoardPHP, GitHub");
define("META_DESCRIPTION", "MyHomeBoardPHP is a hostable homepage allowing you to take your bookmarks anywhere without the need of syncing browsers, as well as allowing you to customise with quick widgets.");

// Navbar Configuration
define("NavCustom", true);
define("NavCustomColor", "#c42b45");
define("NavShowImage", true); // Enable this if you want to show an image instead of text on the navbar
define("NavImage", "mhbphp-logo.png"); // Image should be placed in /assets/images/

// Weather Configuration
define("WeatherEnabled", true);
define("WeatherAPIKey", ""); // Create an account at https://openweathermap.org and put your API key here
define("WeatherLocation", "Glasgow");

// Date and Time Configuration
define("TimeEnabled", true);
define("Timezone", "Europe/London"); // Timezones list: http://php.net/manual/en/timezones.php
define("TimezoneLG", "d M Y H:iA"); // Time formatting: http://php.net/manual/en/function.date.php
define("TimezoneSM", "d/m/y"); // Time formatting: http://php.net/manual/en/function.date.php

/* News Configuration
TODO: Update API to one that isn't trash or using get_file_contents 
*/
define("NewsEnabled", true);
define("ArticleCount", 2); // The amount of articles you want to appear.
define("NewsAPI", "");
define("NewsQuery", "Brexit"); // The topic you want to see if the news type is "everything".
define("NewsSource", "techcrunch"); // The news source if type is top-headlines, list available here: https://newsapi.org/sources
define("NewsType", "top-headlines"); // everything or top-headlines
define("NewsDateFormat", "d M Y H:iA"); // Time formatting: http://php.net/manual/en/function.date.php

?>