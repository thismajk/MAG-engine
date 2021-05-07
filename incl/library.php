<?php
class Library{
    public static function uploadFiles($conn,$file,$fileTmp){
        if(Auth::isAdmin($conn) != true){
            return false;
        }
        $userID = Auth::getUserID($_SESSION['user'], $conn);
        $scan = pathinfo($file);
        $ext = $scan['extension'];
        $addedDate = date('Y-m-d H:i:s');
        $filename = "img".date("YmdHis")."".rand(000,999); 
        $location = "../storage/arts/".$filename.".".$ext;
       // move_uploaded_file($fileTmp,$location);

        Library::compressImage($fileTmp,$location,60);

        mysqli_query($conn, "INSERT INTO library VALUES (NULL, '$filename', '$ext', '$addedDate', '$userID')");
    }

    public static function compressImage($source, $destination, $quality) {
        $info = getimagesize($source);
    
        if ($info['mime'] == 'image/jpeg'){
            $image = imagecreatefromjpeg($source);
        }
        elseif ($info['mime'] == 'image/gif'){
            $image = imagecreatefromgif($source);
        }
        elseif ($info['mime'] == 'image/png'){
            $image = imagecreatefrompng($source);
        }

        $scale = min(400/$info[0], 400/$info[1]);
        $newWidth = ceil($scale*$info[0]);
        $newHeight = ceil($scale*$info[1]);
        $image =  imagescale($image, $newWidth, $newHeight);

        imagejpeg($image, $destination, $quality);
    }
    public static function getLibrary($conn){
        $query = mysqli_query($conn, "SELECT id, name, extension, addedDate, authorId FROM library ORDER BY id DESC");
        $arts = [];
        $i = 0;
        while($row = mysqli_fetch_array($query)) {
           $name = $row['name'];
           $id = $row['id'];
           $extension = $row['extension'];
           $art = [$id, $name, $extension];
           $arts[$i++] = $art;
        }
        
        return $arts;
    }
}