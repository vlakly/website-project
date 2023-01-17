<?php
  $email = $_POST['email'];
  $message = $_POST['message'];

  $subject = "=?utf-8?B?".base64_encode("Тема сообщения")."?=";
  $headers = "From: $email\r\nReply-to: $email\r\nContent-type: text/html;charset=utf-8\r\n";

  mail('vak114@tpu.ru', $subject, $message, $headers);

  header('Location: /send-data.php');
?>
