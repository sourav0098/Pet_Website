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
                <div class="container">
                    <form class="row g-3" action="" method="POST">
                        <!-- Add a pet Content -->
                        <input type="hidden" name="id" value="" />
                        <div class="col-md-12">
                            <label for="pName" class="form-label">Pet Name</label>
                            <input type="text" class="form-control" id="pName" name="pName">
                        </div>
                        <div class="col-md-12">
                            <label for="dob" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" id="dob" name="dob">
                        </div>
                        <div class="col-md-12">
                            <p class="form-label">Gender</p>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="male" name="genderEdit" value="Male">
                                <label for="male" class="form-check-label">Male</label><br>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" class="form-check-input" id="female" name="genderEdit" value="Female">
                                <label for="female" class="form-check-label">Female</label><br>
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
                                <option>Hairless</option>
                                <option>Short</option>
                                <option>Medium</option>
                                <option>Full</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="characteristic" class="form-label">Characteristic</label>
                            <textarea class="form-control" rows="4" style="resize:none;" name="characteristic" id="characteristic"></textarea>
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-primary" id="addBtn" name="addBtn">Add pet</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $("#sideBarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
        });
    });
</script>

</html>