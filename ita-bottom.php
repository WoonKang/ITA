  <style>
  .popup {
    position: relative;
    cursor: pointer;
  }
  .popup .popuptext {
    visibility: hidden;
    position: absolute;
    z-index: 1;
    bottom: 105%;
    margin-left: -235px;
  }
  .popup .popuptext::after {
    content: "";
  }
  .popup .show {
    visibility: visible;
  }
  </style>
  <script>
  function myFunction() {
    var popup = document.getElementById("myPopup");
    popup.classList.toggle("show");
  }
  </script>

<div class="bottom">
  <div class="address" style="width:500px; float:left; color:darkblue;"> &nbsp <strong>Dirección:</strong><br>
       &nbsp Plaza Villarroel, Av Busch, La Paz, Bolivia &nbsp (Tel) 22229701
  </div>
  <a href="e-book.php" style="float:left; margin-left:450px; margin-top:5px;">
     <img src="/images/e-book.png" style="width:30px; height:30px;"></a>
  <div>
    <div class="popup" onclick="myFunction()" style="float:left; margin-left:20px; margin-top:5px;">
       <img src="/images/googlemap.jpg" style="width:30px; height:30px;">
       <span class="popuptext" id="myPopup"><img src="./images/ita-map.jpg" style="width:300px; height:300px;"></span>
    </div>
    <a href="https://www.facebook.com/tecnologico.ayacuho.formacion.profesional" target="_blank" style="float:left; margin-left:20px; margin-top:5px;">
       <img src="/images/facebook40x40.png" style="width:30px; height:30px;"></a>
  </div>
</div>
</body>
</html>
