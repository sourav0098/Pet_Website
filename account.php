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
                    <a href="./signup">SignUp</a>
                    <a href="./login">Login</a>
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
                <h1 class="fw-bold">Account Settings</h1>
            </div>
            <div class="container mb-3">
                <h3 class="fw-bold">Email</h3>
                <form class="row g-3" action="" method="POST">
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" readonly class="form-control" id="email" name="email" value="sourav@gmail.com">
                    </div>
                    <div class="col-12">
                        <button class="btn btn-primary" id="emailEditBtn">Edit</button>
                        <button type="submit" class="btn btn-primary" id="emailCancelBtn" name="cancelButton">Cancel</button>
                        <button type="submit" class="btn btn-success" id="emailUpdateBtn" name="saveButton">Update</button>
                    </div>
                </form>
            </div>
            <div class="container">
                <h3 class="fw-bold">Password</h3>
                <form class="row g-3 flex-column" action="" method="POST">
                    <div class="col-md-6">
                        <label for="old-password" class="form-label">Current Password</label>
                        <input type="password" readonly class="form-control" id="old-password" name="old-password" value="">
                    </div>
                    <div class="col-md-6" id="new-password-container">
                        <label for="new-password" class="form-label">New Password</label>
                        <input type="password" readonly class="form-control" id="new-password" name="new-password" value="">
                    </div>
                    <div class="col-md-6" id="confirm-password-container">
                        <label for="cpassword" class="form-label">Confirm Password</label>
                        <input type="password" readonly class="form-control" id="cpassword" name="cpassword" value="">
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
<script>
    $(document).ready(function() {
        $('#sideBarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });

    const emailEditBtn = document.getElementById("emailEditBtn");
    const emailCancelBtn = document.getElementById("emailCancelBtn");
    const emailUpdateBtn = document.getElementById("emailUpdateBtn");

    const passEditBtn = document.getElementById("passEditBtn");
    const passCancelBtn = document.getElementById("passCancelBtn");
    const passUpdateBtn = document.getElementById("passUpdateBtn");

    const newPasswordContainer=document.getElementById("new-password-container");
    const confirmPasswordContainer=document.getElementById("confirm-password-container");

    function displayNone(element){
        element.style.display="none";
    }

    function displayInlineBlock(element){
        element.style.display="inline-block";
    }

    addEventListener('load', (e) => {
        displayNone(emailCancelBtn);
        displayNone(emailUpdateBtn);
        displayNone(passCancelBtn);
        displayNone(passUpdateBtn);
        displayNone(newPasswordContainer);
        displayNone(confirmPasswordContainer);
    });

    // Email input events
    emailEditBtn.addEventListener('click',(e)=>{
        e.preventDefault();
        displayNone(emailEditBtn);
        displayInlineBlock(emailCancelBtn);
        displayInlineBlock(emailUpdateBtn);
        document.getElementById('email').removeAttribute('readonly');
        email.focus();
    })

    emailCancelBtn.addEventListener('click',(e)=>{
        e.preventDefault();
        displayInlineBlock(emailEditBtn);
        displayNone(emailCancelBtn);
        displayNone(emailUpdateBtn);
        document.getElementById('email').setAttribute('readonly',true);
    })

    emailUpdateBtn.addEventListener('click',(e)=>{
        e.preventDefault();
        displayInlineBlock(emailEditBtn);
        displayNone(emailCancelBtn);
        displayNone(emailUpdateBtn);
        document.getElementById('email').setAttribute('readonly',true);
    })

    // Password Input Events
    passEditBtn.addEventListener('click',(e)=>{
        e.preventDefault();
        displayNone(passEditBtn);
        displayInlineBlock(passCancelBtn);
        displayInlineBlock(passUpdateBtn);
        document.getElementById('old-password').removeAttribute('readonly');
        document.getElementById('old-password').focus();
    })

    passCancelBtn.addEventListener('click',(e)=>{
        e.preventDefault();
        displayInlineBlock(passEditBtn);
        displayNone(passCancelBtn);
        displayNone(passUpdateBtn);
        document.getElementById('old-password').setAttribute('readonly',true);
    })

    passUpdateBtn.addEventListener('click',(e)=>{
        e.preventDefault();
        displayInlineBlock(passEditBtn);
        displayNone(passCancelBtn);
        displayNone(passUpdateBtn);
        document.getElementById('old-password').setAttribute('readonly',true);
    })
</script>

</html>