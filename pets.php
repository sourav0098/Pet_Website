<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pets</title>
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
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="editModalLabel">Edit Pet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="POST">
                    <div class="modal-body row g-3">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="col-md-12">
                            <label for="petnameEdit" class="form-label">Name</label>
                            <input type="text" class="form-control" id="petnameEdit" name="petnameEdit">
                        </div>
                        <div class="col-md-12">
                            <label for="dobEdit" class="form-label">Date of Birth</label>
                            <input type="date" class="form-control" name="dobEdit" id="dobEdit">
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
                        <div class="col-12">
                            <label for="animalTypeEdit" class="form-label">Animal Type</label>
                            <select id="animalTypeEdit" class="form-select" name="animalTypeEdit">
                                <option>Dog</option>
                                <option>Cat</option>
                                <option>Rabbit</option>
                                <option>Bird</option>
                                <option>Fish</option>
                                <option>Other</option>
                            </select>

                        </div>
                        <div class="col-md-12">
                            <label for="coatEdit" class="form-label">Coat Length</label>
                            <select id="coatEdit" class="form-select" name="coatEdit">
                                <option>Hairless</option>
                                <option>Short</option>
                                <option>Medium</option>
                                <option>Full</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="characteristicEdit" class="form-label">Characteristic</label>
                            <textarea class="form-control" style="resize:none;" name="characteristicEdit" id="characteristicEdit"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <?php include "./header_top.php" ?>

    <div id="wrapper" style="height:100vh" class="d-flex">
        <!-- SideBar -->
        <?php include "./sidebar.php" ?>
        <!-- PageContent -->
        <div id="content" class="container-fluid">
            <div class="container-fluid d-flex align-items-center">
                <button type="button" id="sideBarCollapse" class="btn btn-secondary me-3"><i class="fa-solid fa-bars"></i></button>
                <h1 class="fw-bold">Pets</h1>
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
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Milo</td>
                            <td>2012-07-21</td>
                            <td>Male</td>
                            <td>Dog</td>
                            <td>Short</td>
                            <td>Friendly</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-primary edit me-2" title="Edit">Edit</button>
                                <button type="submit" class="btn btn-danger" title="Delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Duke</td>
                            <td>2016-05-09</td>
                            <td>Female</td>
                            <td>Dog</td>
                            <td>Medium</td>
                            <td>Loyal</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-primary edit me-2" title="Edit">Edit</button>
                                <button type="submit" class="btn btn-danger" title="Delete">Delete</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script src="./js/pets.js"></script>

</html>