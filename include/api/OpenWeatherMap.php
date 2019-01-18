<?php

    //Data provided by https://openweathermap.org    

    //icons https://openweathermap.org/weather-conditions
    //get JSON
    $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=' . WeatherLocation . '&units=metric&appid=' . WeatherAPIKey);
   
    //decode JSON to array
    $data = json_decode($json,true);
    
    $weather_type = $data['weather'][0]['main'];
    $weather_icon = $data['weather'][0]['icon'];
    $weather_id = $data['weather'][0]['id'];
    $weather_temp = Round($data['main']['temp']);
    $weather_country = $data['sys']['country'];
    $weather_city = $data['name'];
    $weather_location = $weather_city . ", " . $weather_country;
    
?>