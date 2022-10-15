<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        Find a Pet
    </title>
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/index.css">
    <link rel="stylesheet" href="./css/Filter_pet.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="./css/home.css">


</head>
<body>
<?php include "./Header_top.php" ?>



<div class="filter-container sticky-top row g-0 p-3 ">
<div class="col-md">
    <div class="form-floating">
    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option value="dog" selected>Dog</option>
        <option value="cat">Cat</option>
        <option value="Cow">Cow</option>
      </select>
      <label for="floatingSelectGrid">Pet</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option value="any" selected>Any</option>
        <option value="male">Male</option>
        <option value="female">Female</option>
      </select>
      <label for="floatingSelectGrid">Gender</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected value="any">Any</option>
        <option value="1">0-1</option>
        <option value="2">1-5</option>
        <option value="3">5-10</option>
        <option value="3">+10</option>
      </select>
      <label for="floatingSelectGrid">Age</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected value="any">Any</option>
        <option value="1">Akita</option>
        <option value="2">Alaskan Malamute</option>
        <option value="3">American Bulldog</option>
        <option value="3">Airedale Terrier</option>
      </select>
      <label for="floatingSelectGrid">Breed</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected value="any">Any</option>
        <option value="1">Hairless</option>
        <option value="2">Low</option>
        <option value="3">Medium</option>
        <option value="3">Long</option>
      </select>
      <label for="floatingSelectGrid">Hair Length</label>
    </div>
  </div>
  <div class="col-md">
    <div class="form-floating">
      <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example">
        <option selected value="any">Any</option>
        <option value="1">Toronto</option>
        <option value="2">Montreal</option>
        <option value="3">Calgary</option>
        <option value="3">Ottawa</option>
      </select>
      <label for="floatingSelectGrid">City</label>
    </div>
  </div>
</div>




<div class="container cards-container mt-3 ">
<section class="container d-flex flex-column align-items-center justify-content-center ">
  


  <div class="card mb-3 mt-3">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="./images/featured_1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Garu</h5>
        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
        <div class="d-flex justify-content-between">
          <small class=" text-muted">Female</small>
          <small class=" text-muted">Golden</small>
        </div>

        <div class="d-flex justify-content-between">
        <div lass="card-text"><small class="text-muted">3 years</small></div>
        <div lass="card-text"><small class="text-muted">Medium hair</small></div>

        </div>

        <div lass="card-text"><small class="text-muted">Toronto</small></div>
      </div>
    </div>
    <div class="col-md-3 d-flex flex-column align-items-center justify-content-center ">
    <button type="button" class="btn btn-primary mb-4 col-sm-9 ">Profile</button>
    <button type="button" class="btn btn-primary col-sm-9 mb-2">Contact</button>
    </div>
  </div>
</div>

  <div class="card mb-3 mt-3">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="./images/featured_1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Garu</h5>
        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
        <div class="d-flex justify-content-between">
          <small class=" text-muted">Female</small>
          <small class=" text-muted">Golden</small>
        </div>

        <div class="d-flex justify-content-between">
        <div lass="card-text"><small class="text-muted">3 years</small></div>
        <div lass="card-text"><small class="text-muted">Medium hair</small></div>

        </div>

        <div lass="card-text"><small class="text-muted">Toronto</small></div>
      </div>
    </div>
    <div class="col-md-3 d-flex flex-column align-items-center justify-content-center ">
    <button type="button" class="btn btn-primary mb-4 col-sm-9 ">Profile</button>
    <button type="button" class="btn btn-primary col-sm-9 ">Contact</button>
    </div>
  </div>
</div>

  <div class="card mb-3 mt-3">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="./images/featured_1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Garu</h5>
        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
        <div class="d-flex justify-content-between">
          <small class=" text-muted">Female</small>
          <small class=" text-muted">Golden</small>
        </div>

        <div class="d-flex justify-content-between">
        <div lass="card-text"><small class="text-muted">3 years</small></div>
        <div lass="card-text"><small class="text-muted">Medium hair</small></div>

        </div>

        <div lass="card-text"><small class="text-muted">Toronto</small></div>
      </div>
    </div>
    <div class="col-md-3 d-flex flex-column align-items-center justify-content-center ">
    <button type="button" class="btn btn-primary mb-4 col-sm-9 ">Profile</button>
    <button type="button" class="btn btn-primary col-sm-9 ">Contact</button>
    </div>
  </div>
</div>

  <div class="card mb-3 mt-3">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="./images/featured_1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Garu</h5>
        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
        <div class="d-flex justify-content-between">
          <small class=" text-muted">Female</small>
          <small class=" text-muted">Golden</small>
        </div>

        <div class="d-flex justify-content-between">
        <div lass="card-text"><small class="text-muted">3 years</small></div>
        <div lass="card-text"><small class="text-muted">Medium hair</small></div>

        </div>

        <div lass="card-text"><small class="text-muted">Toronto</small></div>
      </div>
    </div>
    <div class="col-md-3 d-flex flex-column align-items-center justify-content-center ">
    <button type="button" class="btn btn-primary mb-4 col-sm-9 ">Profile</button>
    <button type="button" class="btn btn-primary col-sm-9 ">Contact</button>
    </div>
  </div>
</div>

  <div class="card mb-3 mt-3">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="./images/featured_1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Garu</h5>
        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
        <div class="d-flex justify-content-between">
          <small class=" text-muted">Female</small>
          <small class=" text-muted">Golden</small>
        </div>

        <div class="d-flex justify-content-between">
        <div lass="card-text"><small class="text-muted">3 years</small></div>
        <div lass="card-text"><small class="text-muted">Medium hair</small></div>

        </div>

        <div lass="card-text"><small class="text-muted">Toronto</small></div>
      </div>
    </div>
    <div class="col-md-3 d-flex flex-column align-items-center justify-content-center ">
    <button type="button" class="btn btn-primary mb-4 col-sm-9 ">Profile</button>
    <button type="button" class="btn btn-primary col-sm-9 ">Contact</button>
    </div>
  </div>
</div>

  <div class="card mb-3 mt-3">
  <div class="row no-gutters">
    <div class="col-md-3">
      <img src="./images/featured_1.jpg" class="card-img" alt="...">
    </div>
    <div class="col-md-6">
      <div class="card-body">
        <h5 class="card-title">Garu</h5>
        <p class="card-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. </p>
        <div class="d-flex justify-content-between">
          <small class=" text-muted">Female</small>
          <small class=" text-muted">Golden</small>
        </div>

        <div class="d-flex justify-content-between">
        <div lass="card-text"><small class="text-muted">3 years</small></div>
        <div lass="card-text"><small class="text-muted">Medium hair</small></div>

        </div>

        <div lass="card-text"><small class="text-muted">Toronto</small></div>
      </div>
    </div>
    <div class="col-md-3 d-flex flex-column align-items-center justify-content-center ">
    <button type="button" class="btn btn-primary mb-4 col-sm-9 ">Profile</button>
    <button type="button" class="btn btn-primary col-sm-9 ">Contact</button>
    </div>
  </div>
</div>






    </section>
    </div>
</body>
</html>