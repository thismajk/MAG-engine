<div class="row p-3">
    <div class="col-12">
        <?php
        $arts = Gallery::getArts($conn);
        $countArts = count($arts);
        for($row=0; $row<$countArts; $row++){
            ?>
            <div class="artItem">
                <img src="/storage/arts/<?=$arts[$row][2]?>">
                <span><?=$arts[$row][1]?></span>
                <a class="deleteButton" href="?page=adminDashBoard&action=deleteArt&id=<?=$arts[$row][0]?>"><i class="fas fa-trash-alt"></i> usuń</a>
                <a class="editButton" href="?page=adminDashBoard&aPage=editArt&id=<?=$arts[$row][0]?>"><i class="fas fa-edit"></i> edytuj</a>
                
                <div style="clear:both"></div>
                
            </div>
            <?php
        }
        ?>
    </div>
</div>  