<?php require_once '../Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>cookie1</title>
</head>
<body>
<form method="POST" action="cookie2.php">
<label for="email">E-mail: </label>
<input id="email" type="text" name="email" size="40"
  value="<?=e($_COOKIE['email'] ?? '') ?>" />
</br>
<label for="name">name: </label>
<input id="name" type="text" name="name" size="40"
  value="<?=e($_COOKIE['name'] ?? '') ?>" />
<input type="submit" value="submit" />
</form>
</body>
</html>
