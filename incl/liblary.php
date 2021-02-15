<?php
class Liblary{
    public static function saveFile($imgName){

        if(is_uploaded_file($_FILES['obrazek']['tmp_name'])){
            if(!move_uploaded_file($_FILES['obrazek']['tmp_name'], $imgName)){
                return false;
            }
        }
        else{
            return false;
        }
        return true;
    }
}