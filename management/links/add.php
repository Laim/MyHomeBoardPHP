<?php
    require("../../include/configuration.php");
    require("../../include/helper.php");
    require("../../include/db/conn.php");
    require("../../include/db/func.php");

    $home = new MyHomeBoardPHP($pdo);

    if(isset($_GET['type'])) {
        $type = strtolower(htmlentities($_GET['type']));

        // Add Link Submit
        if(isset($_POST['al_submit'])) {
            $db_new_link_hid = htmlentities($_POST['LinkHeader']);
            $db_new_linkname = htmlentities($_POST['LinkName']);
            $db_new_linkhref = htmlentities($_POST['LinkHref']);
            $db_new_linkorder = $home->GetLinkCountPerHID($db_new_link_hid) + 1;
            $db_new_linkcustomvar = addslashes($_POST['LinkCustomVar']);
            $db_new_linkfontawesome = htmlentities($_POST['LinkFontAwesome']);
            
            if(!empty($db_new_linkname) && !empty($db_new_linkhref)) {
                $home->AddLink($db_new_link_hid, $db_new_linkname, $db_new_linkhref, $db_new_linkorder, $db_new_linkcustomvar, $db_new_linkfontawesome);
            
                header("location: " . URL . "/management/links/?action=added&name=" . $db_new_linkname . "&type=link");
                die();
            }
        }

        // Add Header Submit
        if(isset($_POST['ah_submit'])) {
            $db_new_headername = htmlentities($_POST['HeaderName']);
            $db_new_headerlink = "#";
            $db_new_headerorder = $home->GetHeaderCount() + 1;
            $db_new_headerddname = addslashes($_POST['HeaderDDName']);
            $db_new_headerfontawesome = htmlentities($_POST['HeaderFontAwesome']);
            
            if(!empty($db_new_headername) && !empty($db_new_headerddname)) {
                $home->AddHeader($db_new_headername, $db_new_headerlink, $db_new_headerorder, $db_new_headerddname, $db_new_headerfontawesome);
            
                header("location: " . URL . "/management/links/?action=added&name=" . $db_new_linkname . "&type=link");
                die();
            }
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
    <?php print(WebName);?> - Management - Add 
  </title>

  <?php require("../../include/style/css.php");?>
</head>

<body>

    <?php require("../../include/navigation.php");?>

    <main role="main" class="container">

    <?php /* Add Link */ if($type == "link") { ?>
        <div class="row">
            <div class="col">
            <h4>Add Link</h4>
            <hr>
                <form action="" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="LinkHeader">Link Header</label>
                                <select class="form-control" id="LinkHeader" name="LinkHeader">
                                    <option value="0">No Header</option>
                                    <?php foreach($home->AllHeaders() as $h) { ?>
                                    <option value="<?php print($h['HID']);?>" ><?php print($h['HeaderName']);?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LinkName">Link Name</label>
                        <input type="text" class="form-control" id="LinkName" name="LinkName" placeholder="MyHomeBoardPHP" required>
                    </div>
                    <div class="form-group">
                        <label for="LinkHref">Link Href</label>
                        <input type="url" class="form-control" id="LinkHref" name="LinkHref" placeholder="https://github.com/laim/MyHomeBoardPHP" required>
                    </div>
                    <div class="form-group">
                        <label for="LinkFontAwesome">Link Font Awesome</label>
                        <input type="text" class="form-control" id="LinkFontAwesome" name="LinkFontAwesome" placeholder="fab fa-github">
                        <label for="LinkFontAwesome" class="text-muted mt-1" style="font-size: 12px;">Full list of icons available <a href="//fontawesome.com/icons" target="_blank">here</a>.</label>
                    </div>
                    <div class="form-group">
                        <label for="LinkCustomVar">Link Custom Variable</label>
                        <input type="text" class="form-control" id="LinkCustomVar" name="LinkCustomVar" placeholder="rel=&quot;nofollow&quot; target=&quot;_blank&quot;">
                    </div>
                    <button type="submit" class="btn btn-primary float-right" id="al_submit" name="al_submit">Save</button>
                </form>
            </div>
        </div>
    <?php /* Add Header */ } elseif($type == "header") { ?>
        <div class="row">
            <div class="col">
            <h4>Add Header</h4>
            <hr>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="HeaderName">Header Name</label>
                        <input type="text" class="form-control" id="HeaderName" name="HeaderName" placeholder="Development" required>
                    </div>
                    <div class="form-group">
                        <label for="HeaderFontAwesome">Header Font Awesome</label>
                        <input type="text" class="form-control" id="HeaderFontAwesome" name="HeaderFontAwesome" placeholder="fab fa-github">
                        <label for="HeaderFontAwesome" class="text-muted mt-1" style="font-size: 12px;">Full list of icons available <a href="//fontawesome.com/icons" target="_blank">here</a>.</label>
                    </div>
                    <div class="form-group">
                        <label for="HeaderDDName">Header Dropdown Name</label>
                        <input type="text" class="form-control" id="HeaderDDName" name="HeaderDDName" placeholder="dropdownDevelopment" required>
                        <label for="HeaderDDName" class="text-muted mt-1" style="font-size: 12px;">This is required, suggestion: dropdownHeaderName</label>
                    </div>
                    <button type="submit" class="btn btn-primary float-right" id="ah_submit" name="ah_submit">Save</button>
                </form>
            </div>
        </div>
    <?php } ?>

    <?php require("../../include/footer.php"); ?>
    </main><!-- /.container -->

    <?php require("../../include/style/javascript.php");?>
</body>

</html>