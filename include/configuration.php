<?php

    /************************************************
    *
    * The below configuration is required for script
    * to work
    *
    *************************************************/

    /* Database Configuration */
    define("DBHOST", "localhost");
    define("DBUSER", "root");
    define("DBPASS", "");
    define("DBNAME", "myhomeboardphp");

    /*********************************************
    *
    * The below configuration is for customization
    * of the site
    *
    **********************************************/

    /* Overall Site Configuration */
    define("URL", "http://localhost"); // The URL that the website is hosted on, no trailing slash.
    define("WebName", "MyHomeBoardPHP"); // The name that shows on the navigation bar, title etc.
    define("Name", "Name"); // Your name. :-)
    define("DarkMode", false); // Uses a darker mode for the site intead of the standard white mode
    define("MHBPHP_Version", "3.0.1b2"); // dinny touch this 
    define("MHBPHP_HideVersion", false); // Lets you hide the version that appears in the footer for security
    define("MHBPHP_HideCU", false); // Lets you hide the Check for Updates button in the management dropdown
    define("MHBPHP_DevFlag", true); // dinny touch this
    define("MHBPHP_Release","2021-05-07");
    define("MHBPHP_FR", true); // First run or not, this needs updated to false to remove the introduction text
    define("MHBPHP_FR_LANG", "EN-SCOT"); // dinny touch this, it's not full implemented yet.

    /* Meta Tags Configuration */
    define("MetaAuthor", "Laim");
    define("MetaKeywords", "MyHomeBoardPHP, GitHub");
    define("MetaDescription", "MyHomeBoardPHP is a hostable homepage allowing you to take your bookmarks anywhere without the need of syncing browsers, as well as allowing you to customise with quick widgets.");

    /* Search Bar */
    define("ExternalSearchEnabled", true);
    define("ExternalSearchPlaceholder", "Google Search");
    define("ExternalSearch","http://google.com/search?q="); // If you want to use another search engine, replace it here. I.E. http://www.bing.com/search?q=

    /* Navbar Configuration */
    define("NavCustom", false);
    define("NavCustomColor", "#c42b45");
    define("NavShowImage", true); // Enable this if you want to show an image instead of text on the navbar
    define("NavImage", "mhbphp-logo.png"); // Image should be placed in /assets/images/
    define("NavWidth", "35px");
    define("NavHeight", "35px");

    /* Weather Configuration */
    define("WeatherEnabled", true);
    define("WeatherAPIKey", ""); // Create an account at https://openweathermap.org and put your API key here
    define("WeatherLocation", "Glasgow");

    /* Date and Time Configuration */
    define("TimeEnabled", true);
    define("Timezone", "Europe/London"); // Timezones list: http://php.net/manual/en/timezones.php
    define("TimezoneLG", "d M Y H:iA"); // Time formatting: http://php.net/manual/en/function.date.php
    define("TimezoneSM", "d/m/y"); // Time formatting: http://php.net/manual/en/function.date.php

    /* News Configuration
    TODO: Update API to one that isn't trash or using get_file_contents
    */
    define("NewsEnabled", false);
    define("NewsShowBody", false); // Hide or Show article body
    define("NewsArticleCount", 2); // The amount of articles you want to appear.
    define("NewsAPI", "");
    define("NewsQuery", "Brexit"); // The topic you want to see if the news type is "everything".
    define("NewsSource", "techcrunch"); // The news source if type is top-headlines, list available here: https://newsapi.org/sources
    define("NewsType", "top-headlines"); // everything or top-headlines
    define("NewsDateFormat", "d M Y H:iA"); // Time formatting: http://php.net/manual/en/function.date.php

?>
