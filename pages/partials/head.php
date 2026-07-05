<!DOCTYPE html
      PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xmlns:spry="http://ns.adobe.com/spry">

<head>

      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

      <title><?php echo $title ?? "Personal Website"; ?></title>

      <link href="assets/SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />

      <link href="<?php echo $style; ?>" rel="stylesheet" type="text/css" />

      <?php if (isset($style_sidebar)) { ?>
            <link href="<?php echo $style_sidebar; ?>" rel="stylesheet" type="text/css" />
      <?php } ?>

      <?php if (isset($style_table)) { ?>
            <link href="<?php echo $style_table; ?>" rel="stylesheet" type="text/css" />
      <?php } ?>

      <?php if (isset($style_image)) { ?>
            <link href="<?php echo $style_image; ?>" rel="stylesheet" type="text/css" />
      <?php } ?>

      <?php if (isset($style_video)) { ?>
            <link href="<?php echo $style_video; ?>" rel="stylesheet" type="text/css" />
      <?php } ?>

      <?php if (isset($style_map)) { ?>
            <link href="<?php echo $style_map; ?>" rel="stylesheet" type="text/css" />
      <?php } ?>

      <?php if (isset($style_contactForm)) { ?>
            <link href="<?php echo $style_contactForm; ?>" rel="stylesheet" type="text/css" />
      <?php } ?>

      <link href="assets/styles/partials/header_style.css" rel="stylesheet" type="text/css" />
      <link href="assets/styles/partials/nav_style.css" rel="stylesheet" type="text/css" />
      <link href="assets/styles/partials/footer_style.css" rel="stylesheet" type="text/css" />

      <link href="assets/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">

      <link rel="stylesheet" href="assets/jquery/jquery-ui.css">

      <script src="assets/SpryAssets/SpryValidationTextField.js"></script>
      <script src="assets/jquery/jquery.js"></script>
      <script src="assets/jquery/jquery-ui.js"></script>
      <script src="assets/SpryAssets/SpryMenuBar.js"></script>
      <script src="assets/javascript/main.js"></script>

</head>