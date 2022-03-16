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
      <a class="navbar-brand" href="<?php echo $bloginfo_url; ?>/index.php">TiagoSoares.dev</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse nav-desk" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $bloginfo_url; ?>/index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $bloginfo_url; ?>/index.php/projetos"">Projetos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo $bloginfo_url; ?>/index.php/blog-posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>