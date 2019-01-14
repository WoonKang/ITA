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
  function return_message() {
    if (isset($_GET['rmessage'])) {
      $message = $_GET['rmessage'];
      echo $message;
      $message = null ;
    }
    else {
      $message = null ;
    }
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
        <a style="width:200px; font-weight:bold; color:darkblue; text-decoration:underline; margin-left:0px;">Subir noticia nueva</a>
        <a style="color:red; font-style:italic; text-decoration:underline; margin-left:135px;">Si desea actualizar o eliminar, primero selecciónelo de la lista.</a>
      </div>
      <div style="margin-top:20px; width:500px; float:left;">
        <form action="noticias-process-create-foto.php" method="post" enctype="multipart/form-data">
          <p style="float:none;">Foto upload : <input type="file" size=94 name="fileToUpload" id="fileToUpload" accept="image/*"></p>
          <?php return_message() ?>
          <p style="float:none; margin-top:20px;">Title :  <input type="text" size=110 name="file_title" ></p>
          <p style="float:none; margin-top:20px;">Detalle : <textarea cols=82 rows=15 name="file_detalle" ></textarea></p>
          <p style="float:none; margin-top:10px;"> <input type="submit" value="subir"></p>
        </form>
      </div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
