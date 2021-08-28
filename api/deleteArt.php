<?php
require_once "../conf.php";
if(!Gallery::deleteArt($conn, GET("id"))){
    exit("error: usuwamoe nie powiodło się");
}

header("Location: ../?page=adminDashBoard&aPage=artList");