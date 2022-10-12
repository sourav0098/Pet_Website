<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <header class="bg-white">
        <div class="d-flex align-items-center justify-content-between">
            <div class="logo d-flex align-items-center">
                <a href="./index.php" class="nav-link d-flex align-items-center">
                    <img src="./images/logo.png" class="img-fluid" alt="">
                    <h1 class="fs-3">Little Paws</h1>
                </a>
            </div>
            <div class="d-flex align-items-center">
                <div class="login-btn">
                    <i class="fa-solid fa-heart" title="Favourites"></i>
                    <a href="./register.php">SignUp</a>
                    <a href="./login.php">Login</a>
                </div>
                <div class="profile">
                    <a class="navbar-brand" href="./profile.php">
                        <img src="./images/user.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </header>

    <div id="wrapper" class="d-flex">
        <!-- SideBar -->
        <?php include "./sidebar.php" ?>
        <!-- PageContent -->
        <div id="content" class="container-fluid">
            <div class="container-fluid d-flex align-items-center">
                <button type="button" id="sideBarCollapse" class="btn btn-secondary me-3"><i class="fa-solid fa-bars"></i></button>
                <h1 class="fw-bold">Profile</h1>
            </div>
            <div>
                <div class="text-center d-flex flex-column align-items-center" id="profile-img">
                    <img src="./images/user.png" alt="" class="mb-2">
                    <div class="file btn btn-primary position-relative overflow-hidden" id="upload-img">
                        Upload
                        <input type="file" name="file" id="image-input" />
                    </div>
                </div>
                <div class="container">
                    <form class="row g-3" action="" method="POST">
                        <!-- Add ID here -->
                        <input type="hidden" name="id" value="" />
                        <div class="col-md-6">
                            <label for="fname" class="form-label">First Name</label>
                            <input type="text" readonly class="form-control" id="fname" name="fname" value="Sourav">
                        </div>
                        <div class="col-md-6">
                            <label for="lname" class="form-label">Last Name</label>
                            <input type="text" readonly class="form-control" id="lname" name="lname" value="Choudhary">
                        </div>
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" readonly class="form-control" id="email" name="email" value="sourav@gmail.com">
                        </div>
                        <div class="col-md-6">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" readonly class="form-control" id="phone" name="phone" value="6478989899">
                        </div>
                        <div class="col-12">
                            <label for="streetAddress" class="form-label">Street Address</label>
                            <input type="text" readonly class="form-control" id="streetAddress" name="streetAddress" value="32 Halsey Avenue">
                        </div>
                        <div class="col-md-6">
                            <label for="city" class="form-label">City</label>
                            <input type="text" readonly class="form-control" id="city" name="city" value="Toronto">
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
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary" id="editBtn">Edit</button>
                            <button type="submit" class="btn btn-primary" id="cancelBtn" name="cancelButton">Cancel</button>
                            <button type="submit" class="btn btn-success" id="saveBtn" name="saveButton">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script src="./js/profile.js"></script>
</html>