<nav class="navbar navbar-expand-md navbar-dark bg-dark bg-custom fixed-top box-shadow">
    <a class="navbar-brand" href="<?php print(URL);?>">
      <?php if(NavShowImage == true) { ?>
        <img class="d-block" src="<?php print(URL);?>/assets/images/<?php print(NavImage);?>" width="<?php print(NavWidth);?>" height="<?php print(NavHeight);?>" alt="Navigation Logo">
      <?php } else { ?>
        <?php print(WebName);?>
      <?php } ?>
      </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-between" id="navbar">
      <ul class="navbar-nav mr-auto ">

        <!-- standalone links -->
        <?php foreach($home->StandaloneLinks() as $SL) { ?>
          <li class="nav-item">
            <a class="nav-link" <?php print(stripslashes($SL['LinkCustomVar']));?> href="<?php print($SL['LinkHref']);?>">
              <span class="<?php print($SL['LinkFontAwesome']);?>"></span>
              <?php print($SL['LinkName']);?>
            </a>
          </li>
        <?php } ?>

        <!-- Links with Dropdown -->
        <?php foreach($home->AllLinkHeaders() as $LH) { ?>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?php print($LH['HeaderLink']);?>" id="<?php print($LH['HeaderDDName']);?>" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="<?php print($LH['HeaderFontAwesome']);?>"></span>
            <?php print($LH['HeaderName']);?>
          </a>
          <div class="dropdown-menu" aria-labelledby="<?php print($LH['HeaderDDName']);?>">
          <?php foreach($home->AllLinksPerHID($LH['HID']) as $L) { ?>
              <a class="dropdown-item" <?php print(stripslashes($L['LinkCustomVar']));?> href="<?php print($L['LinkHref']);?>">
                <span class="<?php print($L['LinkFontAwesome']);?>"></span>
                <?php print($L['LinkName']);?>
              </a>
          <?php } ?>
          </div>
        </li>
        <?php } ?>
      </ul>
  
      <!-- non changable links -->
      <ul class="navbar-nav">
      <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="" id="dropdownManagement" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Management
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownManagement">
            <a class="dropdown-item" href="<?php print(URL);?>/links/">Link Management</a>
            <?php if(MHBPHP_HideCU == false) { ?>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="https://github.com/laim/myhomeboardphp/releases">Check for Updates</a>
            <?php } ?>
          </div>
        </li>
     </ul>
    </div>
  </nav>

<?php if(MHBPHP_DevFlag == true) { ?>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="alert alert-primary text-bold" role="alert">
          Development build of MyHomeBoardPHP <?php print(MHBPHP_Version);?>
        </div>
      </div>
    </div>
  </div>
<?php } ?>