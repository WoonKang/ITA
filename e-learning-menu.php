<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.A-eLeaning</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style_head.css">
  <link rel="stylesheet" href="./css/style_elearning.css">
</head>

<body>
  <?php
  require_once('ita-elearning-top.php');
  ?>

  <header>Instituto Tecnologico "Ayacucho" &nbsp &nbsp
        <a href="e-learning-menu.php" style="color:red; text-decoration:underline; float:right; margin-right:150px;">e-LEARNING system</a>
  </header>

  <div class="menu_elearning">
    <img src="./images/ita-carreras.png" style="margin-left:150px;">
    <div class="sub-si"><a href="e-learning-si-menu.php">Sistemas Informaticos</div>
    <div class="sub-mi"><a href="#">Mecanica Industrial</div>
    <div class="sub-em"><a href="#">Electro Mecanica</div>
    <div class="sub-el"><a href="#">Electronica</div>
    <div class="sub-ma"><a href="#">Mecanica Automotoriz</div>
    <div class="sub-cc"><a href="#">Construccion Civil</div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
