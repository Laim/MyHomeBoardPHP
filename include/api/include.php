<?php
    if(WeatherEnabled == true) {
        require("include/api/OpenWeatherMap.php");
    }

    if(NewsEnabled == true) { 
        require("include/api/newsapi.php");
    }
?>