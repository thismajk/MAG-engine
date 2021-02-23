<?php
require_once "../conf.php";

$id = POST('id');
$name = POST('name');
$description = POST('description');
$author = POST('author');
$catalogNumber= POST('catalogNumber');
$status = POST('status');
$price= POST('price');

if(!Gallery::editArt($conn, $name, $description, $author, $catalogNumber, $status, $price, $id)){
    exit("error: edycja");
}



header("Location: ../?page=art&id=".$id);