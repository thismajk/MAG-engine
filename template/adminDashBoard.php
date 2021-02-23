<?php
    if(Auth::isAdmin($conn) != true){
        header("Location: /");
    }
    if(GET("action") == "deleteArt" && GET("id") != null){
        $artInfo = Gallery::getArtById($conn, GET("id"));
        ?>
        <div class = "popup">
            <div class="popup-box">
                <h3>Czy na pewno chcesz usunąć ten przedmiot:?</h3>
                    <img src="/storage/arts/<?=$artInfo[2]?>">
                    <h5><?=$artInfo[0]?></h5>
                    <a href = "?page=adminDashBoard">NIE</a>
                    <a href = "api/deleteArt.php?id=<?=GET("id")?>">TAK</a>
            </div>
        </div>
        <?php
    }
?>

<div class="container">
    <a href="?page=adminDashBoard&aPage=addArt" class="btn btn-primary m-3">Dodaj Obraz</a>
    <?php
    if(GET('aPage') == "addArt"){
        require_once("template/admin/addArt.php");
    }
    else if(GET('aPage') == "editArt"){
        require_once("template/admin/editArt.php");
    }
    else{
        require_once("template/admin/artList.php");
    }
    ?>
   
</div>