<?php $artInfo =  Gallery::getArtById($conn, GET('id'));?>
<div class="container artPage">
    <div class="row ">
    
        <div class="col-md-6 col-sm-12">
            <div class="imageContainer">
                <img class="artImage" src="/storage/arts/<?=$artInfo[2]?>">
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
                    <h1><?=$artInfo[0]?></h1>
                    <hr />
                    <p class="artPrice"><?=$artInfo[1]?> zł</p>
                    <p ><b>Autor: </b><?=$artInfo[4]?><br/><b>Nr. katalogowy: </b><?=$artInfo[6]?><b><br/>Status: </b><?=$artInfo[5]?></p>
                    <div><b>Opis:</b><br/><pre><?=$artInfo[3]?></pre></div> 
                    <a class="contactButton">Zapytaj</a>
                    <div class="contact">lub <br />Zadzwoń: +48 000000000</div>

                    <hr />
                    <p class="p-md-2">Jeśli spodobał ci się ten obraz i chcesz go kupić skontaktuj się z nami!</p>
        </div>
    </div>
</div>