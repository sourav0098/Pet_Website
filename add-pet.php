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
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    
  
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
                        <div class="col-md-6">
                            <label for="pName" class="form-label">Pet Name</label>
                            <input type="text"  class="form-control" id="pName" name="pName">
                        </div>
                        <div class="col-md-6">
                            <label for="DoB" class="form-label">Date of Birth</label>
                            <input type="date"  class="form-control" id="DoB" name="DoB">
                        </div>
                        <div class="col-md-6">
                            <label for="Gender" class="form-label">Gender</label>
                            <input type="email"  class="form-control" id="Gender" name="Gender">
                        </div>
                        <div class="col-md-6">
                            <label for="AType" class="form-label">Animal Type</label>
                            <select id="AType" class="form-select" name="AType">
                                <option>-Select Type-</option>
                                <option>Dog</option>
                                <option>Cat</option>
                                <option>Other</option>
                                
                            </select>
                        </div>
                        
                        <div class="col-6">
                            <label for="CLength" class="form-label">Coat Length</label>
                            <input type="text"  class="form-control" id="CLength" name="CLength">
                        </div>
                        <div class="col-md-6">
                            <label for="CHristic" class="form-label">Characteristics</label>
                            <input type="text"  class="form-control" id="CHristic" name="CHristic">
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
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

<script src="./js/add-pet.js"></script>
</html>