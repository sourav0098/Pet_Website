<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Favourites</title>
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
    <script>
        $(document).ready(function() {
            $('#pets_table').DataTable();
        });
  
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
                <h1 class="fw-bold">Favourites</h1>
            </div>
            <div class="container table-responsive">

                <table class="table overflow-auto nowrap table-striped" id="pets_table">
                        <thead>
                            <tr>
                                <th scope="col">S. No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Date of Birth</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Animal Type</th>
                                <th scope="col">Coat Length</th>
                                <th scope="col">Characteristic</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                            <tbody>
                                <
                            <tr>
                                <th scope="row">1</th>
                                <td>Milo</td>
                                <td>2012-07-21</td>
                                <td>Male</td>
                                <td>Dog</td>
                                <td>Short</td>
                                <td>Friendly</td>
                                <td><i onclick="toggleFav(this)" class="fa-solid fa-heart"></i></td>
                                <script> function toggleFav(x){
                                    x.classList.toggle("fa-thin fa-heart")
                                }</script>
                            </tr>
                            </tbody>
                </table>
                <button type="button"  class="btn btn-primary" title="Add"
                onclick="">
                    <i class="fa-solid fa-plus"></i> Add Favourite
                </button>
            </div>
        </div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./js/favourites.js"></script>

</html>