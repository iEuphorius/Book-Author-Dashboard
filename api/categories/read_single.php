<?php
    include_once '../../config/database.php';
    include_once '../../models/author.php';

    // Instantiate DC & connect

$dataBase = new Database();
$db = $dataBase->connect();

// Instantiate blog post object
$category = new Category($db);

// get id from url
$category->id = $_GET['id'];

// get post
$category->read_single();

// create array
$category_arr = array(
    'id'=> $category->id,
    'category'=> $category->category
);

// make json data
print_r(json_encode($category_arr));