<form method="POST" action="prac3.php">
<label for="title">Title: </label>
<input id="title" type="text" name="title" size="20" />
<input type="submit" value="Search" />
</form>
<?php
if (isset($_POST['title'])) {
  require_once '../DbManager.php';
  require_once '../Encode.php';
  
  try {
    $db = getDb();
    $stt = $db->prepare('SELECT * FROM book WHERE title LIKE :title');
    $stt->bindValue(':title', '%'.$_POST['title'].'%');
    $stt->execute();
    print '<ul>';
    while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
?>
      <li><?=e($row['title']) ?>
        (<?=e($row['price']) ?>円) </li>
<?php
    }
    print '</ul>';
  } catch (PDOException $e) {
    print "Error occurred: {$e->getMessage()}";
  }
}
?>
