<!DOCTYPE html>
<html>
<head>
  <?php print $head; ?>
  <title><?php print $head_title; ?></title>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  <meta name="author" content="Maria Paula Arias">
  <meta property="og:title" content="Maria Paula Arias" />

  <!-- Latest compiled and minified CSS -->

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <?php print $styles; ?>
  <?php print $scripts; ?>  
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <?php print $page_top; ?>
  <?php print $page; ?>
  <?php print $page_bottom; ?>
</body>
</html>
