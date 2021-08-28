<?php
    $art = Library::getArt($conn, GET('imageId'));
?>
<div class="darkWrap">
    <div class="liblaryImageOptions">
        <div class="exit">
            <a href="?page=adminDashBoard&aPage=library">&#10005</a>
        </div>
        <div style="clear:both"></div>
        
        <img src="/storage/arts/<?=$art[1]?>.<?=$art[2]?>">

        <div><a href="/api/deleteArtFromLibrary.php?id=<?=$art[0]?>">Usuń</a></div>
    </div>
</div>