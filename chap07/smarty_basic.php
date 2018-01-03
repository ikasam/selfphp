<?php
require_once 'MySmarty.class.php';
$s = new MySmarty();
$s->assign('message', 'Hello, World!');
$s->d();
