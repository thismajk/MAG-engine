<header class="container-fluid header">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 headerTextBox">
                <h1 class="headerText">Mery Art<br />  Gallery</h1>
                <p class="mtd">Magia dnia powszedniego</p>
                <p>Marzena Okuszko jest wrocławską artystką, członkinią Dolnośląskiego Stowarzyszenia Artystów Plastyków we Wrocławiu. Maluje głównie w technice akrylowej. Prace zawierają odwołania do folkloru słowiańskiego, jak i tradycji innych stron świata.</p>
                <a href="/?page=gallery" class="headerButton">Galeria sztuki</a>
            </div>
            <div class="col-md-6 col-sm-12 headerImageBox">
                <img class="headerImg" src="/img/headerImg.jpg"> 
            </div>
        </div>
    </div>
</header>
<div class="container mainBody">
    <h1>Nowe obrazy</h1>
    <hr />
    <div class="row">
    <?php
        $arts = Gallery::getArts2($conn, "3");
        $countArts = count($arts);
        for($row=0; $row<$countArts; $row++){
            ?>
            <div class="col-lg-4 col-md-12 p-2">
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
</div>
