<?php
    if(Auth::isAdmin($conn) == true){
        ?>
        <div class="adminbar">
            <div class="adminbar-left"> 
                <a href="?page=adminDashBoard"><i class="fas fa-tachometer-alt"></i> <?=WEB_PAGE_NAME?></a>
            </div>
            <div class="adminbar-right">
                Witaj, <?=$_SESSION['user'];?>! &nbsp;
                <a href="/api/logout.php"> <i class="fas fa-sign-out-alt"></i> Wyloguj </a>
            </div>
            <div style="clear: both;"></div>
        </div>
        <?php
    }
?>