<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php bloginfo('name'); ?></title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Philosopher:400,400i,700,700i|Ubuntu:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body class="body">

  <div class="wrapper">

    <header class="header">

    <!-- Top nav -->
    <nav class="main__nav navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Sur les routes de la vie</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="main__nav__ul navbar-nav ml-auto mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">A propos de moi</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Mes vélos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Articles</a>
              </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="recherche" placeholder="Je cherche..." aria-label="Recherche">
            <button class="btn button__search my-2 my-sm-0" type="submit"><i class="fa fa-search mr-2" aria-hidden="true"></i>Je trouve</button>
            </form>
          </div>
        </nav> <!-- Fin top nav -->

        <!-- Aside nav visible à partir de laptop -->
        <nav class="second__nav navbar" id="sideNav">
          <ul class="second__nav__ul navbar-nav" role="list">
            <li class="nav-item" role="listitem">
              <a class="nav-link second__nav__link" href="https://www.facebook.com/lemiere.francois" target="_blank" title="Accéder à mon compte Facebook dans un nouvel onglet">
                <i class="fa fa-facebook-square" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item" role="listitem">
              <a class="nav-link second__nav__link" href="https://www.instagram.com/francoislemiere/" target="_blank" title="Accéder à mon compte Instagram dans un nouvel onglet">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item" role="listitem">
              <a class="nav-link second__nav__link" href="https://www.linkedin.com/in/francois-lemiere-68075b124/" target="_blank" title="Accéder à mon profil LinkedIn dans un nouvel onglet">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
            </li>
            <li class="nav-item" role="listitem">
              <a class="nav-link second__nav__link" href="mailto:lemiere.francois@free.fr" target="_blank" title="M'envoyer un e-mail à lemiere.francois@free.fr" itemprop="email">
                <i class="fa fa-envelope" aria-hidden="true"></i>
              </a>
            </li>
        </ul>
        </nav> <!-- Fin aside nav -->

    </header>

    <main class ="main">