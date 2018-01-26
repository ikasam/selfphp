<?php
$ext = pathinfo($_FILES['upfile']['name']);
$perm = ['gif', 'jpg', 'jpeg', 'png'];
if ($_FILES['upfile']['error'] !== UPLOAD_ERR_OK) {
  $msg = [
    UPLOAD_ERR_INI_SIZE   => 'upload_max_filesize limit.',
    UPLOAD_ERR_FORM_SIZE  => 'HTML MAX_FILE_SIZE limit.',
    UPLOAD_ERR_PARTIAL    => 'File has been uploaded partial.',
    UPLOAD_ERR_NO_FILE    => 'File could not be uploaded.',
    UPLOAD_ERR_NO_TMP_DIR => 'No temporary directory.',
    UPLOAD_ERR_CANT_WRITE => 'Could not write to disk.',
    UPLOAD_ERR_EXTENSION  => 'Aborted uploading by extension.',
  ];
  $err_msg = $msg[$_FILES['upfile']['error']];
} elseif (!in_array(strtolower($ext['extension']), $perm)) {
  $err_msg = 'Files other than images can not be uploaded.';
} elseif (!@getimagesize($_FILES['upfile']['tmp_name'])) {
  $err_msg = 'The contens of this file is not image.';
} else {
  $src  = $_FILES['upfile']['tmp_name'];
  $dest = $_FILES['upfile']['name'];
  if (!move_uploaded_file($src, 'doc/'.$dest)) {
    $err_msg = 'Upload failed.';
  }
}

if (isset($err_msg)) {
  die('<div style="color:red;">'.$err_msg.'</div>');
}

header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/file1.php');
