<?php
require_once "../conf.php";

$name = POST('name');
$description = POST('description');
$author = POST('author');
$catalogNumber= POST('catalogNumber');
$status = POST('status');
$price= POST('price');
$addedDate = date("Y-m-d H:i:s");
$imgName = "img".date("YmdHis")."".rand(000,999).".jpg"; 

// dopisać sprawdzanie 

$save = BASE_DIR.'/storage/arts/'.$imgName;

if(is_uploaded_file($_FILES['img']['tmp_name'])){
    if(!move_uploaded_file($_FILES['img']['tmp_name'], $save)){
        exit("error: Plik nie został zapisany.");
    }
}
else{
    exit("error: Nie udało się skopiować pliku do katalogu.");
}

if(!Gallery::addPicture($conn, $name, $description, $author, $catalogNumber, $status, $imgName, $price, $addedDate)){
    exit("error: dodawnie nie powiodło się");
}

header("Location: ../?page=adminDashBoard");