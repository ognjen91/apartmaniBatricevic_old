<?php

$connection = mysqli_connect("localhost", "root", "", "rasko");
      if (!$connection) {
          die("<h1>Greska u povezivanju sa bazom!</h1>)");
      }
    ?>