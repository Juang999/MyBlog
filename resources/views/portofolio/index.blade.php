@extends('layouts.app')

@section('title', 'My Portofolio | Bangkit Juang Raharjo')

@section('css')
<link rel="stylesheet" href="css/index-portofolio.css">
@endsection

@section('content')
<div class="container-lg mt-4">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item picture-portofolio active">
                <img src="/img/744687.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item picture-portofolio">
                <img src="/img/744704.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item picture-portofolio">
                <img src="/img/744703.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<div class="container text-white d-flex flex-column align-items-center mt-4 opening">
    <h1>My Creation</h1>
    <hr class="border border-danger border-3 opacity-100 mx-auto underscore">
    <p class="text-center">this is my creation and will add more over time.</p>
</div>

<div class="portofolio" style="background-color: rgba(30,30,30,1);">
    <div class="container d-flex flex-column align-items-center justify-content-lg-evenly flex-lg-wrap card-portofolio">
        <div class="card bg-transparent border border-danger border-3" style="width: 18rem;">
            <img src="/img/744703.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex align-items-center text-white">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-outline-danger">See more...</a>
                </div>
            </div>
        </div>

        <div class="card bg-transparent border border-danger border-3" style="width: 18rem;">
            <img src="/img/744703.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex align-items-center text-white">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-outline-danger">See more...</a>
                </div>
            </div>
        </div>

        <div class="card bg-transparent border border-danger border-3" style="width: 18rem;">
            <img src="/img/744703.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex align-items-center text-white">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-outline-danger">See more...</a>
                </div>
            </div>
        </div>

        <div class="card bg-transparent border border-danger border-3" style="width: 18rem;">
            <img src="/img/744703.jpg" class="card-img-top" alt="...">
            <div class="card-body d-flex align-items-center text-white">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk
                        of the
                        card's
                        content.</p>
                    <a href="#" class="btn btn-outline-danger">See more...</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
