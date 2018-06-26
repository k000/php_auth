<?php
include('server.php');

//ヘッダーファイルの読み込み
include('header.php');

include('success-text.php');


 ?>



  <div class="container">
    <div class="form-area">
      <?php require('error-info.php'); ?>
      <form method="post" action="login.php">

        <h2 class="text-center">ログイン</h2>

        <div class="form-group">
            <label>UserName</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
        </div>



        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
        </div>



        <div class="form-group">
          <button type="submit" name="login" class="btn btn-info">ログイン</button>
        </div>

      </form>
      <a href="register.php">新規登録</a>
    </div>
  </div>

</body>
</html>
