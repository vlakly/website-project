<?php
  $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES);
  $login = htmlspecialchars(trim($_POST['login']), ENT_QUOTES);
  $password = htmlspecialchars(trim($_POST['password']), ENT_QUOTES);
  $name = htmlspecialchars(trim($_POST['name']), ENT_QUOTES);

  if(mb_strlen($login) < 4 || mb_strlen($login) > 32) {
    echo "Длина логина должна составлять не менее 4 и не более 32 символов";
    exit();
  } else if (mb_strlen($password) < 8 || mb_strlen($password) > 32) {
    echo "Длина пароля должна составлять не менее 8 и не более 32 символов";
    exit();
  } else if (mb_strlen($name) < 2 || mb_strlen($name) > 32) {
    echo "Длина имени должна составлять не менее 2 и не более 32 символов";
    exit();
  }

  $password = md5($password."htfkmyj");

  $mysql = new mysqli('localhost', 'root', 'root', 'registration_data');
  $mysql->query("INSERT INTO `users` (`email`, `login`, `password`, `name`, `request_answer`) VALUES ('$email', '$login', '$password', '$name', ' ')");
  $mysql->close();

  header('Location: /');
?>
