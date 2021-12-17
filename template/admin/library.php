<div class="container-fluid">
<div class="row mt-3">
    <div class="col-12">
    <div class="squere2">
        
        <form method='POST' action='api/upload.php' enctype='multipart/form-data' class="uploadForm">
                <label id="uploadPlace" class ="uploadPlace" for="upload"> Kliknij aby dodać pliki...</label>
                <input type="file" name="file[]" id="upload" multiple>
                <input type='submit' name='submit' value='Prześlij' onclick="loaderUpload()">
            <div style="clear:both"></div>

        </form>
        </div>

    </div>

</div>
<div class="row">
        <?php
        $arts = Library::getLibrary($conn);
        $countArts = count($arts);
        for($row=0; $row<$countArts; $row++){
            ?>
            <div class="col-2 mt-3">
            <a href="?page=adminDashBoard&aPage=library&imageId=<?=$arts[$row][0]?>">
                <div class="libItemBox">
                    <img src="/storage/arts/<?=$arts[$row][1].".".$arts[$row][2]?>">
                </div>
            </a>
            </div>
            <?php
        }
        ?>
    </div>
</div>
</div>
<?php
    if(GET("imageId") !== null){
        require_once("imageOptions.php");
    }
?>
<div class="loadingWrapper" id="loaderUpload">
    <div class="loaderBox">
        <div class="loader"></div>
        <span>Trwa dodawanie, nie wyłączaj okna!</span>
    </div>
</div>
<script>
    var pullfiles=function(){
    var fileInput = document.querySelector("#upload");
    var files = fileInput.files;
    var fl = files.length;
    document.getElementById("uploadPlace").innerHTML= "Liczba wybranych plików To:  "+fl;
}

    // set the input element onchange to call pullfiles
    document.querySelector("#upload").onchange=pullfiles;

    function loaderUpload(){
        document.getElementById("loaderUpload").style.display = "block";
    }


</script>

