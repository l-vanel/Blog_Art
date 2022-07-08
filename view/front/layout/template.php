<!DOCTYPE html>
<html style="font-size: 16px;">
<head>
<!-- ==== nicepage ==== -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta charset="utf-8">
  <meta name="page_type" content="np-template-header-footer-from-plugin">
  <title><?= $title; ?></title>
  <link rel="stylesheet" href="public/frontend/css/nicepage.css" media="screen">
  <link rel="stylesheet" href="public/frontend/css/accueil.css" media="screen">
  <script class="u-script" type="text/javascript" src="public/frontend/js/jquery.js" defer=""></script>
  <script class="u-script" type="text/javascript" src="public/frontend/js/nicepage.js" defer=""></script>
  <meta name="generator" content="Nicepage 4.12.21, nicepage.com">
  <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
  <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <script type="application/ld+json">
  {
    "@context": "http://schema.org",
    "@type": "Organization",
    "name": "",
    "logo": "public/frontend/images/default-logo-2.png",
    "sameAs": []
  }
  </script>
  <meta name="theme-color" content="#aea78e">
  <meta property="og:title" content="home">
  <meta property="og:type" content="website">
<!-- ==== tailwind ==== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <link rel="stylesheet" href="public/assets/css/animate.css" />
  <link rel="stylesheet" href="public/assets/css/tailwind.css" />
  <script src="assets/js/wow.min.js"></script>
  <script>
    new WOW().init();
  </script>

</head>

<body class="u-body u-xl-mode">

  <?= require_once("view/front/_partials/header.php"); ?>

  <?= $content; ?>

  <?= require_once("view/front/_partials/footer.php"); ?>

</body>
</html>
