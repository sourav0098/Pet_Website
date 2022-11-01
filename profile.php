<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php include "./header_top.php" ?>

    <div id="wrapper" class="d-flex">
        <!-- SideBar -->
        <?php include "./sidebar.php" ?>
        <!-- PageContent -->
        <section id="content" class="container-fluid">
            <div id="profile">
                <div class="container-fluid d-flex align-items-center">
                    <button type="button" id="sideBarCollapse" class="btn btn-secondary me-3"><i class="fa-solid fa-bars"></i></button>
                    <h1 class="fw-bold">Profile</h1>
                </div>
                <div class="container mb-3">
                    <form class="row g-3" action="" method="POST">
                        <!-- Add ID here -->
                        <input type="hidden" name="id" value="" />

                        <div class="text-center d-flex flex-column align-items-center" id="profile-img">
                            <div id="image" class="circular mb-2">
                                <img src="./images/user.png" alt="">
                            </div>
                            <div class="file btn btn-primary position-relative overflow-hidden" id="upload-img">
                                <label for="image-input">Upload</label>
                                <input type="file" name="profile-image" id="image-input" accept="image/x-png,image/gif,image/jpeg" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" readonly class="form-control" id="fname" name="fname" value="Sourav" min="2" max="4">
                            <span class="text-danger fst-italic d-none">Please enter valid first name</span>
                        </div>
                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" readonly class="form-control" id="lname" name="lname" value="Choudhary">
                            <span class="text-danger fst-italic d-none">Please enter valid last name</span>
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" readonly class="form-control" id="email" name="email" value="sourav@gmail.com" min="2" max="4">
                            <span class="text-danger fst-italic d-none">Please enter valid email</span>
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" readonly class="form-control" id="phone" name="phone" value="6478989899">
                            <span class="text-danger fst-italic d-none">Please enter valid phone number</span>
                        </div>
                        <div class="col-12">
                            <label for="streetAddress" class="form-label">Street Address</label>
                            <input type="text" readonly class="form-control" id="streetAddress" name="streetAddress" value="32 Halsey Avenue">
                            <span class="text-danger fst-italic d-none">Please enter your street address</span>
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" readonly class="form-control" id="city" name="city" value="Toronto">
                            <span class="text-danger fst-italic d-none">Please enter your city name</span>
                        </div>
                        <div class="col-md-6">
                            <label for="province" class="form-label">Province</label>
                            <select id="province" disabled class="form-select" name="province">
                                <option>Alberta</option>
                                <option>British Columbia</option>
                                <option>Manitoba</option>
                                <option>New Brunswick</option>
                                <option>New Foundland and Labrador</option>
                                <option>Northwest Territories</option>
                                <option>Nova Scotia</option>
                                <option>Nunavut</option>
                                <option selected>Ontario</option>
                                <option>Prince Edward Island</option>
                                <option>Quebec</option>
                                <option>Saskatchewan</option>
                                <option>Yukon Territory</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="postal-code" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postal-code" name="postal-code" readonly value="M3B2W6">
                            <span class="text-danger fst-italic d-none">Please enter valid postal code</span>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" id="editBtn">Edit</button>
                            <button type="submit" class="btn btn-primary" id="cancelBtn" name="cancelButton">Cancel</button>
                            <button type="submit" class="btn btn-success" id="saveBtn" name="saveButton">Save</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- Current Pets -->
            <div id="current-pets">
                <div class="container-fluid d-flex align-items-center mt-4">
                    <h1 class="fw-bold fs-3">Current Pets</h1>
                </div>
                <div class="container d-flex justify-content-between flex-wrap">
                    <div class="card mb-3 mt-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="./images/featured_1.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <i class="fa-solid fa-pen-to-square" id="edit-icon"></i>

                                    <h5 class="card-title fw-bold">Garu</h5>
                                    <p class="card-text text-justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                                    <div class="d-flex justify-content-between">
                                        <small class=" text-muted">Female</small>
                                        <small class=" text-muted">Golden</small>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small class="text-muted">Baby</small>
                                        <small class="text-muted">Medium hair</small>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small class="text-muted">Toronto</small>
                                        <small class="text-muted">Friendly, Loyal, Playful</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 mt-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="./images/featured_1.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <i class="fa-solid fa-pen-to-square" id="edit-icon"></i>
                                    <h5 class="card-title fw-bold">Garu</h5>
                                    <p class="card-text text-justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                                    <div class="d-flex justify-content-between">
                                        <small class=" text-muted">Female</small>
                                        <small class=" text-muted">Golden</small>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small class="text-muted">Baby</small>
                                        <small class="text-muted">Medium hair</small>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small class="text-muted">Toronto</small>
                                        <small class="text-muted">Friendly, Loyal, Playful</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-3 mt-3">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="./images/featured_1.jpg" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <i class="fa-solid fa-pen-to-square" id="edit-icon"></i>
                                    <h5 class="card-title fw-bold">Garu</h5>
                                    <p class="card-text text-justify">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
                                    <div class="d-flex justify-content-between">
                                        <small class=" text-muted">Female</small>
                                        <small class=" text-muted">Golden</small>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small class="text-muted">Baby</small>
                                        <small class="text-muted">Medium hair</small>
                                    </div>

                                    <div class="d-flex justify-content-between">
                                        <small class="text-muted">Toronto</small>
                                        <small class="text-muted">Friendly, Loyal, Playful</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="./js/validation.js"></script>
<script src="./js/profile.js"></script>

</html>