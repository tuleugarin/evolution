<?php
include 'functions.php';
$db = include 'database/start.php';

$post = $db->getOne('posts', 7);






$posts = $db->getAll('posts');

// 4.Вывести через foreach;
include 'index.view.php';
 ?>