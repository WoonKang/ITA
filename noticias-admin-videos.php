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
  function list_video(){
    $list=scandir('./noticias/entertainment');
    $i=0;
    while($i<count($list)){
      if($list[$i] != '.'){
        if($list[$i] != '..'){
          if($list[$i] < 22 ){ $filename[$i]=substr($list[$i], 0, -4); $result=$list[$i];
          ?>
          <a href="noticias-admin-videos.php?id=<?=$filename[$i]?>">
          <ol style="margin-top:5; font-size:17px; margin-left:20px;"><?=$filename[$i]?></ol></a>
          <?php
        } }
      }
      $i=$i+1;
    }
  }
  ?>
  <?php
  $message = null ;
  echo $message;
  function return_message() {
    if (isset($_GET['rmessage'])) {
      $message = $_GET['rmessage'];
      echo $message;
      $message = null ;
    }
    else {
      $message = null ;
      echo $message;
    }
  }
 ?>

   <div>
     <a><br></a>
     <a style="color:black; margin-left:150px; font-style: italic; font-weight: bold; font-size: 20px;">Entretenimiento</a>
   </div>
   <div style="width:400px; margin-top:0px; margin-left:90px; float:left;">
     <ol>
     <?php
       list_video();
      ?>
    </ol>
  </div>
  <div class="admin">
      <div>
        <a href="#" style="width:200px; font-weight:bold; margin-left:100px;">Upload</a>
        <a href="./noticias-video-delete.php" style="width:200px; font-weight:bold; margin-left:200px;">Delete</a>
      </div>
      <div style="margin-top:20px; width:500px; float:left;">
        <form action="noticias-process-create-video.php" method="post" enctype="multipart/form-data" onsubmit="return checkSize(2097152)">
          <p style="float:none;">Video upload : <input type="file" size=94 name="fileToUpload" id="fileToUpload" accept="video/*"></p>
          <?php return_message() ?>
          <p style="float:none; margin-top:40px;">Title :  <input type="text" size=110 name="videotitle" id="videotitle"></p>
          <p style="float:none; margin-top:20px;"> <input type="submit" value="submit"></p>
        </form>
      </div>
  </div>

  <!-- common bottom -->
  <?php
  require_once('ita-bottom.php');
  ?>
