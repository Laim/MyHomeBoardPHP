<div class="row mt-5 mb-3 text-muted text-center">
      <div class="col-md text-left">
        <p>
          Powered by <a href="https://github.com/laim/MyHomeBoardPHP">MyHomeBoardPHP</a>
          <?php if(MHBPHP_DevFlag == true) { ?>
            <br>Development Build: <?php print(" " . MHBPHP_Version); ?>
            <br>Release Date: <?php print(MHBPHP_Release); ?>
          <?php } ?>
          <?php if(MHBPHP_HideVersion == false && MHBPHP_DevFlag == false) { print(" " . MHBPHP_Version); }?>
        </p>
      </div>
    </div>