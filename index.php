<?php require_once "conf.php"; ?>
<!doctype html>
<html lang="pl">
<head >
    <?php require_once BASE_DIR."/template/header.php"?>
</head >
<body >
    <?php require_once BASE_DIR."/template/adminbar.php";
    if(GET("page")!="adminDashBoard"){
        ?>
        <div class="darkContainer" id="cookies">
            <div class="cookiesBox">
                <h3>Polityka cookies</h3>
                <p class="cookiesPrivacy">
                    Niniejsza polityka dotycząca plików cookie odnosi się do wszystkich stron internetowych oraz aplikacji na urządzenia mobilne, należących do Mery Art Gallery
                    Przez korzystanie ze stron i aplikacji wyrażasz zgodę na używanie ciasteczek zgodnie z tą polityką. Jeżeli nie zgadzasz się na używanie przez nas plików cookie, powinieneś zmienić ustawienia swojej przeglądarki w odpowiedni sposób lub zrezygnować z używania stron oraz aplikacji.
                    <br /><br />
                    <b>Co to są ciasteczka?</b><br />
                    Ciasteczka (ang. cookies) to niewielkie pliki, zapisywane i przechowywane na twoim komputerze, tablecie lub smartphonie podczas gdy odwiedzasz różne strony w internecie. Ciasteczko zazwyczaj zawiera nazwę strony internetowej, z której pochodzi, "długość życia" ciasteczka (to znaczy czas jego istnienia) oraz przypadkowo wygenerowany unikalny numer służący do identyfikacji przeglądarki, z jakiej następuje połączenie ze stroną internetową.
                    <br /><br />
                    <b>Do czego używamy ciasteczek?</b><br />
                    Mery Art Gallery używa ciasteczek w różnych celach: by strony i aplikacje działały szybciej i by były łatwiejsze w użyciu, aby lepiej dopasować treści i reklamy do twoich oczekiwań i zainteresowań oraz do zbierania anonimowych, zagregowanych statystyk, które pomagają w poprawianiu funkcjonalności i zawartości stron i aplikacji. Używając ciasteczek w wyżej opisany sposób nigdy nie identyfikujemy tożsamości użytkowników na podstawie informacji przechowywanych w ciasteczkach.
                </p>
                    <button class="cookiesButton" onclick="acceptCookiesPrivacy()">Akceptuje</button>
            </div>
            
        </div>
        <?php
        require_once BASE_DIR."/template/navbar.php";
        require_once BASE_DIR."/template/pages.php";
        require_once BASE_DIR."/template/footer.php"; 
    }
    else{
        require_once BASE_DIR."/template/adminDashBoard.php";
    }
    ?>
    
</body >
</html >
