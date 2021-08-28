<?php
require_once "../conf.php";
if(!Library::deleteArt($conn, GET("id"))){
    exit("error: usuwamoe nie powiodło się");
}

header("Location: ../?page=adminDashBoard&aPage=library");