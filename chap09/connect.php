<?php
$dsn = 'mysql:dbname=selfphp; host=mysql; charset=utf8';
$usr = 'selfusr';
$password = 'selfpass';

try {
  $db = new PDO($dsn, $usr, $password);
  print 'Connection succeeded.';
} catch (PDOException $e) {
  print "Connection error: {$e->getMessage()}";
} finally {
  $db = null;
}
