  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">

  <!-- Font Awesome -->
  <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

  <!-- Custom Styling -->
  <link href="<?php print(URL);?>/assets/css/custom.css" rel="stylesheet">

<?php if (NavCustom == true) { ?>
    <style>
    .bg-custom
    {
      background-color: <?php print(NavCustomColor);?> !important
    }
  </style>
<?php } ?>