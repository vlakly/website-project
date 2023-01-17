<?php
  $login = htmlspecialchars(trim($_POST['login']), ENT_QUOTES);
  $password = htmlspecialchars(trim($_POST['password']), ENT_QUOTES);

  $password = md5($password."htfkmyj");

  $mysql = new mysqli('localhost', 'root', 'root', 'registration_data');

  $result_admin = $mysql->query("SELECT * FROM `admins` WHERE `login` = '$login' AND `password` = '$password'");

  $user = $result_admin->fetch_assoc();

  if(count((array)$user) != 0) {
    setcookie('username', $user['name'], time() + 3600 * 24, "/");
    setcookie('email', $user["email"], time() + 3600 * 24, "/");
    setcookie('admin', 'true', time() + 3600 * 24, "/");
    header('Location: /');
  } else {
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");

    $user = $result->fetch_assoc();

    if(count((array)$user) == 0) {
      echo "Неверные данные";
      exit();
    }

    setcookie('username', $user['name'], time() + 3600 * 24, "/");
    setcookie('email', $user["email"], time() + 3600 * 24, "/");
  }

  $mysql->close();

  header('Location: /');
?>
