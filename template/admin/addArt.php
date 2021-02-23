<div class="form">
    <form enctype="multipart/form-data" method="post" action="api/addPicture.php">
        <input type="text" name="name" placeholder="Nazwa" required>
        <textarea name="description" placeholder="Opis" required></textarea>
        <input type="text" name="author" placeholder="Autor" required>
        <input type="number" name="price" placeholder="cena" required>
        <input type="number" name="catalogNumber" placeholder="Numer katalogowy" required>
        <select name="status" placeholder="status" required>
            <option value="Dostępne">Dostępne</option>
            <option value="Nie dostępne">Nie dostępne</option>
            <option value="Sprzedane">Sprzedane</option>
        </status>
        <input type="file" name="img" placeholder="obrazek" required>
        <input type="submit" value="dodaj">
    </form>
</div>  