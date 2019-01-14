<?php
if (isset($_GET['id'])) {
  $target_name = "./noticias/fotos/".$_GET['id'];
  $target_foto = $target_name . '.jpg';
  $check_text = "./noticias/textos/".$_GET['id'];

  if(file_exists($target_foto)) {
     unlink($target_foto); }
  else {
     echo "No esta el foto-file"; }

  if(file_exists($check_text)) {
     unlink('noticias/textos/'.$_GET['id']); }
  else {
     echo "No esta file-detalle"; }
  }
else {
  echo "No hay el code id"; }

header( 'Location: ./noticias-admin-fotos.php');
?>
