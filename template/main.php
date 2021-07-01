<header class="container-fluid header">
    <div class="container header-inside">
        <h1>Mery Art Gallery</h1>
        <h2>Magia dnia powszedniego</h2>
    </div>
</header>
<section class="container main-cards">
    <div class="row">
        <div class="col-md-4">
            <div class="card card-one">
                <div class="card-header">GALERIA</div>
                <div class="card-body">
                    <img src="img/image-Gallery.png">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-two">
                <div class="card-header">BLOG</div>
                <div class="card-body">
                    <img src="img/image-Blog.png">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-three">
                <div class="card-header">O MNIE</div>
                <div class="card-body">
                    <img src="img/image-About.png">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="new-images">
    <div class="container">
        <h2>NOWE OBRAZY</h2>
        <hr />
        <div class="row">
        <?php
            $arts = Gallery::getArts2($conn, "3");
            $countArts = count($arts);
            for($row=0; $row<$countArts; $row++){
                ?>
                <div class="col-lg-4 col-md-12 p-2">
                        <div class="card">
                            <a href = "/?page=art&id=<?=$arts[$row][0]?>">
                                <div class="image">
                                    <img src="/storage/arts/<?=$arts[$row][2]?>">
                                </div>
                                <h4><?=$arts[$row][1]?></h4>
                                <p><?php
                                    $description = $arts[$row][3];
                                    if(strlen($description) > 75){
                                        echo substr($description, 0, 75)."...";
                                    }
                                    else{
                                        echo $description;
                                    }
                                ?></p>
                                <hr/>
                                <h5><?=$arts[$row][4]?>zł</h5>

                            </a>
                        </div>
                    </div>
                <?php
            }
            ?>   
        </div>
    </div>
</section>

