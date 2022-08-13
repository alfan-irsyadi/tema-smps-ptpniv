<!-- <?= bloginfo('stylesheet_url') ?> -->
<html>

<head>
  <title>SMPS PTPN IV</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/css/bootstrap.css'; ?>">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>

<body>

  <?php
  $list = array("Beranda", "Profil", "Informasi", "Alumni");
  $dropdown = array("Beranda" => array(""), "Profil" => array("Sejarah", "Struktur Organisasi"), "Informasi" => array("Pendaftaran", "Kelulusan"), "Alumni" => array(""));

  ?>

  <nav class="navbar-alfan" id="id-navbar">
    <!-- LOGO -->
    <div class="logo">
      <span id="id-logo">SMPS PTPN IV</span>
    </div>
    <ul class="navbar-ul" id="navbar-ul">
      <?php

      for ($i = 0; $i < count($list); $i++) :

      ?>
        <li class="navbar-li dropdown">
          <a href="" class=""><?= $list[$i] ?></a>

          <ul class="isi-dropdown">
            <?php
            if (count($dropdown[$list[$i]]) != 1) :
              for ($j = 0; $j < count($dropdown[$list[$i]]); $j++) : ?>
                <li><a href="#"><?= $dropdown[$list[$i]][$j] ?></a></li>
            <?php endfor;
            endif; ?>
          </ul>

        </li>

      <?php endfor ?>
      <!-- @auth
    <li class="navbar-li dropdown">
      <div class="dropdown show">
        <a class="nav-item dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Selamat datang, {{auth()->user()->username}}!
        </a>

        <ul class="isi-dropdown">
          <li><a href="#">Hi</a></li>
          <li><a href="#">Hi</a></li>
        </ul>
      </div>
    </li>
    @endauth -->
    </ul>
    <div class="menu" id="id-menu">
      <div class="menu-line"></div>
      <div class="menu-line"></div>
      <div class="menu-line"></div>
    </div>
  </nav>
  <div class="content">