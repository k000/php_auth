<?php

  if(count($errors) > 0 ){
    foreach ($errors as $error) {
      echo "<div class='alert alert-danger text-center m-3' role='alert'>" . $error . "</div>";
    }
  }


 ?>
