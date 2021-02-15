<?php
    if(Auth::isAdmin($conn) != true){
        header("Location: /");
    }
?>

<div class="container">
    <div class="add-form">
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
</div>