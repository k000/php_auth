<div class="container m-3">
  <?php

    if(isset($_SESSION['success_text'])){
      echo "<div class='alert alert-success text-center' role='alert'>" . $_SESSION['success_text'] . "</div>";
      unset($_SESSION['success_text']);
    }
  ?>
</div>
