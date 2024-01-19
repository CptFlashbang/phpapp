<?php
$heading = "Search";
$config = require('config.php');
$db = new Database($config['database']);
$query = "select * from books";
$books = $db->query($query)->get();
$records="";
$return="";
require "views/search.view.php";
