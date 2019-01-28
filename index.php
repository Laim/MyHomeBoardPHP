<?php
  require("include/configuration.php");
  require("include/helper.php");
  require("include/db/conn.php");
  require("include/db/func.php");

  // Page specific
  require("include/api/include.php");

  $home = new MyHomeBoardPHP($pdo);

  if (isset($_POST['submit'])) {
    header('Location: ' . ExternalSearch . $_POST['ext_search']);
    die();
  }
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="<?php print(MetaDescription);?>">
  <meta name="author" content="<?php print(MetaAuthor);?>">
  <meta name="keywords" content="<?php print(MetaKeywords);?>">
  <link rel="shortcut icon" href="<?php print(URL);?>/favicon.ico" type="image/x-icon"/>

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
          <?php print(greetings() . ", " . Name);?>
        </span>
        <?php if(TimeEnabled == true) { ?>
        <span class="float-right d-none d-sm-block">
          <?php print(date_time(TimezoneLG));?></span>
        <span class="float-right d-block d-sm-none">
          <?php print(date_time(TimezoneSM));?></span>
        <?php } ?>
        <hr>
      </div>
    </div><!-- /.top row -->

    <?php if(ExternalSearchEnabled == true) { ?>
    <div class="row">
      <div class="col">
        <form name="form" action="" method="post">
          <div class="input-group mb-3">
            <input type="text" name="ext_search" class="form-control" placeholder="<?php print(ExternalSearchPlaceholder);?>" aria-label="<?php print(ExternalSearchPlaceholder);?>" aria-describedby="ext_search">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary" type="submit" id="ext_search" name="submit">Search</button>
            </div>
          </div>
        <form>
      </div>
    </div>
    <?php } ?>

    <?php if(NewsEnabled == true) { ?>
    <div class="row mb-2">

      <?php $x = 0; while($x < NewsArticleCount) { ?>
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
            <?php if(NewsShowBody == true) { ?>
            <p class="card-text mb-auto">
               <?php print(news_substr($data['articles'][$x]['description'], 80)); ?>
            </p>
            <?php } ?>
            <a class="mt-1" href="<?php print($data['articles'][$x]['url']);?>" target="_blank">Read Article</a>
          </div>
        </div>
      </div>
      <?php $x++; } ?>

    </div>
    <?php } ?>

    <?php require("custom.php"); //custom widgets ?>

  <?php require("include/footer.php"); ?>
  </main><!-- /.container -->

  <?php require("include/style/javascript.php");?>
</body>

</html>
