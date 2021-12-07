<div class="container gallery">
    <div class="row ">

        <?php
        $arts = Gallery::getArts($conn);
        $countArts = count($arts);
        for($row=0; $row<$countArts; $row++){
            ?>

            <div class="col-lg-4 col-md-6 col-ms-12">
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