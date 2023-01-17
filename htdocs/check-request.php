<?php
  $email = htmlspecialchars(trim($_POST['email']), ENT_QUOTES);
  $number = htmlspecialchars(trim($_POST['number']), ENT_QUOTES);
  $service_type = htmlspecialchars(trim($_POST['service_type']), ENT_QUOTES);
  $request_text = htmlspecialchars(trim($_POST['request_text']), ENT_QUOTES);

  $mysql = new mysqli('localhost', 'root', 'root', 'service_requests');
  $mysql->query("INSERT INTO `user_requests` (`email`, `number`, `service_type`, `request_text`) VALUES ('$email', '$number', '$service_type', '$request_text')");
  $mysql->close();

  header('Location: /');
?>
