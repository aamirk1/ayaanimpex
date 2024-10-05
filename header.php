<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ayaan Metal - Leading Nut Bolts, Stud Bolts, Pipe, Flanges Manufacturer in India</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="asset/css/style.css">
    <link rel="stylesheet" href="asset/css/style2.css">
    <link rel="stylesheet" href="asset/css/settings.css">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/bootstrap-slider.min.css">
    <link rel="stylesheet" href="asset/css/skin-1.css">
    <link rel="stylesheet" href="asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset/css/magnific-popup.min.css">
    <link rel="stylesheet" href="asset/css/font-awesome.min.css">
    <link rel="stylesheet" href="asset/css/switcher.css"> -->
    <?php
$stylesheets = [
    'asset/css/style.css',
    'asset/css/style2.css',
    'asset/css/settings.css',
    'asset/css/bootstrap.min.css',
    'asset/css/bootstrap-slider.min.css',
    'asset/css/skin-1.css',
    'asset/css/owl.carousel.min.css',
    'asset/css/magnific-popup.min.css',
    'asset/css/font-awesome.min.css',
    'asset/css/switcher.css',
    'asset/css/lc_lightbox.css',
    'asset/css/flaticon.min.css',
];

foreach ($stylesheets as $stylesheet) {
    echo '<link rel="stylesheet" href="' . htmlspecialchars($stylesheet) . '">' . PHP_EOL;
}
?>
<link rel="stylesheet" href="plugins/revolution/css/settings.css">
<link rel="stylesheet" href="plugins/revolution/css/navigation.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
  <body>
  <?php
include('topbar.php');

include('navbar.php');
?>