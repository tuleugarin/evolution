<?php
include 'functions.php';
include 'database/QueryBuilder.php';

$pdo =connectToDB();

$db = new QueryBuilder($pdo);
$posts = $db->getAll();

// 4.Вывести через foreach;
include 'index.view.php';
 ?>