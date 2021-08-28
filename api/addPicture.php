<?php
require_once "../conf.php";

$name = POST('name');
$description = POST('description');
$author = POST('author');
$catalogNumber= POST('catalogNumber');
$status = POST('status');
$price= POST('price');
$addedDate = date("Y-m-d H:i:s");
$imgId = POST('imgId');

if(!Gallery::addPicture($conn, $name, $description, $author, $catalogNumber, $status, $imgId, $price, $addedDate)){
    exit("error: dodawnie nie powiodło się");
}

header("Location: ../?page=adminDashBoard&aPage=artList");