<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home Page</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/home.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <!-- Header -->
    <?php include "./nav.php" ?>

    <!-- Slider main container -->
    <main class="image-slider">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="./images/slider_1.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="./images/slider_2.jpg">
                </div>
                <div class="swiper-slide">
                    <img src="./images/slider_3.jpg">
                </div>
            </div>

            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
        </div>
    </main>

    <section class="container d-flex align-items-center justify-content-center pet-options">
        <div>
            <h1 class="fw-bold">Find your new best friend</h1>
        </div>
        <div class="d-flex">
            <div class="card">
                <a class="nav-link" href=""><img src="./images/dog.png" alt="dog">
                    <p class="text-center">Dogs</p>
                </a>
            </div>
            <div class="card">
                <a class="nav-link" href=""><img src="./images/cat.png" alt="cat">
                    <p class="text-center">Cats</p>
                </a>
            </div>
            <div class="card">
                <a class="nav-link" href=""><img src="./images/paw.png" alt="other animals">
                    <p class="text-center">Other Animals</p>
                </a>
            </div>
        </div>
    </section>


    <!-- Featured Pets -->
    <section class="container-fluid bg-white">
        <div class="container d-flex flex-column align-items-center">
            <div>
                <h1 class="heading fw-bold m-0 p-4">Featured Pets</h1>
            </div>
            <div class="d-flex featured-pet container justify-content-between p-0 pb-4">
                <div class="featured-pet-card">
                    <a href="" class="nav-link">
                        <div class="featured-pet-image">
                            <img src="./images/featured_1.jpg" width="230px" alt="">
                        </div>
                        <div class="featured-pet-content">
                            <h3 class="text-center fw-bold">Duke</h3>
                            <p class="text-center m-0">Male</p>
                            <p class="text-center m-0">Toronto</p>
                        </div>
                    </a>
                </div>
                <div class="featured-pet-card">
                    <a href="" class="nav-link">
                        <div class="featured-pet-image">
                            <img src="./images/featured_2.jpg" width="230px" alt="">
                        </div>
                        <div class="featured-pet-content">
                            <h3 class="text-center fw-bold">Milo</h3>
                            <p class="text-center m-0">Female</p>
                            <p class="text-center m-0">Etobicoke</p>
                        </div>
                    </a>
                </div>
                <div class="featured-pet-card">
                    <a href="" class="nav-link">
                        <div class="featured-pet-image">
                            <img src="./images/featured_3.jpg" width="230px" alt="">
                        </div>
                        <div class="featured-pet-content">
                            <h3 class="text-center fw-bold">Rex</h3>
                            <p class="text-center m-0">Male</p>
                            <p class="text-center m-0">North York</p>
                        </div>
                    </a>
                </div>
                <div class="featured-pet-card">
                    <a href="" class="nav-link">
                        <div class="featured-pet-image">
                            <img src="./images/featured_4.jpg" alt="">
                        </div>
                        <div class="featured-pet-content">
                            <h3 class="text-center fw-bold">Dollar</h3>
                            <p class="text-center m-0">Male</p>
                            <p class="text-center m-0">Mississauga</p>
                        </div>
                    </a>
                </div>
                <div class="featured-pet-card">
                    <a href="" class="nav-link">
                        <div class="featured-pet-image">
                            <img src="./images/featured_5.jpg" alt="">
                        </div>
                        <div class="featured-pet-content">
                            <h3 class="text-center fw-bold">Leo</h3>
                            <p class="text-center m-0">Male</p>
                            <p class="text-center m-0">Toronto</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Adoption Process -->
    <section class="container-fluid d-flex align-items-center justify-content-center flex-column adoption-process">
        <div>
            <h1 class="heading fw-bold m-0 p-4">Pet Adoption Process</h1>
        </div>
        <div class="d-flex justify-content-between w-100 pb-4">
            <div class="adopt-pet-card d-flex align-items-center flex-column bg-white">
                <img src="./images/adopt_process_1.jpg" alt="">
                <h3 class="fw-bold">Find your pet</h3>
            </div>
            <div class="adopt-pet-card d-flex align-items-center flex-column bg-white">
                <img src="./images/adopt_process_2.jpg" alt="">
                <h3 class="fw-bold">Know your pet</h3>
            </div>
            <div class="adopt-pet-card d-flex align-items-center flex-column bg-white">
                <img src="./images/adopt_process_3.jpg" alt="">
                <h3 class="fw-bold">Take your pet home</h3>
            </div>
        </div>
    </section>


    <!-- Achievement Section -->
    <section class="achievements bg-white">
        <div class="achievement-container container">
            <div>
                <h1 class="text-center fw-bold m-0 p-4 heading">Our Achievements</h1>
            </div>
            <div class="d-flex container justify-content-evenly pb-4">
                <div class="achievement-card p-4">
                    <img class="me-3 p-2" src="./images/achieve_1.png" alt="">
                    <div>
                        <h1 class="fw-bold fs-2 m-0" style="color: #fabe2c;">1,245</h1>
                        <h1 class="fs-5 m-0">Members</h1>
                    </div>
                </div>
                <div class="achievement-card p-4">
                    <img class="me-3 p-2" src="./images/achieve_2.png" alt="">
                    <div>
                        <h1 class="fw-bold fs-2 m-0" style="color:#458377;">349</h1>
                        <h1 class="fs-5 m-0">Happy Pets</h1>
                    </div>
                </div>
                <div class="achievement-card p-4">
                    <img class="me-3 p-2" src="./images/achieve_3.png" alt="">
                    <div>
                        <h1 class="fw-bold fs-2 m-0" style="color:#e86581;">930</h1>
                        <h1 class="fs-5 m-0">Customers</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <?php include "./footer.php" ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    const swiper = new Swiper('.swiper', {
        spaceBetween: 30,
        slidesPerView: 1,
        centeredSlides: true,
        loop: true,
        keyboard: {
            enabled: true,
        },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        }
    });
</script>

</html>