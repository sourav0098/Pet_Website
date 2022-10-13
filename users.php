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
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/profile.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#user_table').DataTable();
        });
    </script>
</head>

<body>
    <!-- Edit Modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold" id="editModalLabel">Edit User</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="  " method="POST">
                    <div class="modal-body row g-3">
                        <input type="hidden" name="snoEdit" id="snoEdit">
                        <div class="col-md-6">
                            <label for="fnameEdit" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="fnameEdit" name="fnameEdit">
                        </div>
                        <div class="col-md-6">
                            <label for="lnameEdit" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="lnameEdit" name="lnameEdit">
                        </div>
                        <div class="col-md-6">
                            <label for="emailEdit" class="form-label">Email</label>
                            <input type="email" class="form-control" id="emailEdit" name="emailEdit">
                        </div>
                        <div class="col-md-6">
                            <label for="phoneEdit" class="form-label">Phone</label>
                            <input type="text" class="form-control" id="phoneEdit" name="phoneEdit">
                        </div>
                        <div class="col-12">
                            <label for="addressEdit" class="form-label">Street Address</label>
                            <input type="text" class="form-control" id="addressEdit" name="addressEdit">
                        </div>
                        <div class="col-md-6">
                            <label for="cityEdit" class="form-label">City</label>
                            <input type="text" class="form-control" id="cityEdit" name="cityEdit">
                        </div>
                        <div class="col-md-6">
                            <label for="provinceEdit" class="form-label">Province</label>
                            <select id="provinceEdit" class="form-select" name="provinceEdit">
                                <option>Alberta</option>
                                <option>British Columbia</option>
                                <option>Manitoba</option>
                                <option>New Brunswick</option>
                                <option>New Foundland and Labrador</option>
                                <option>Northwest Territories</option>
                                <option>Nova Scotia</option>
                                <option>Nunavut</option>
                                <option>Ontario</option>
                                <option>Prince Edward Island</option>
                                <option>Quebec</option>
                                <option>Saskatchewan</option>
                                <option>Yukon Territory</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="postalcodeEdit" class="form-label">Postal Code</label>
                            <input type="text" class="form-control" id="postalcodeEdit" name="postalcodeEdit">
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

    <div id="wrapper" style="height:100vh" class="d-flex">
        <!-- SideBar -->
        <?php include "./sidebar.php" ?>
        <!-- PageContent -->
        <div id="content" class="container-fluid">
            <div class="container-fluid d-flex align-items-center">
                <button type="button" id="sideBarCollapse" class="btn btn-secondary me-3"><i class="fa-solid fa-bars"></i></button>
                <h1 class="fw-bold">Users</h1>
            </div>
            <div class="container">
                <table class="table table-striped" id="user_table">
                    <thead>
                        <tr>
                            <th scope="col">S. No.</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Address</th>
                            <th scope="col">City</th>
                            <th scope="col">Province</th>
                            <th scope="col">Postal Code</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Sourav</td>
                            <td>Choudhary</td>
                            <td>sourav@gmail.com</td>
                            <td>6478999999</td>
                            <td>32 Halsey Avenue</td>
                            <td>Toronto</td>
                            <td>Ontario</td>
                            <td>M3B2W6</td>
                            <td class="d-flex">
                                <button type="button" class="btn btn-primary edit me-2" title="Edit">Edit</button>
                                <button type="submit" class="btn btn-danger" title="Delete">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Rohit</td>
                            <td>Sharma</td>
                            <td>rohit@gmail.com</td>
                            <td>6478999999</td>
                            <td>32 Shady Glen Avenue</td>
                            <td>Toronto</td>
                            <td>Ontario</td>
                            <td>M3B2N5</td>
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
<script>
    // Toggling the sidebar menu
    $(document).ready(function() {
        $("#sideBarCollapse").on("click", function() {
            $("#sidebar").toggleClass("active");
        });
    });

    var editModal = new bootstrap.Modal(document.getElementById('editModal'))

    edits = document.getElementsByClassName('edit');
    Array.from(edits).forEach((element) => {
        element.addEventListener('click', (e) => {
            tr = e.target.parentNode.parentNode;
            fname = tr.getElementsByTagName('td')[0].innerText;
            lname = tr.getElementsByTagName('td')[1].innerText;
            email = tr.getElementsByTagName('td')[2].innerText;
            phone = tr.getElementsByTagName('td')[3].innerText;
            address = tr.getElementsByTagName('td')[4].innerText;
            city = tr.getElementsByTagName('td')[5].innerText;
            province = tr.getElementsByTagName('td')[6].innerText;
            postalcode = tr.getElementsByTagName('td')[7].innerText;
            snoEdit.value = e.target.id;
            fnameEdit.value = fname;
            lnameEdit.value = lname;
            emailEdit.value = email;
            phoneEdit.value = phone;
            addressEdit.value = address;
            cityEdit.value = city;
            provinceEdit.value = province;
            postalcodeEdit.value = postalcode;
            // Toggle the Modal
            editModal.toggle()
        })
    })
</script>

</html>