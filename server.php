<?php
  session_start();

  $username = "";
  $email = "";
  $errors = array();


  $db = mysqli_connect("localhost","unge","","Auth_test");

    //登録ボタンを押した時
    if(isset($_POST['register'])){
      $username = mysql_real_escape_string($_POST['username']);
      $email = mysql_real_escape_string($_POST['email']);
      $password = mysql_real_escape_string($_POST['password']);
      $password2 = mysql_real_escape_string($_POST['password2']);

      //空欄チェック
      if(empty($username)){
        //配列の最後に入れる
        array_push($errors,"ユーザー名が入力されていません");
      }
      if(empty($email)){
        //配列の最後に入れる
        array_push($errors,"メールアドレスが入力されていません");
      }
      if(empty($password)){
        //配列の最後に入れる
        array_push($errors,"パスワードが入力されていません");
      }
      if($password != $password2){
        //配列の最後に入れる
        array_push($errors,"パスワードが一致しません。");
      }

      //エラーがなければデータベースに登録する
      if(count($errors) == 0){
        //ハッシュ化
        $password = md5($password);
        $sql = "insert into users(username,email,password) values ('$username','$email','$password')";
        mysqli_query($db,$sql);

        //セッション変数にデータを保存してリダイレクトする
        $_SESSION['username'] = $username;
        $_SESSION['success_text'] = "登録完了";
        header('location: index.php');



      }


    }//end register


    if(isset($_POST['login'])){

      $username = mysql_real_escape_string($_POST['username']);
      $password = mysql_real_escape_string($_POST['password']);

      if(empty($username)){
        //配列の最後に入れる
        array_push($errors,"ユーザー名が入力されていません");
      }
      if(empty($password)){
        //配列の最後に入れる
        array_push($errors,"パスワードが入力されていません");
      }

      if(count($errors) == 0){
        $password = md5($password);
        $sql = "select * from users where username='$username' and password='$password'";
        $result = mysqli_query($db,$sql);

        if(mysqli_num_rows($result) == 1){
          $_SESSION['username'] = $username;
          $_SESSION['success_text'] = "ログインしました";
          header('location: index.php');
        }else{
          array_push($errors,"ユーザー名またはパスワードが間違っています");
        }

      }


    }//end login


    if(isset($_GET['logout'])){
      session_destroy();
      unset($_SESSION['username']);
      header('location: login.php');
    }

?>
