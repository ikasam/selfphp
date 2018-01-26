<?php
setcookie('email', $_POST['email'], time() + (60 * 60 * 24 * 90));
setcookie('name',  $_POST['name'],  time() + (60 * 60 * 24 * 90));
?>
<!DOCTYPE html>
<html>
<head>
<title>cookie2</title>
</head>
<body>
Cookie hase saved.
</body>
</html>
