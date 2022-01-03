<div class="addNewArt">
    <h2>Dodaj nowy produkt</h2>
    <form enctype="multipart/form-data" method="post" action="api/addPicture.php">
        <div class="row">
            <div class="col-8">
                <div class="tile">
                    <input type="text" name="name" placeholder="Nazwa" class="fullInput">
                </div>
                <div class="tile">
                    <textarea name="description" placeholder="Opis" class="fullInput"></textarea>
                </div>
                <div class="tile">
                    <h5>Dane produktu</h5>
                    <div class="leftBar miniNav">
                        <p class="selected p-2"><i class="fas fa-wrench"></i>  Ustawienia Główne</p>
                        <p class="p-2"><i class="fas fa-link"></i> Powiązane porodukty</p>
                        <p class="p-2"><i class="fas fa-tags"></i> Tagi</p>
                    </div>
                    <div class="rightBar">
                        <div class="leftBar">
                            <p>Autor: </p>
                            <p>Cena: </p>
                            <p>numer katalogowy: </p>
                            <p>Dostępność: </p>
                        </div>
                        <div class="rightBar">
                            <input type="text" name="author" placeholder="Autor" class="defInput">
                            <input type="number" name="price" placeholder="cena" class="defInput">
                            <input type="number" name="catalogNumber" placeholder="Numer katalogowy" class="defInput">
                            <select name="status" placeholder="status" class="defInput">
                                <option value="Dostępne">Dostępne</option>
                                <option value="Nie dostępne">Niedostępne</option>
                                <option value="Sprzedane">Sprzedane</option>
                            </select>
                        </div>
                        <div style="clear:both"></div>
                    </div>
                    <div style="clear:both"></div>
                </div>
            </div>
            <div class="col-4">
                <div class="tile">
                    <h5>Obrazek produktu</h5>
                    <hr/>
                    <div id="selectImage"onclick="popupOn('popupSelectImage')"><i class="fas fa-image"></i></div>
                </div>
            </div>
        </div>
        <div id="addImageHidden"></div>
    </form>
</div>


<div class="x-popupContainer" id="popupSelectImage">
    <div class="x-popup" >
        <div class="x-popupHeader">
            <h4 class="fLeft">Wybierz zdjęcie</h4>
            <button type="button" class="btn btn-primary fRight" onclick="popupOff('popupSelectImage'); saveMainImage();">Zapisz</button>
            <div style="clear:both"></div>
        </div>
        <div class="x-popupContent">
        <?php
        $arts = library::getLibrary($conn);
        $countArts = count($arts);
        for($row=0; $row<$countArts; $row++){
            $itemJSON = '{"id": "'.$arts[$row][0].'", "name": "'.$arts[$row][1].'", "extension": "'.$arts[$row][2].'"}';
            ?>
                <label>
                    <input type="radio" value='<?=$itemJSON?>' name="imgId" class="checkBoxHidden">
                    <img src="/storage/arts/<?=$arts[$row][1].".".$arts[$row][2]?>" width="200px" height="200px;" class="imageBackLight">
                </label> 
            <?php
        }
        ?>
        </div>
    </div>
</div>
<script>
    document.getElementById('popupSelectImage').style.display = "none";
    
    function popupOn(i){
        document.getElementById(i).style.display = "block";
    }
    function popupOff(i){
        document.getElementById(i).style.display = "none";
    }

    function saveMainImage(){
        let img = document.getElementsByName('imgId');
        let val;
        for(i = 0; i < img.length; i++) {
                if(img[i].checked)
                val = img[i].value;
            }
        val = JSON.parse(val);
        document.getElementById("selectImage").innerHTML = '<img src="/storage/arts/'+val.name+'.'+val.extension+'" width = "100%">';
        document.getElementById("addImageHidden").innerHTML = '<input type="hidden" name="mainImageID" value="'+val.id+'">';
        
    }
    
</script>