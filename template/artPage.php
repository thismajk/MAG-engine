<?php $artInfo =  Gallery::getArtById($conn, GET('id'));?>
<div class="container">
    <div class="row artPage">
        <div class="col-6">
            <img class="artImage paddingBox" src="/storage/arts/<?=$artInfo[2]?>">
        </div>
        <div class="col-6">
            <div class="paddingBox">
                <h1><?=$artInfo[0]?></h1>
                <p class="artPrice"><?=$artInfo[1]?> zł<sup> (z vat)</sup></p>
                <p><b>Autor: </b><?=$artInfo[4]?><br/><b>Nr. katalogowy: </b><?=$artInfo[6]?><b><br/>Status: </b><?=$artInfo[5]?></p>
                <div class="artDescription"><b>Opis:</b><br/><?=$artInfo[3]?></div> 
                <p class="p-4">Jeśli spodobał ci się ten obraz i chcesz go kupić zadzwoń pod numer 0000000000 lub Napisz e-mail pod adres kontakt@meryartgallery.com</p>
            </div>
        </div>
    </div>
</div>