<?php
include('server.php');

//ヘッダーファイルの読み込み
include('header.php');

include('success-text.php');

if(!isset($_SESSION['username'])){
  header('location: register.php');
}

 ?>



  <div class="container">
    <?php

      if(isset($_SESSION['username'])){
        echo "ようこそ" . $_SESSION['username'] . "さん";
      }

      ?>

      <P><a href="index.php?logout='1'">ログアウト</a></P>

  </div>

</body>
</html>
