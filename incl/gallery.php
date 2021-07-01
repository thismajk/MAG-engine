<?php
class Gallery{

    public static function getArts($conn){
        $query = mysqli_query($conn, "SELECT id, name, imgId FROM gallery ORDER BY id DESC");
        $arts = [];
        $i = 0;
        while($row = mysqli_fetch_array($query)) {
            $imgId = $row['imgId'];
            $query2 = mysqli_query($conn, "SELECT name, extension FROM library Where id = $imgId");
            while($row2 = mysqli_fetch_array($query2)) {
                $imageUrl = $row2['name'].".".$row2['extension'];
            }
           $name = $row['name'];
           $id = $row['id'];
           $art = [$id, $name, $imageUrl];
           $arts[$i++] = $art;
        }
        
        return $arts;
    }

    public static function getArts2($conn, $quantity){
        $query = mysqli_query($conn, "SELECT * FROM gallery ORDER BY id DESC LIMIT $quantity");
        $arts = [];
        $i = 0;
        while($row = mysqli_fetch_array($query)) {
            $imgId = $row['imgId'];
            $query2 = mysqli_query($conn, "SELECT name, extension FROM library Where id = $imgId");
            while($row2 = mysqli_fetch_array($query2)) {
                $imageUrl = $row2['name'].".".$row2['extension'];
            }
           $name = $row['name'];
           $id = $row['id'];
           $description = $row['description'];
           $price = $row['price'];
           $art = [$id, $name, $imageUrl, $description, $price];
           $arts[$i++] = $art;
        }
        
        return $arts;
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
        $query = mysqli_query($conn, "SELECT imgId, name, price, description, author, catalogNumber, status FROM gallery WHERE id=$id");
        while($row = mysqli_fetch_array($query)) {
            $imgId = $row['imgId'];
            $query2 = mysqli_query($conn, "SELECT name, extension FROM library Where id = $imgId");
            while($row2 = mysqli_fetch_array($query2)) {
                $imageUrl = $row2['name'].".".$row2['extension'];
            }
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
    public static function getNumArt($conn){
        $query = mysqli_query($conn, "SELECT id FROM gallery");
        $numRows = mysqli_num_rows($query);

        return $numRows;
    }
    public static function deleteArt($conn, $id){
        if(Auth::isAdmin($conn) != true){
            return false;
        }
        mysqli_query($conn, "DELETE FROM gallery WHERE id=$id");
        return true;
    }
    public static function editArt($conn, $name, $description, $author, $catalogNumber, $status, $price, $id){
        if(Auth::isAdmin($conn) != true){
            return false;
        }

        mysqli_query($conn, "UPDATE gallery SET name='$name', description='$description', author='$author', catalogNumber='$catalogNumber', status='$status', price='$price' WHERE id='$id'");
        return true;
    }
}