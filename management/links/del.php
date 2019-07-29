<?php
    require("../../include/configuration.php");
    require("../../include/helper.php");
    require("../../include/db/conn.php");
    require("../../include/db/func.php");

    $home = new MyHomeBoardPHP($pdo);

    if(isset($_GET['action']) && isset($_GET['id']) && isset($_GET['type'])){
        $type = htmlentities($_GET['type']);
        $action = htmlentities($_GET['action']);
        $id = htmlentities($_GET['id']);
    
          if ($type == 'link') {
            $name = $home->GetLinkInfo($id)[0]['LinkName'];
          } elseif ($type == 'header') {
            $name = $home->GetHeaderInfo($id)[0]['HeaderName'];
          }

          if(isset($_POST['con_delete'])) {
            // Delete Code
            if ($type == 'link') {
              $home->DeleteLink($id);
            } elseif ($type == 'header') {
              $home->DeleteHeader($id);
            }

            header("location: " . URL . "/management/links/?action=deleted&name=" . $name . "&type=" . $type);
            die();
          }

          if(isset($_POST['can_delete'])) {
            header("location: " . URL . "/management/links/?action=kept&name=" . $name . "&type=" . $type);
            die();
          }

    } else {
        header("location: " . URL . "/management/links/");
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
    <?php print(WebName);?> - Link Management - Delete
  </title>

  <?php require("../../include/style/css.php");?>
</head>

<body>

  <?php require("../../include/navigation.php");?>

  <main role="main" class="container">

		<div class="row">
      <div class="col">
        <h4>Delete <?php if ($type == 'link') { print("Link"); } elseif ($type == 'header') { print ("Header"); } ?></h4>
        <hr>
        <p>
          You are about to permanently delete 
            <span class="font-italic font-weight-bold"><?php print($name);?></span> 
          do you wish to continue?
        </p>  
        <form action="" method="post">
          <div class="row">
            <div class="col">
              <button type="submit" class="btn btn-primary btn-lg btn-block" id="con_delete" name="con_delete">Continue</button>
            </div>
            <div class="col">
              <button type="submit" class="btn btn-danger btn-lg btn-block" id="can_delete" name="can_delete">Cancel</button>
            </div> 
          </div>
        </form>
      </div>
		</div>

	  <!-- /. Links List -->
    <?php require("../../include/footer.php"); ?>
    </main><!-- /.container -->

  <?php require("../../include/style/javascript.php");?>
</body>
</html>
