@extends('layouts.sidebar')
@section('title','Favourites')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/favourites.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
@endsection

@section('content')
    <div id="content" class="container-fluid">
        <div class="container-fluid d-flex align-items-center">
            <button type="button" id="sideBarCollapse" class="btn btn-secondary me-3"><i class="fa-solid fa-bars"></i></button>
            <h1 class="fw-bold">Favourites</h1>
        </div>
        <div class="container d-flex">
            <div class="favourite-pet-card">
                <a href="" class="nav-link">
                    <div class="favourite-pet-image">
                        <img src="./images/featured_1.jpg" width="230px" alt="">
                        <i id="1" class="fa-solid fa-heart favourite-icon"></i>
                    </div>
                    <div class="favourite-pet-content">
                        <h3 class="text-center fw-bold">Duke</h3>
                        <p class="text-center m-0">Male</p>
                        <p class="text-center m-0">Toronto</p>
                    </div>
                </a>
            </div>
            <div class="favourite-pet-card">
                <a href="" class="nav-link">
                    <div class="favourite-pet-image">
                        <img src="./images/featured_1.jpg" width="230px" alt="">
                        <i id="2" class="fa-solid fa-heart favourite-icon"></i>
                    </div>
                    <div class="favourite-pet-content">
                        <h3 class="text-center fw-bold">Duke</h3>
                        <p class="text-center m-0">Male</p>
                        <p class="text-center m-0">Toronto</p>
                    </div>
                </a>
            </div>
            <div class="favourite-pet-card">
                <a href="" class="nav-link">
                    <div class="favourite-pet-image">
                        <img src="./images/featured_1.jpg" width="230px" alt="">
                        <i id="3" class="fa-solid fa-heart favourite-icon"></i>
                    </div>
                    <div class="favourite-pet-content">
                        <h3 class="text-center fw-bold">Duke</h3>
                        <p class="text-center m-0">Male</p>
                        <p class="text-center m-0">Toronto</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('/js/favourites.js')}}"></script>
@endsection