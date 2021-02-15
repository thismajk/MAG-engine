<div class="nav-container">
    <?php require_once("template/adminbar.php")?>
    <nav class="navbar navbar-expand-lg ">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">
              <img src="<?php BASE_DIR?>/img/MAG-Icon-N.svg" class="icon">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">X</span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="/">Strona główna</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="?page=gallery">Galeria</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">O Mnie</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
</div>