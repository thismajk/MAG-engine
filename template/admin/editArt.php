<?php
    $artInfo = Gallery:: getArtById($conn, GET("id"));
?>
<div class="form">
    <form enctype="multipart/form-data" method="post" action="api/editArt.php">
        <input type="text" name="name" placeholder="Nazwa" value="<?=$artInfo[0]?>" required>
        <textarea name="description" placeholder="Opis" required><?=$artInfo[3]?></textarea>
        <input type="text" name="author" placeholder="Autor" value="<?=$artInfo[4]?>" required>
        <input type="number" name="price" placeholder="cena" value="<?=$artInfo[1]?>" required>
        <input type="number" name="catalogNumber" placeholder="Numer katalogowy" value="<?=$artInfo[6]?>" required>
        <select name="status" placeholder="status" required>
            <?php
            if($artInfo[5] != "Dostępne"){
                echo '<option value="Dostępne">Dostępne</option>';
            }
            if($artInfo[5] != "Nie dostępne"){
                echo '<option value="Nie dostępne">Nie dostępne</option>';
            }
            if($artInfo[5] != "Sprzedane"){
                echo '<option value="Sprzedane">Sprzedane</option>';
            }
            ?>
            <option value="<?=$artInfo[5]?>" selected><?=$artInfo[5]?></option>
        </select>
        <input type="hidden" name="id" value="<?=GET("id")?>">
        <input type="submit" value="Zmień">
    </form>
</div>  