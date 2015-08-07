<!DOCTYPE html>
<html lang="en">

    <head>
     <?php
      include ("_header.php")
      ?>
        <title>Shmap - Coming Soon!</title>

    </head>

    <body>

    	<!-- Google Analytics tracking code -->
    	<?php include_once("analyticstracking.php") ?>

      <video autoplay poster="videos/6.png" id="bgvid">
          <!-- <source src="videos/6.webm" type="video/webm"> -->
          <source src="videos/6.mp4" type="video/mp4">
      </video>


      
      <!-- Single button -->
      <div id="btnDiv">
        <div class="btn-group" id="landingButton">
          <button type="button" class="btn btn-default" aria-haspopup="true" aria-expanded="false">
            <a href="home.php"><!-- <img src="img/icon_white.png" id="iconLanding"> -->enter</a>
          </button>
        </div>
      </div>

      <!-- jQuery Version 1.11.1 -->
      <script src="js/jquery.js"></script>

      <!-- Bootstrap Core JavaScript -->
      <script src="js/bootstrap.min.js"></script>
      
      <script>
          $(function() {
            $("#landingButton").delay(4000).fadeIn();
          });
      </script>

    </body>

</html>
