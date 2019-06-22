<?php
  require("../include/configuration.php");
  require("../include/helper.php");
  require("../include/db/conn.php");
  require("../include/db/func.php");

  $home = new MyHomeBoardPHP($pdo);

  if (isset($_GET['name']) && isset($_GET['action']) && isset($_GET['type'])) {
      $alert_type = htmlentities($_GET['type']);
      $alert_action = htmlentities($_GET['action']);
      $alert_name = htmlentities($_GET['name']);
      $show_alert = true;
  } else {
      $show_alert = false;
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
    <?php print(WebName);?> - Link Management
  </title>

  <?php require("../include/style/css.php");?>
</head>

<body>

  <?php require("../include/navigation.php");?>

  <main role="main" class="container">

	<?php if($show_alert == true) { ?>
	<div class="row">
		<div class="col">
			<div class="alert alert-info" role="alert">
				The <?php print($alert_type . " <b>" . $alert_name . "</b>");?> has been <?php print($alert_action);?>.
			</div>
		</div>
	</div>
	<?php } ?>

		<div class="row">
			<div class="col-md-6 mb-2">
				<button class="btn btn-primary btn-links" id="links">Links</button>
				<button class="btn btn-primary btn-links" id="headers">Headers</button>
			</div>
			<div class="col-md-6 mb-2">
				<span class="float-right d-none d-md-block">
					<a href="<?php print(URL);?>/links/add.php?type=link">Add Link</a>
					<span> - </span>
					<a href="<?php print(URL);?>/links/add.php?type=header">Add Header</a>
				</span>
			</div>
		</div>
		<section class="link-sec">
			<div class="table-responsive">
				<table class="table table-bordered" style="background-color: rgb(245, 245, 245);">
				   <thead class="thead-light thead-cdark">
				  		<th>Order</th>
              <th>Header</th>
				  		<th>Name</th>
				  		<th class="d-none d-lg-table-cell">Font Awesome</th>
				  		<th>Tools</th>
				  	</thead>
				  	<tbody>
            <?php foreach($home->AllLinks() as $L) { ?>
            <tr>
                <td class="text-center"><?php print($L['LinkOrder']);?></td>
                <td><?php print($home->GetHeaderInfo($L['HID'])[0]['HeaderName']);?></td>
                <td><?php print($L['LinkName']);?></td>
                <td class="d-none d-lg-table-cell"><?php print($L['LinkFontAwesome']);?></td>
                <td class="text-center">
                  <a class="btn btn-primary btn-sm" href="<?php print(URL);?>/links/mod.php?id=<?php print($L['LID']);?>&action=edit&type=link">
                    <span class="fas fa-pencil-alt"></span>
                  </a>
        	        <a class="btn btn-primary btn-sm" href="<?php print(URL);?>/links/mod.php?id=<?php print($L['LID']);?>&action=delete&type=link">
                    <span class="fas fa-trash"></span>
                    </a>
                </td>
            </tr>
            <?php } ?>
            </tbody>
				  </table>
				</div>
			</section>
			<section class="header-sec" style="display: none;">
				<div class="table-responsive">
				  <table class="table table-bordered" style="background-color: rgb(245, 245, 245);">
				  	<thead class="thead-dark thead-cdark" style="padding: 5px;">
				  		<th>Order</th>
				  		<th>Name</th>
				  		<th class="d-none d-lg-table-cell">Font Awesome</th>
				  		<th>Tools</th>
				  	</thead>
				  	<tbody>
                    <?php foreach($home->AllHeaders() as $LH) { ?>
                        <tr>
                            <td class="text-center"><?php print($LH['HeaderOrder']);?></td>
                            <td><?php print($LH['HeaderName']);?></td>
                            <td class="d-none d-lg-table-cell"><?php print($LH['HeaderFontAwesome']);?></td>
                            <td class="text-center">
                            	<a class="btn btn-primary btn-sm" href="<?php print(URL);?>/links/mod.php?id=<?php print($LH['HID']);?>&action=edit&type=header">
                                	<span class="fas fa-pencil-alt"></span>
                              </a>
                           		<a class="btn btn-primary btn-sm" href="<?php print(URL);?>/links/mod.php?id=<?php print($LH['HID']);?>&action=delete&type=header">
                                    <span class="fas fa-trash"></span>
                                </a>
                            </td>
                        </tr>
					<?php } ?>
                    </tbody>
				  </table>
				</div>
			</section>

	  <!-- /. Links List -->
    <?php require("../include/footer.php"); ?>
    </main><!-- /.container -->

  <?php require("../include/style/javascript.php");?>
  <script type="text/javascript">
		$('#links').on('click', function(e){

			$('.header-sec').css({
				"display" : "none",
			});
			$('.link-sec').css({
				"display" : "block",
			});

		});

		$('#headers').on('click', function(e){

			$('.link-sec').css({
				"display" : "none",

			});
			$('.header-sec').css({
				"display" : "block",
			});

		});
  </script>
</body>
</html>
