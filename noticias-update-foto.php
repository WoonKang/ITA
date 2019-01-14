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
          if($list[$i] < 22 ){ $filename[$i]=substr($list[$i], 0, -4); $result=$list[$i];
          ?>
          <a href="noticias-update-foto.php?id=<?=$filename[$i]?>">
          <ol style="margin-top:5; font-size:17px; margin-left:20px;"><?=$filename[$i]?></ol></a>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>

   <?php
   $message = "Seleccione de la lista para actualizar...." ;
   function foto_title(){
     if (isset($_GET['id'])) {
       $ftitle = $_GET['id'];
       $message = " " ; }
     else {
       $ftitle = " ";
       $message = "Seleccione de la lista para actualizar." ;
     }
   }
  ?>
  <?php
  function foto_text(){
    if (isset($_GET['id'])) {
      $check_text = "./noticias/textos/".$_GET['id'];
      if(file_exists($check_text)) {
        echo file_get_contents("noticias/textos/".$_GET['id']);
     }
      else {
        echo "no hay detalle"; } }
    else {
        echo "no hay detalle..."; }
    }
  ?>

   <div>
     <a><br></a>
     <a style="color:black; margin-left:150px; font-style: italic; font-weight: bold; font-size: 20px;">Las Noticias de ITA</a>
   </div>
   <div style="width:400px; margin-top:0px; margin-left:90px; float:left;">
     <ol>
     <?php
       list_foto();
      ?>
    </ol>
  </div>
  <div class="admin">
      <div>
        <a href="noticias-process-delete-foto.php?id=<?=$_GET['id']?>"
           style="width:200px; font-weight:bold; margin-left:550px; margin-top:0px;">Eliminar la noticia</a>
        <img src="./noticias/fotos/<?php echo $_GET['id']; ?>.jpg" width="200" height="120" style="margin-top:0px; margin-left:0px;">
      </div>
      <div style="margin-top:0px; width:500px; float:left;">
        <form action="noticias-process-update-foto.php" method="post" enctype="multipart/form-data">
          <?php foto_title() ?>
          <input type="hidden" name="old_title" value="<?=$_GET['id']?>">
          <p style="float:none; margin-top:20px;">Title :  <input type="text" size=110 name="file_title" value="<?=$_GET['id']?>"></p>
          <p style="float:none; margin-top:20px;">Detalle : <textarea cols=82 rows=10 name="file_detalle"><?php foto_text() ?></textarea></p>
          <p style="float:none; margin-top:10px;"> <input type="submit" value="Actualizar"></p>
        </form>
      </div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
