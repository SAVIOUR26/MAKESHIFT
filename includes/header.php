<?php
// Determine current page for nav highlighting
$page = basename($_SERVER['PHP_SELF']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="<?= $meta_desc ?? 'Makeshift Logistics (U) Limited — Uganda\'s trusted partner for freight, cargo, warehousing, supply chain management and general supplies. Based in Kampala.' ?>">
  <meta name="keywords" content="logistics Uganda, cargo Kampala, freight forwarding Uganda, warehousing Kampala, supply chain Uganda, general supplies Uganda">
  <meta property="og:title" content="<?= $page_title ?? 'Makeshift Logistics (U) Limited' ?>">
  <meta property="og:description" content="<?= $meta_desc ?? 'Reliable logistics and general supplies solutions across Uganda and East Africa.' ?>">
  <meta property="og:image" content="https://makeshiftlogistics.com/assets/og-image.jpg">
  <meta property="og:url" content="https://makeshiftlogistics.com">
  <meta name="theme-color" content="#0D1F3C">

  <title><?= $page_title ?? 'Makeshift Logistics (U) Limited | Kampala, Uganda' ?></title>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/favicon.svg">
  <link rel="shortcut icon" href="assets/favicon.svg">

  <!-- Font Awesome 6 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Barlow+Condensed:wght@600;700;800&display=swap" rel="stylesheet">

  <!-- Main CSS -->
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
