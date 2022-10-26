<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account Settings</title>
    <link rel="shortcut icon" href="./images/favicon-32x32.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        #toggleConfirmEye,
        #toggleNewEye {
            position: absolute;
            top: 43px;
            right: 23px;
        }
    </style>
</head>

<body>
    <?php include "./header_top.php" ?>


    <div id="wrapper" class="d-flex">
        <!-- SideBar -->
        <?php include "./sidebar.php" ?>
        <!-- PageContent -->
        <div id="content" class="container-fluid">
            <!-- Email Container -->
            <div class="container-fluid d-flex align-items-center">
                <button type="button" id="sideBarCollapse" class="btn btn-secondary me-3"><i class="fa-solid fa-bars"></i></button>
                <h1 class="fw-bold">Settings</h1>
            </div>
            <div class="container mb-3">
                <h3 class="fw-bold">Email</h3>
                <form class="row g-3" action="" method="POST">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" readonly class="form-control" id="email" name="email" value="sourav@gmail.com">
                        <span class="text-danger fst-italic d-none">Please enter valid email</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" id="emailEditBtn">Edit</button>
                        <button type="submit" class="btn btn-primary" id="emailCancelBtn" name="cancelButton">Cancel</button>
                        <button type="submit" class="btn btn-success" id="emailUpdateBtn" name="saveButton">Update</button>
                    </div>
                </form>
            </div>
            <!-- Password Container -->
            <div class="container">
                <h3 class="fw-bold">Password</h3>
                <form class="row g-3 flex-column" action="" method="POST">
                    <div class="col-md-6">
                        <label for="old-password" class="form-label">Current Password</label>
                        <input type="password" readonly class="form-control" id="old-password" name="old-password" value="xxxxxxxxxxxxxxxx">
                    </div>
                    <div class="col-md-6 position-relative" id="new-password-container">
                        <label for="new-password" class="form-label">New Password</label>
                        <input type="password" readonly class="form-control" id="new-password" name="new-password" value="">
                        <i class="fa-solid fa-eye-slash" id="toggleNewEye"></i>
                        <span class="text-danger fst-italic d-none">Password should have
                            <ul>
                                <li>a minimum of 8 characters</li>
                                <li>at least one lowercase character</li>
                                <li>at least one uppercase character</li>
                                <li>at least one special character</li>
                                <li>at least one number(digit)</li>
                            </ul>
                        </span>
                    </div>
                    <div class="col-md-6 position-relative" id="confirm-password-container">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" readonly class="form-control" id="confirm-password" name="cpassword" value="">
                        <i class="fa-solid fa-eye-slash" id="toggleConfirmEye"></i>
                        <span class="text-danger fst-italic d-none">Confirm Password does not match</span>
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" id="passEditBtn">Edit</button>
                        <button type="submit" class="btn btn-primary" id="passCancelBtn" name="cancelButton">Cancel</button>
                        <button type="submit" class="btn btn-success" id="passUpdateBtn" name="saveButton">Update</button>
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
<script src="./js/validation.js"></script>
<script src="./js/settings.js"></script>

</html>