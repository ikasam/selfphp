<?php
function getDb() {
  $dsn = 'mysql:dbname=selfphp; host=mysql; charset=utf8';
  $usr = 'selfusr';
  $password = 'selfpass';

  $db = new PDO($dsn, $usr, $password);
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $db;
}
