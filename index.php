<?php require_once "conf.php"; ?>
<!doctype html>
<html lang="pl">
<head >
    <?php require_once BASE_DIR."/template/header.php"?>
</head >
<body >
    <?php require_once BASE_DIR."/template/adminbar.php";
    if(GET("page")!="adminDashBoard"){
        require_once BASE_DIR."/template/navbar.php";
        require_once BASE_DIR."/template/pages.php";
        require_once BASE_DIR."/template/footer.php"; 
    }
    else{
        require_once BASE_DIR."/template/adminDashBoard.php";
    }
    ?>
</body >
</html >
