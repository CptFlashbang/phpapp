<?php
$heading = "Search Books";
$books = [];
$records="";
$return="";
if(isset($_GET['title']) && !empty($_GET['title'])){
    $return="search?title=".htmlspecialchars($_GET['title']);
    $config = require('config.php');
    $db = new Database($config['database']);
    $query = "select * from books where title like :title";
    $filter = "%".htmlspecialchars($_GET['title'])."%";
    $books = $db->query($query, ['title' => $filter])->get();
    if (count($books) == 0) {
        $records = "You have found no matches, please try again";
    } else
    {
        $records = "You have found ". count($books) . " records from your search";
    }
}
require "views/search.view.php";
