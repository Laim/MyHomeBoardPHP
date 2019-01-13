<?php

function greetings()
{
    $time = date("H");
    $dt = new DateTime("now", new DateTimeZone(Timezone));
    $dt->setTimestamp(time());
    $time = $dt->format('H');
    if ($time < "12") {
        return "Good  Morning";
    } elseif ($time >= "12" && $time < "17") {
        return "Good Afternoon";
    } elseif ($time >= "17") {
        return "Good Evening";
    }
}

function date_time($t)
{
    $dt = new DateTime("now", new DateTimeZone(Timezone));
    $dt->setTimestamp(time());
    $time = $dt->format($t);
    return $time;
}

function news_substr($d, $a) {
    if (strlen($d) > $a) {
        return substr($d, 0, $a) . '...';
    } else {
        return $d;
    }
}

function news_date_time($t, $f) {
    $dt = new DateTime($t, new DateTimeZone(Timezone));
    $time = $dt->format($f);
    return $time;
}
?>