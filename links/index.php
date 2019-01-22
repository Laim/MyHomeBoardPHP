<?php
    require("../include/configuration.php");
    require("../include/helper.php");


    //

    require("../include/db/conn.php");
    require("../include/db/func.php");

    $home = new MyHomeBoardPHP($pdo);

    //
    
    if (isset($_GET['name']) && isset($_GET['action']) && isset($_GET['type'])) {
        $d_type = htmlentities($_GET['type']);
        $d_action = htmlentities($_GET['action']);
        $d_name = htmlentities($_GET['name']);
        $d_alert = true;
    } else {
        $d_alert = false;
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
  <link rel="shortcut icon" href="https://demo-code.laimmckenzie.com/MyHomeBoardPHP/favicon.ico" type="image/x-icon"/>

  <title>
    <?php print(WebName);?> - Link Management
  </title>

  <?php require("../include/style/css.php");?>
</head>

<body>

  <?php require("../include/navigation.php");?>

  <main role="main" class="container">

    <?php if($d_alert == true) { ?>
    <div class="row">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                The <?php print($d_type . " <b>" . $d_name . "</b>");?> has been <?php print($d_action);?>.
            </div>
        </div>
    </div>
    <?php } ?>

    <div class="row">
        <div class="col">
        <h4><a href="<?php print(URL);?>/add.php?type=header">Add New Header</a> - <a href="<?php print(URL);?>/add.php?type=link">Add New Link</a></h4>
        <hr>
        <p class="text-bold">Headers</p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">Name</th>
                            <th scope="col">Font Awesome</th>
                            <th scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($home->AllHeaders() as $LH) { ?>
                        <tr>
                            <td class="text-center"><?php print($LH['HeaderOrder']);?></td>
                            <td><?php print($LH['HeaderName']);?></td>
                            <td><?php print($LH['HeaderFontAwesome']);?></td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="<?php print(URL);?>/links/mod.php?id=<?php print($LH['HID']);?>&action=edit&type=header">
                                            <span class="fas fa-pencil-alt"></span>
                                        </a>
                                    </div> 
                                    <div class="col">
                                        <a href="<?php print(URL);?>/links/mod.php?id=<?php print($LH['HID']);?>&action=delete&type=header">
                                            <span class="fas fa-trash"></span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /. Header List -->
    <!-- Links List -->
    <div class="row">
        <div class="col">
        <p class="text-bold">Links</p>
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Order</th>
                            <th scope="col">Name</th>
                            <th scope="col">Link Href</th>
                            <th scope="col">Font Awesome</th>
                            <th scope="col">Tools</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($home->AllLinks() as $L) { ?>
                        <tr>
                            <td class="text-center"><?php print($L['LinkOrder']);?></td>
                            <td><?php print($L['LinkName']);?></td>
                            <td><?php print($L['LinkHref']);?></td>
                            <td><?php print($L['LinkFontAwesome']);?></td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a href="<?php print(URL);?>/links/mod.php?id=<?php print($L['LID']);?>&action=edit&type=link">
                                            <span class="fas fa-pencil-alt"></span>
                                        </a>
                                    </div> 
                                    <div class="col">
                                        <a href="<?php print(URL);?>/links/mod.php?id=<?php print($L['LID']);?>&action=delete&type=link">
                                            <span class="fas fa-trash"></span>
                                        </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /. Links List -->
  <?php require("../include/footer.php"); ?>
  </main><!-- /.container -->

  <?php require("../include/style/javascript.php");?>
</body>

</html>