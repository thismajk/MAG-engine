<div class="container gallery">
<span class="path"><a href = "/">Mery art gallery</a> > <a href = "/?page=gallery">Galeria</a></span>
    <div class="row ">

        <?php
        $arts = Gallery::getArts($conn);
        $countArts = count($arts);
        for($row=0; $row<$countArts; $row++){
            ?>

            <div class="col-lg-4 col-md-6 col-sm-12 p-2">
                <div class="galleryItemBox">
                    <a href = "/?page=art&id=<?=$arts[$row][0]?>">
                        <img src="/storage/arts/<?=$arts[$row][2]?>" class="gallery-image">
                        <h5><?=$arts[$row][1]?></h5>
                    </a>
                </div>
            </div> 

            <?php
        }
        ?>


        
</div>