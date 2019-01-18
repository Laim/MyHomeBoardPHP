<?php
  require("include/configuration.php");
  require("include/helper.php");
  require("include/api/include.php");

  //

  require("include/db/conn.php");
  require("include/db/func.php");

  $home = new MyHomeBoardPHP($pdo);

  //
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php print(META_DESCRIPTION);?>">
  <meta name="author" content="<?php print(META_AUTHOR);?>">
  <meta name="keywords" content="<?php print(META_KEYWORDS);?>">
  <link rel="icon" href="favicon.ico">

  <title>
    <?php print(WebName);?>
  </title>

  <?php require("include/style/css.php");?>
</head>

<body>

  <?php require("include/navigation.php");?>

  <main role="main" class="container">
    <?php if(WeatherEnabled == true) { ?>
    <div class="row">
      <div class="col">
        <p>
          <?php print($weather_type); ?> &bullet;
          <?php print($weather_temp); ?>&deg;c &bullet;
          <?php print($weather_location);?>
        </p>
      </div>
    </div> <!-- /.weather row -->
    <?php } ?>

    <div class="row">
      <div class="col">
        <span>
          <?php print(greetings() . ", " . Name);?></span>
        <?php if(TimeEnabled == true) { ?>
        <span class="float-right d-none d-sm-block">
          <?php print(date_time(TimezoneLG));?></span>
        <span class="float-right d-block d-sm-none">
          <?php print(date_time(TimezoneSM));?></span>
        <?php } ?>
        <hr>
      </div>
    </div><!-- /.top row -->

    <?php if(NewsEnabled == true) { ?>
    <div class="row mb-2">

      <?php $x = 0; while($x < ArticleCount) { ?>
      <div class="col-md-6">
        <div class="card flex-md-row mb-4 box-shadow h-md-250">
          <div class="card-body d-flex flex-column align-items-start">
            <strong class="d-inline-block mb-2 text-primary">
              <?php print($data['articles'][$x]['source']['name']);?></strong>
            <h4 class="mb-0">
              <p class="text-dark">
                <?php print(news_substr($data['articles'][$x]['title'], 76));?>
              </p>
            </h4>
            <time class="mb-1 text-muted" datetime="<?php print($data['articles'][$x]['publishedAt']);?>">
              <?php print(news_date_time($data['articles'][$x]['publishedAt'], NewsDateFormat));?></time>
            <p class="card-text mb-auto">
              <?php print(news_substr($data['articles'][$x]['description'], 80)); ?>
            </p>
            <a class="mt-1" href="<?php print($data['articles'][$x]['url']);?>" target="_blank">Continue reading</a>
          </div>
        </div>
      </div>
      <?php $x++; } ?>

    </div>
    <?php } ?>

    <div class="row mt-3 mb-3 text-muted text-center">
      <div class="col-md text-left">
        <p>Powered by <a href="https://github.com/laim/MyHomeBoardPHP">MyHomeBoardPHP</a> <?php print(MHBPHPVersion);?>.</p>
      </div>
    </div>
  </main><!-- /.container -->

  <?php require("include/style/javascript.php");?>
</body>

</html>