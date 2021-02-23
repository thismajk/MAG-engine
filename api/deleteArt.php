<?php
require_once "../conf.php";
if(!Gallery::deleteArt($conn, GET("id"))){
    exit("error: usuwamoe nie powiodło się");
}

mysqli_query($conn, "UPDATE gallery SET name=$name, description=$description, author=$author, catalogNumber=$catalogNumber, status=$status, price=$price WHERE id=$id");

header("Location: ../?page=adminDashBoard");