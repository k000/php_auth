<?php
include('server.php');

//ヘッダーファイルの読み込み
include('header.php');


 ?>



  <div class="container">
    <div class="form-area">
      <?php require('error-info.php'); ?>
      <form method="post" action="register.php">

        <h2 class="text-center">新規登録</h2>

        <div class="form-group">
            <label>UserName</label>
            <input type="text" name="username" class="form-control" value="<?php echo $username ?>">
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
        </div>

        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
          <label>PasswordRetype</label>
          <input type="password" name="password2" class="form-control">
        </div>

        <div class="form-group">
          <button type="submit" name="register" class="btn btn-info">登録する</button>
        </div>

      </form>
      <a href="login.php">ログイン</a>
    </div>
  </div>

</body>
</html>
