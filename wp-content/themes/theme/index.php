<?php

$bloginfo_url = get_bloginfo('url');
$bloginfo_css = get_bloginfo('stylesheet_directory');
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <title>TiagoSoares.dev - Desenvolvedor Wordpress</title>

  <link rel="stylesheet" href="<?php echo $bloginfo_css; ?>/assets/css/bootstrap.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="<?php echo $bloginfo_css; ?>/assets/css/style.css" type="text/css" charset="utf-8">
  <link rel="stylesheet" href="<?php echo $bloginfo_css; ?>/assets/css/fontawesome.css" type="text/css" charset="utf-8">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">TiagoSoares.dev</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse nav-desk" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Projetos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <section class="sobre text-center">
    <div class="container">
      <div class="foto">
        <img src="<?php echo $bloginfo_css; ?>/assets/images/profile.jpeg"
          alt="Pele branca, cabelos cacheados, pouca barba e bigode, sorrindo.">
      </div>

      <h1>Tiago Soares</h1>
      <small>Desenvolvedor WordPress</small>
      <a class="btn-padrao" href="#">Entre em contato</a>
    </div>
  </section>

  <script src="<?php echo $bloginfo_css; ?>/assets/js/jquery.js"></script>
  <script src="<?php echo $bloginfo_css; ?>/assets/js/bootstrap.js""></script>

</body>

</html>