<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="es">
<head>
  <title>I.T.Ayachcho</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style_contact.css">
  <link rel="stylesheet" href="css/templatemo_style.css" type="text/css" />
  <link rel="stylesheet" href="css/style_head.css">
  <link rel="javascript" href="js/script.gs">
</head>

<body>
  <?php
  require_once('ita-menu.php');
  ?>

  <div id="templatemo_main">
    <h2>=== &nbsp CONTACTOS &nbsp ===</h2><br>
    <div style="width:800px; float:left; margin-left:0px;">
    <form id="gform" class="contact_form"
          action="https://script.google.com/macros/s/AKfycbwSqFshCBT5HkIHilkrOLrGMcXHwjEwXNCcE4jF/exec"
          method="post">
      <ul>
        <li>
          <label form="name">Nombre: </label>
          <input TYPE="text" name="name" SIZE="80" required />
        </li>
        <li>
          <label form="email">Email:</label>
          <input TYPE="text" name="email" SIZE="80" required />
        </li>
        <li>
          <label form="phone">Telefono:</label>
          <input TYPE="text" name="phone" SIZE="80" />
        </li>
        <li>
          <label form="message">Mensaje:</label>
          <textarea name="message" cols="80" rows="10" required ></textarea>
        </li>
        <li>
          <button class="submit" type="submit">Enviar</button>
        </li>
        <br>
        <p style="margin-left:110px;">==> Responderemos a su consulta por correo electrónico o por teléfono lo antes posible.</p>
      </ul>
    </form>
  </div>
</div>

<script data-cfasync="false" type="text/javascript"
src="https://cdn.rawgit.com/dwyl/html-form-send-email-via-google-script-without-server/master/form-submission-handler.js">
</script>
<div style="display:none;" id="thankyou_message">
  <h2><em>Thanks</em> for contacting us !  We wiil get back to you soon!</h2>
</div>

<!-- common bottom -->
<?php
require_once('ita-bottom.php');
?>
