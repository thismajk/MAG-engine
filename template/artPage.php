<?php $artInfo =  Gallery::getArtById($conn, GET('id'));?>
<div class="container artPage">
    <span class="path"><a href = "/">Mery art gallery</a> > <a href = "/?page=gallery">Galeria</a> > <a href = "http://localhost/?page=art&id=<?=GET('id')?>">Obraz</a></span>
    <div class="row ">
    
        <div class="col-md-6 col-sm-12">
            <img class="artImage paddingBox" src="/storage/arts/<?=$artInfo[2]?>">
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="paddingBox">
                <div class="box">
                    <h1><?=$artInfo[0]?></h1>
                    <hr />
                    <p class="artPrice"><?=$artInfo[1]?> zł</p>
                    <p ><b>Autor: </b><?=$artInfo[4]?><br/><b>Nr. katalogowy: </b><?=$artInfo[6]?><b><br/>Status: </b><?=$artInfo[5]?></p>
                    <div><b>Opis:</b><br/><pre><?=$artInfo[3]?></pre></div> 
                    <hr />
                    <p class="p-md-2">Jeśli spodobał ci się ten obraz i chcesz go kupić zadzwoń pod numer 0000000000 lub Napisz e-mail pod adres kontakt@meryartgallery.com</p>
                </div>
            </div>
        </div>
    </div>
</div>