<?php
setcookie('username', $user['name'], time() - 3600 * 24, "/");
setcookie('email', $user['email'], time() - 3600 * 24, "/");
setcookie('admin', 'true', time() - 3600 * 24, "/");
header("Location: /");
?>
