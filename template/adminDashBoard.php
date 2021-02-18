<?php
    if(Auth::isAdmin($conn) != true){
        header("Location: /");
    }
    if(isSet(GET("action") && GET("action") == deleteArt && isSetGET("id"))){
        ?>
            <div class = "popup"></div>
        <?php
    }
?>

<div class="container">
    <div class="add-form p-3">
        <form enctype="multipart/form-data" method="post" action="api/addPicture.php">
            <input type="text" name="name" placeholder="Nazwa" required>
            <input type="text" name="description" placeholder="Opis" required>
            <input type="text" name="author" placeholder="Autor" required>
            <input type="number" name="price" placeholder="cena" required>
            <input type="number" name="catalogNumber" placeholder="Numer katalogowy" required>
            <input type="text" name="status" placeholder="status" required>
            <input type="file" name="img" placeholder="obrazek" required>
            <input type="submit" value="dodaj">

        </form>
    </div>  
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
                    <a class="editButton" href="#"><i class="fas fa-edit"></i> edytuj</a>
                    
                    <div style="clear:both"></div>
                    
                </div>
                <?php
            }
            
            ?>
        </div>
    </div>  
</div>