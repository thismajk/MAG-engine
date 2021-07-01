<?php
switch (GET("page")){
    case "main":
        require_once BASE_DIR."/template/main.php";
        break;
    case "login":
        require_once BASE_DIR."/template/login.php";
        break;
    case "register":
        require_once BASE_DIR."/template/register.php";
        break;
    case "gallery":
        require_once BASE_DIR."/template/gallery.php";
        break;
    case "adminDashBoard":
        require_once BASE_DIR."/template/adminDashBoard.php";
        break;
    case "art":
        require_once BASE_DIR."/template/artPage.php";
        break;
    case "blog":
        require_once BASE_DIR."/template/inProgress.php";
        break;
    case "about":
        require_once BASE_DIR."/template/inProgress.php";
        break;
    default:
        require_once BASE_DIR."/template/main.php";
        break;
}
