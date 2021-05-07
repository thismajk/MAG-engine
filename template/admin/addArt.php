<div class="form">
    <form enctype="multipart/form-data" method="post" action="api/addPicture.php">
        <input type="text" name="name" placeholder="Nazwa">
        <textarea name="description" placeholder="Opis"></textarea>
        <input type="text" name="author" placeholder="Autor" >
        <input type="number" name="price" placeholder="cena" >
        <input type="number" name="catalogNumber" placeholder="Numer katalogowy">
        <select name="status" placeholder="status">
            <option value="Dostępne">Dostępne</option>
            <option value="Nie dostępne">Niedostępne</option>
            <option value="Sprzedane">Sprzedane</option>
        </select>
        <?php
        $arts = library::getLibrary($conn);
        $countArts = count($arts);
        for($row=0; $row<$countArts; $row++){
            ?>
                <label>
                    <input type="radio" value="<?=$arts[$row][0]?>" name="imgId">
                    <img src="/storage/arts/<?=$arts[$row][1].".".$arts[$row][2]?>" width="200px" height="200px;">
                </label> 
            <?php
        }
        ?>
        <input type="submit" value="dodaj">
    </form>
</div>  