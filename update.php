<?php

include __DIR__ . '../functions.php';
$db = include __DIR__ . '../database/start.php';

$db->update('posts', [

	'title' => $_POST['title']

], $_GET['id']);

header('Location: /index.php');

?>