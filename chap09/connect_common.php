<?php
require_once '../DbManager.php';
try {
  $db = getDb();
  print 'Connection succeeded.';
} catch (PDOException $e) {
  print "Connection Error: {$e->getMessage()}";
} finally {
  $db = null;
}
