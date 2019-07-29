<?php
    require("../include/configuration.php");
    require("../include/helper.php");
    require("../include/db/conn.php");
    require("../include/db/func.php");

    $home = new MyHomeBoardPHP($pdo);

    header("location: " . URL . "/management/links/");
    die();
?>