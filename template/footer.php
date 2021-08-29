<!--Optional JavaScript-->
<script>

    if(showCookie("cookiesPrivacy") == "true"){
        document.getElementById("cookies").style.display = "none";
    }

    function showCookie(name) {
        if (document.cookie !== "") {
            const cookies = document.cookie.split(/; */);

            for (let cookie of cookies) {
                const [ cookieName, cookieVal ] = cookie.split("=");
                if (cookieName === decodeURIComponent(name)) {
                    return decodeURIComponent(cookieVal);
                }
            }
        }
        return false;
    }
    function acceptCookiesPrivacy(){
        document.cookie = "cookiesPrivacy=true"
        document.getElementById("cookies").style.display = "none";
    }
</script>
<!--jQuery first, then Popper . js, then Bootstrap JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<div class="footer">
    <div class="socialmedia">
        <span>Wszystkie nasze socialmedia: </span>
        <div class="wrapper">
            <a href="#" class="fab fa-facebook"></a>
        </div>
        <div class="wrapper">
            <a href="#" class="fab fa-instagram"></a>
        </div>
        <div class="wrapper">
            <a href="#" class="fab fa-youtube"></a>
        </div>
        <div style="clear:both"></div>
    </div>
    <div class="middle container-fluid">
            <div class="row">
                <div class="wrapper col-sm-12 col-lg-6 col-xl-3">
                    <h3>Mery Art Gallery</h3>
                    <span>Marzena Okuszko jest wrocławską artystką, członkinią Dolnośląskiego Stowarzyszenia Artystów Plastyków we Wrocławiu. Maluje głównie w technice akrylowej. Prace zawierają odwołania do folkloru słowiańskiego, jak i tradycji innych stron świat</span>
                </div>
                <div class="wrapper col-sm-12 col-lg-6 col-xl-3">
                    <h3>podstrony</h3>
                    <ol>
                        <li>Strona Główna</li>
                        <li>Kontakt</li>
                        <li>Galeria</li>
                        <li>O Mnie</li>
                        <li><a href="?page=login" style="text-decoration: none;color: #FFF;">Logowanie</a></li>
                    </ol>
                </div>
                <div class="wrapper col-sm-12 col-lg-6 col-xl-3">
                    <h3>linki</h3>
                    <ol>
                        <li>Cookies</li>
                        <li>Regulamin</li>
                    </ol>
                </div>
                <div class="wrapper col-sm-12 col-lg-6 col-xl-3">
                    <h3>kontakt</h3>
                    <ol>
                        <li>Wrocław</li>
                        <li>kontakt@meryartgallery.com</li>
                        <li>+48 000 000 000</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="end">
            Created by Michał Gombos | Mery Art Gallery | All rights reserved | 2021.
        </div>
</div>
