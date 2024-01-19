<?php
$heading = "All Books";
$config = require('config.php');
$db = new Database($config['database']);
$query = "select * from books";
$books = $db->query($query)->get();
require "views/books.view.php";
