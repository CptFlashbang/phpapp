<?php
$heading = "Home";
$config = require('config.php');
$dsn = 'mysql:' . http_build_query($config['database'], '', ';');
$pdo = new PDO($dsn, 'root', '');
$statement = $pdo->prepare("select * from books");
$statement->execute();
$books = $statement->fetchAll(PDO::FETCH_ASSOC);
require "views/index.view.php";
