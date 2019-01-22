<?php
    require("../include/configuration.php");
    require("../include/helper.php");


    //

    require("../include/db/conn.php");
    require("../include/db/func.php");

    $home = new MyHomeBoardPHP($pdo);
    
    //

    if(isset($_GET['action']) && isset($_GET['id']) && isset($_GET['type'])){
        $type = htmlentities($_GET['type']);
        $action = htmlentities($_GET['action']);
        $id = htmlentities($_GET['id']);

        if($action == "delete") {
            
            if ($type == 'link') {
                $name = $home->GetLinkInfo($id)[0]['LinkName'];
                $home->DeleteLink($id);
            } elseif ($type == 'header') {
                $name = $home->GetHeaderInfo($id)[0]['HeaderName'];
                $home->DeleteHeader($id);
            }

            header("location: " . URL . "/links/?action=deleted&name=" . $name . "&type=" . $type);
            die();
        } elseif($action == "edit" && $type == "link") {
            $edit_linkname = $home->GetLinkInfo($id)[0]['LinkName'];
            $edit_linkhref = $home->GetLinkInfo($id)[0]['LinkHref'];
            $edit_linkorder = $home->GetLinkInfo($id)[0]['LinkOrder'];
            $edit_linkcustomvar = $home->GetLinkInfo($id)[0]['LinkCustomVar'];
            $edit_linkfontawesome = $home->GetLinkInfo($id)[0]['LinkFontAwesome'];

        }
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
        <div class="row">
            <div class="col">
            <h4>Edit Link</h4>
            <hr>
                <form action="" method="post">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="LinkHeader">Link Header</label>
                                <select class="form-control" id="LinkHeader" name="LinkHeader">
                                    <option value="0">No Header</option>
                                    <?php foreach($home->AllHeaders() as $h) { ?>
                                    <option value="<?php print($h['HID']);?>"><?php print($h['HeaderName']);?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="LinkOrder">Link Order</label>
                                <select class="form-control" id="LinkOrder" name="LinkOrder">
                                    <option>0</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="LinkName">Link Name</label>
                        <input type="text" class="form-control" id="LinkName" name="LinkName" placeholder="MyHomeBoardPHP" value="<?php print($edit_linkname);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="LinkHref">Link Href</label>
                        <input type="url" class="form-control" id="LinkHref" name="LinkHref" placeholder="https://github.com/laim/MyHomeBoardPHP" value="<?php print($edit_linkhref);?>" required>
                    </div>
                    <div class="form-group">
                        <label for="LinkFontAwesome">Link Font Awesome</label>
                        <input type="text" class="form-control" id="LinkFontAwesome" name="LinkFontAwesome" placeholder="fab fa-facebook" value="<?php print($edit_linkfontawesome);?>">
                    </div>
                    <div class="form-group">
                        <label for="LinkCustomVar">Link Custom Variable</label>
                        <input type="text" class="form-control" id="LinkCustomVar" name="LinkCustomVar" placeholder="rel=&quot;nofollow&quot; target=&quot;_blank&quot;" value="<?php print(htmlentities($edit_linkcustomvar, ENT_QUOTES));?>">
                    </div>
                    <button type="submit" class="btn btn-primary float-right" id="el_submit" name="el_submit">Save</button>
                </form>
            </div>
        </div>
    <?php require("../include/footer.php"); ?>
    </main><!-- /.container -->

    <?php require("../include/style/javascript.php");?>
</body>

</html>