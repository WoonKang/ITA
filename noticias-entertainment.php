<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.Ayachcho</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="./css/style_head.css">
  <link rel="stylesheet" href="./css/style_elearning.css">

</head>

<body>
  <?php
  require_once('ita-menu.php');
  ?>

  <?php
  function list_entertainment(){
    $list=scandir('./noticias/entertainment');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($list[$i] < 22 ){ $filename[$i]=substr($list[$i], 0, -4);
          ?>
          <a href="noticias-entertainment.php?id=<?=$filename[$i]?>" style="margin-top:0; font-size:17px; margin-left:0;">
              <?=$filename[$i]?></a><br>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>
  <?php
  function video_title(){
    if (isset($_GET['id'])) {
      echo $_GET['id'];
    }
    else {
      echo ('No hay la foto');
    }
  }
 ?>

 <div style="width:400px; margin-left:0px; float:left;">
   <div>
     <a><br></a>
     <a style="color:black; margin-left:0px; font-style: italic; font-weight: bold; font-size: 20px;">Entretenimiento</a>
   </div>
   <div style="width:400px; margin-top:0px; margin-left:0px;">
    <ol style="margin-left:0;">
     <?php
       list_entertainment();
      ?>
    </ol>
   </div>
 </div>
 <div style="width:670px; height:600px; margin-top:50px; margin-left:0px; float:left;">
    <p style="margin-top:0; font-size:17px; margin-left:10px; color:blue;"><?php video_title() ?></p>
    <div class="display" style="margin-left:0px;">
        <video width="670" height="400" controls autoplay>
           <source src="./noticias/entertainment/<?php echo $_GET['id'] ?>.mp4" type="video/mp4">
        </video>
    </div>
 </div>

 <!-- common bottom -->
 <?php
 require_once('ita-bottom.php');
 ?>
