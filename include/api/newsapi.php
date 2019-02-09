<?php

    //Data provided by https://newsapi.org  

    if(!empty(NewsAPI)) {
        //get JSON
        $from_date = date_time('Y-m-d');
        $to_date = date_time('Y-m-d');

        if (NewsType == "everything") {
            $request = 'https://newsapi.org/v2/everything?q=' . NewsQuery . '&from=' . $from_date .'&to=' . $to_date .'&sortBy=popularity&apiKey='. NewsAPI;
        } elseif (NewsType == "top-headlines") {
            $request = 'https://newsapi.org/v2/top-headlines?sources=' . NewsSource . '&apiKey=' . NewsAPI;
        }
        
        $json = file_get_contents($request);
        //decode JSON to array
        $data = json_decode($json,true);
    }
?>