<?php include "./Header_top.php" ?>

<nav class="navbar navbar-expand-lg">
    <div class="container-fluid justify-content-end">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle active" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Find a Pet
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="Filter_pet.php">Dog</a></li>
                        <li><a class="dropdown-item" href="Filter_pet.php">Cat</a></li>
                        <li><a class="dropdown-item" href="Filter_pet.php">Other Animals</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">How it works</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="About_us.php">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>