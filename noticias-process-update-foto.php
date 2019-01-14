<?php
  $target_name = "./noticias/fotos/".$_POST['old_title'];
  $target_foto = $target_name . '.jpg';
  $target_newfoto = $_POST['file_title'] . '.jpg';
  $check_text = "./noticias/textos/".$_POST['old_title'];

  if(file_exists($target_foto)) {
    rename($target_foto, 'noticias/fotos/'.$target_newfoto); }
  else {
     echo "No esta el foto-file"; }

  if(file_exists($check_text)) {
    rename('noticias/textos/'.$_POST['old_title'], 'noticias/textos/'.$_POST['file_title']);
    file_put_contents('noticias/textos/'.$_POST['file_title'], $_POST['file_detalle']); }
  else {
     echo "No esta file-detalle"; }

header( 'Location: ./noticias-admin-fotos.php');
?>
