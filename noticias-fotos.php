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
  function list_foto(){
    $list=scandir('./noticias/fotos');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($list[$i] < 6 ){ $filename[$i]=substr($list[$i], 0, -4); $result=$list[$i];
          ?>
          <div style="width:200px; height:120px; float:left; margin-top:0px; margin-left:10px;">
            <p style="margin-top:0; font-size:15px; margin-left:10px; color:blue;"><?=$filename[$i]?></p>
            <a href="noticias-fotos.php?id=<?=$filename[$i]?>">
            <img src="./noticias/fotos/<?php echo $result; ?>" width="200" height="120" style="margin-top:0px; margin-left:10px;"> </a>
          </div>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>

  <?php
  function foto_title(){
    if (isset($_GET['id'])) {
      echo $_GET['id'];
    }
    else {
      echo ('No hay la foto');
    }
  }
 ?>

 <?php
 function foto_text(){
   $check_text = "./noticias/textos/".$_GET['id'];
   if(file_exists($check_text)) { ?>
     <iframe src="./noticias/textos/<?php echo $_GET['id']; ?>" width="620" height="272" style="border:1px solid grey;"></iframe>
   <?php
   }
   else {
     echo ('No hay el contenido...............');
   }
 }
?>

   <div>
     <a><br></a>
     <a style="color:black; margin-left:150px; font-style: italic; font-weight: bold; font-size: 20px;">Las Noticias de ITA</a>
   </div>
   <div style="width:1100px; height:150px; margin-top:0px; margin-left:90px;">
     <ol>
     <?php
       list_foto();
      ?>
     </ol>
   </div>

   <div style="width:430px; height:270px; margin-top:0px; margin-left:140px; float:left;">
    <p style="margin-top:0; font-size:20px; margin-left:10px; color:black;"><?php foto_title() ?></p>
     <img src="./noticias/fotos/<?php echo $_GET['id']; ?>.jpg" width="410" height="270" style="margin-top:0px; margin-left:10px;" >
   </div>
   <div style="margin-top:20px; margin-left:0px; float:left;">
     <?php
       foto_text();
      ?>
   </div>

   <!-- common bottom -->
   <?php
   require_once('ita-bottom.php');
   ?>
