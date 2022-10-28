<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add a Pet</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/add-pet.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </script>
</head>

<body>
    <?php include "./Header_top.php" ?>
    <div id="wrapper" class="d-flex">
        <!-- SideBar -->
        <?php include "./sidebar.php" ?>
        <!-- PageContent -->
        <div id="content" class="container-fluid">
            <div class="container-fluid d-flex align-items-center">
                <button type="button" id="sideBarCollapse" class="btn btn-secondary me-3"><i class="fa-solid fa-bars"></i></button>
                <h1 class="fw-bold">Add a Pet</h1>
            </div>
            <div>
                <div class="text-center d-flex flex-column align-items-center" id="profile-img">


                </div>
                <div class="container mb-5x">
                    <form class="row g-3" action="" method="POST">
                        <!-- Add a pet Content -->
                        <input type="hidden" name="id" value="" />
                        <div class="text-center d-flex flex-column align-items-center" id="profile-img">
                            <div id="image" class="circular mb-2">
                                <img src="./images/pet_default.jpg" alt="">
                            </div>
                            <div class="file btn btn-primary position-relative overflow-hidden" id="upload-img">
                                <label for="image-input">Upload</label>
                                <input type="file" name="pet-image" id="image-input" accept="image/x-png,image/gif,image/jpeg" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <label for="pet-name" class="form-label">Pet Name</label>
                            <input type="text" class="form-control" id="pet-name" name="pet-name">
                            <span class="text-danger fst-italic d-none">Please enter valid first pet name</span>
                        </div>
                        <div class="col-md-12">
                            <label for="age" class="form-label">Age</label>
                            <select id="age" class="form-select" name="age">
                                <option value="Baby">Baby</option>
                                <option value="Young">Young</option>
                                <option value="Adult">Adult</option>
                                <option value="Senior">Senior</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <p class="form-label">Gender</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="male" name="gender" value="Male">
                                <label for="male" class="form-check-label">Male</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="female" name="gender" value="Female">
                                <label for="female" class="form-check-label">Female</label><br>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <p class="form-label">Characteristic</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Cute" name="characteristic[]" value="Cute">
                                <label class="form-check-label" for="Cute">Cute</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Loyal" name="characteristic[]" value="Loyal">
                                <label class="form-check-label" for="Loyal">Loyal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Friendly" name="characteristic[]" value="Friendly">
                                <label class="form-check-label" for="Friendly">Friendly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Playful" name="characteristic[]" value="Playful">
                                <label class="form-check-label" for="Playful">Playful</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Intelligent" name="characteristic[]" value="Intelligent">
                                <label class="form-check-label" for="Intelligent">Intelligent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Happy" name="characteristic[]" value="Happy">
                                <label class="form-check-label" for="Happy">Happy</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Affectionate" name="characteristic[]" value="Affectionate">
                                <label class="form-check-label" for="Affectionate">Affectionate</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Courageous" name="characteristic[]" value="Courageous">
                                <label class="form-check-label" for="Courageous">Courageous</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="animalType" class="form-label">Animal Type</label>
                            <select id="animalType" class="form-select" name="animalType">
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Rabbit">Rabbit</option>
                                <option value="Bird">Bird</option>
                                <option value="Fish">Fish</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-6">
                            <label for="coat" class="form-label">Coat Length</label>
                            <select id="coat" class="form-select" name="coat">
                                <option value="Hairless">Hairless</option>
                                <option value="Short">Short</option>
                                <option value="Medium">Medium</option>
                                <option value="Full">Full</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="color" class="form-label">Color</label>
                            <input type="text" class="form-control" id="color" name="color">
                            <span class="text-danger fst-italic d-none">Please enter valid color</span>
                        </div>
                        
                        <div class="col-md-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Leave a description here" id="description" col="10" rows="4"></textarea>
                            <span class="text-danger fst-italic d-none">Please enter valid description</span>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" id="add-pet" name="addBtn">Add pet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="./js/validation.js"></script>
<script src="./js/add-pet.js"></script>
<script>
    $(document).ready(function() {
        $("#sideBarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
        });
    });
</script>

</html>