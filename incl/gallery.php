<?php
class Gallery{
    public static function getGallery($conn){
        $query = mysqli_query($conn, "SELECT id, name, imageUrl FROM gallery");
        while($row = mysqli_fetch_array($query)) {
            ?>  
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <a href = "/?page=art&id=<?=$row['id']?>">
                        <img src="/storage/arts/<?=$row['imageUrl']?>" class="gallery-image">
                        <h5><?=$row['name']?></h5>
                    </a>
                </div>
            <?php
        }
    }

    public static function addPicture($conn, $name, $description, $author, $catalogNumber, $status, $imgName, $price, $addedDate){
        if(Auth::isAdmin($conn) != true){
            return false;
        }

        $userID = Auth::getUserID($_SESSION['user'], $conn);

        mysqli_query($conn, "INSERT INTO gallery VALUES (NULL, '$name', '$description', '$author', '$price', '$status', '$userID','$addedDate', '$imgName', '$catalogNumber')");
        return true;
        
    }
    public static function getArtById($conn, $id){
        $query = mysqli_query($conn, "SELECT imageUrl, name, price, description, author, catalogNumber, status FROM gallery WHERE id=$id");
        while($row = mysqli_fetch_array($query)) {
            $imageUrl = $row['imageUrl'];
            $name = $row['name'];
            $price = $row['price'];
            $description = $row['description'];
            $author = $row['author'];
            $status = $row['status'];
            $catalogNumber = $row['catalogNumber'];
        }
        $art = [$name, $price, $imageUrl, $description, $author, $status, $catalogNumber];
        return $art;
    }
}