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
                    <a href = "?page=adminDashBoard&aPage=artList">NIE</a>
                    <a href = "api/deleteArt.php?id=<?=GET("id")?>">TAK</a>
            </div>
        </div>
        <?php
    }
?>
<div class="container-fluid">
    <div class="row adminSideBar">
        <div class="d-flex flex-column p-3 text-white col-2 px-0 sidebar">
            <h3 >Admin Panel</h3>

        
        <hr>
        <ul class="nav nav-pills flex-column mb-auto">
            <li class="nav-item">
            <a href="/" class="nav-link text-white">
                <i class="fas fa-home"></i>
                Strona główna
            </a>
            </li>
            <li>
            <a href="#" class="nav-link text-white">
                <i class="fas fa-tachometer-alt"></i>
                Dashboard
            </a>
            </li>
            <li>
            <a href="?page=adminDashBoard&aPage=artList" class="nav-link text-white">
              <i class="fas fa-images"></i>
                Galeria
            </a>
            </li>
            <li>
            <a href="?page=adminDashBoard&aPage=library" class="nav-link text-white">
             <i class="fas fa-photo-video"></i>
                Biblioteka
            </a>
            </li>
            <li>
            <a href="#" class="nav-link text-white">
                <i class="fas fa-users"></i>
                Użytkownicy
            </a>
            </li>
            <li>
            <a href="#" class="nav-link text-white">
                <i class="fas fa-cog"></i>
                Ustawienia
            </a>
            </li>
            <li>
            <a href="#" class="nav-link text-white">
                <i class="fas fa-sign-out-alt"></i>
                wyloguj
            </a>
            </li>
        </ul>
        </div>
        <div class="col-10 bg-light adminContainer">
            <div class="h-100">
                <?php
                if(GET('aPage') == "addArt"){
                    require_once("template/admin/addArt.php");
                }
                else if(GET('aPage') == "editArt"){
                    require_once("template/admin/editArt.php");
                }
                else if(GET('aPage') == "artList"){
                    require_once("template/admin/gallery.php");
                }
                else if(GET('aPage') == "library"){
                    require_once("template/admin/library.php");
                }
                ?>
            </div>
        </div>
    </div> 
</div>