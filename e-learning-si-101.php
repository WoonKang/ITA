<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.A-eLeaning</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style_head.css">
  <link rel="stylesheet" href="./css/style_elearning.css">
  <style>
   .display {margin-left:150px; margin-top:0px;}
  </style>
</head>

<body>
  <?php
  require_once('ita-elearning-top.php');
  ?>

  <header>Instituto Tecnologico "Ayacucho" &nbsp &nbsp
        <a href="e-learning-menu.php" style="color:red; text-decoration:none;">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp e-LEARNING system</a>
        <a href="e-learning-si-menu.php" style="color:black; font-style: normal; font-size:30px; text-shadow: 2px 2px 8px #FF0000;
                  float:right; margin-right:150px;">Sistemas Informaticos</a>
  </header>
  <div class="menu_elearning">
      <div><br></div>
      <div>
        <ul>
          <li><a style="background-color:blue; color:white; font-size:20px; padding:10px; text-align:center; margin-top:0px;
            font-style:normal;">
            <strong>WEB</strong></a></li>
          <li><a style="color:Black; font-size:15px; padding:20px; text-align:center; margin-top:0px;
            font-style:oblique;">HTML Tag</a></li>
        </ul>
      </div>
      <div class="display">
          <video width="800" height="250" controls muted autoplay>
             <source src="./data/si_101.mp4" type="video/mp4">
          </video>
      </div>
      <div class="display">
          <iframe src="./data/si_101.mht" style="border-color: blue; background-color: gainsboro;
                  width:800px; height:240px; display:block;"></iframe>
      </div>
  </div>
  
  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
