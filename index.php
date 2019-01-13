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
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="favicon.ico">

  <title>
    <?php print(WebName);?>
  </title>

  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

  <!-- Custom Styling -->
  <link href="<?php print(URL);?>/assets/css/custom.css" rel="stylesheet">
</head>

<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top box-shadow">
    <a class="navbar-brand" href="#">
      <?php echo(WebName);?></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbar">
      <ul class="navbar-nav mr-auto">
      <?php foreach($home->StandaloneLinks() as $SL) { ?>
        <li class="nav-item">
          <a class="nav-link" <?php print($SL['LinkCustomClasses']);?> href="<?php print($SL['LinkHref']);?>"><?php print($SL['LinkName']);?></a>
        </li>
      <?php } ?>
        <?php foreach($home->AllLinkHeaders() as $LH) { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php print($LH['HeaderLink']);?>" id="<?php print($LH['HeaderDDName']);?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<?php print($LH['HeaderName']);?>
          </a>
          <div class="dropdown-menu" aria-labelledby="<?php print($LH['HeaderDDName']);?>">
          <?php foreach($home->AllLinksPerHID($LH['HID']) as $L) { ?>
<a class="dropdown-item" <?php print($L['LinkCustomClasses']);?> href="<?php print($L['LinkHref']);?>"><?php print($L['LinkName']);?></a>
          <?php } ?>
          </div>
        </li>
        <?php } ?>
      </ul>
    </div>
  </nav>

  <main role="main" class="container">
    <?php if(ShowWeather == true) { ?>
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
        <?php if(ShowTime == true) { ?>
        <span class="float-right d-none d-sm-block">
          <?php print(date_time(TimezoneLG));?></span>
        <span class="float-right d-block d-sm-none">
          <?php print(date_time(TimezoneSM));?></span>
        <?php } ?>
        <hr>
      </div>
    </div><!-- /.top row -->

    <?php if(ShowNews == true) { ?>
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

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</body>

</html>