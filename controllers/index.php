<?php
$heading = "Home";
$config = require('config.php');
$db = new Database($config['database']);
$books = $db->query('select * from books')->get();
require "views/index.view.php";
