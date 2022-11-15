@extends('layouts.sidebar')
@section('title','Pets')

@section('head')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">
    <script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready(function() {
            $('#pets_table').DataTable();
        });
    </script>
@endsection

@section('content')
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
                            <span class="text-danger fst-italic d-none">Please enter valid pet name</span>
                        </div>
                        <div class="col-md-12">
                            <label for="ageEdit" class="form-label">Age</label>
                            <select id="ageEdit" class="form-select" name="ageEdit">
                                <option value="Baby">Baby</option>
                                <option value="Young">Young</option>
                                <option value="Adult">Adult</option>
                                <option value="Senior">Senior</option>
                            </select>
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
                        <div class="col-md-12">
                            <p class="form-label">Characteristic</p>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Cute" name="characteristic[]" value="Cute">
                                <label class="form-check-label" for="Cute">Cute</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Loyal" name="characteristic[]" value="Loyal">
                                <label class="form-check-label" for="Loyal">Loyal</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Friendly" name="characteristic[]" value="Friendly">
                                <label class="form-check-label" for="Friendly">Friendly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Playful" name="characteristic[]" value="Playful">
                                <label class="form-check-label" for="Playful">Playful</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Intelligent" name="characteristic[]" value="Intelligent">
                                <label class="form-check-label" for="Intelligent">Intelligent</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Happy" name="characteristic[]" value="Happy">
                                <label class="form-check-label" for="Happy">Happy</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Affectionate" name="characteristic[]" value="Affectionate">
                                <label class="form-check-label" for="Affectionate">Affectionate</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Courageous" name="characteristic[]" value="Courageous">
                                <label class="form-check-label" for="Courageous">Courageous</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="Aggressive" name="characteristic[]" value="Courageous">
                                <label class="form-check-label" for="Aggressive">Aggressive</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <label for="animalTypeEdit" class="form-label">Animal Type</label>
                            <select id="animalTypeEdit" class="form-select" name="animalTypeEdit">
                                <option value="Dog">Dog</option>
                                <option value="Cat">Cat</option>
                                <option value="Rabbit">Rabbit</option>
                                <option value="Bird">Bird</option>
                                <option value="Fish">Fish</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label for="coatEdit" class="form-label">Coat Length</label>
                            <select id="coatEdit" class="form-select" name="coatEdit">
                                <option value="Hairless">Hairless</option>
                                <option value="Short">Short</option>
                                <option value="Medium">Medium</option>
                                <option value="Full">Full</option>
                            </select>
                        </div>
                        <div class="col-md-12">
                            <label for="colorEdit" class="form-label">Color</label>
                            <input type="text" class="form-control" id="colorEdit" name="colorEdit">
                            <span class="text-danger fst-italic d-none">Please enter valid color</span>
                        </div>
                        <div class="col-md-12">
                            <label for="descriptionEdit" class="form-label">Description</label>
                            <textarea class="form-control" style="resize: none;" placeholder="Leave a description here" id="descriptionEdit" col="10" rows="3"></textarea>
                            <span class="text-danger fst-italic d-none">Please enter valid description</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="update-btn">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

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
                        <th scope="col">Age</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Animal Type</th>
                        <th scope="col">Coat Length</th>
                        <th scope="col">Color</th>
                        <th scope="col">Characteristic</th>
                        <th scope="col">Description</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Milo</td>
                        <td>Young</td>
                        <td>Male</td>
                        <td>Dog</td>
                        <td>Short</td>
                        <td>Golden</td>
                        <td>Friendly, Loyal, Playful</td>
                        <td>Friendly</td>
                        <td class="d-flex">
                            <button type="button" class="btn btn-primary edit me-2" title="Edit">Edit</button>
                            <button type="submit" class="btn btn-danger" title="Delete">Delete</button>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Duke</td>
                        <td>Senior</td>
                        <td>Male</td>
                        <td>Dog</td>
                        <td>Medium</td>
                        <td>Black</td>
                        <td>Loyal, Cute, Affectionate, Happy</td>
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
@endsection
@section('js')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="{{asset('/js/validation.js')}}"></script>
    <script src="{{asset('/js/pets.js')}}"></script>
@endsection