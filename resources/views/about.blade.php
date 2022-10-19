@extends('layouts.app')

@section('title', 'ProgrammerRaincity - About Me')

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@600&family=Montserrat:wght@700&family=Poppins&family=Red+Hat+Display:wght@300&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/about.css">
@endsection

@section('content')
<div class="mt-4 container">
    <div class="main d-flex flex-column flex-lg-row align-items-center">
        <img src="img/portofolio1.png" class="w" style="transform: scaleX(-1);">
        <div class="mt-3 w-75 h-auto d-flex align-items-lg-center">
            <div class="text-center text-lg-start">
                <div>
                    <h3 class="text-danger">
                        Bangkit Juang Raharjo
                    </h3>
                    <h1 class="text-white" style="font-family: Montserrat;">Backend Developer</h1>
                    <p class="mt-5 text-white fs-6">A Junior Web Developer and focus on becoming a Backend Developer. I usually build systems with Laravel also can create system with Expressjs & Go-Lang with learning further.</p>
                    <a href="#" class="mt-5 btn btn-danger">About Me!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-5 d-flex flex-column flex-lg-row align-items-center align-content-center justify-content-lg-evenly">
        <div class="card mb-3 bg-dark text-white" style="width: 18rem; height: 19rem;">
            <div class="card-body d-flex align-items-center">
                <div>
                    <i class="bi bi-code-slash text-danger" style="font-size: 40px"></i>
                    <h4 class="card-title fs-3 fw-bold" style="font-family: Jost;">Backend Developer</h4>
                    <p class="card-text fs-6">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="card-link text-decoration-none text-danger fw-bold" style="font-family: Red Hat Display;">KNOW MORE</a>
                </div>
            </div>
        </div>
        <div class="card mb-3 bg-danger text-white" style="width: 18rem; height: 19rem;">
            <div class="card-body d-flex align-items-center">
                <div>
                    <i class="bi bi-motherboard text-white" style="font-size: 40px"></i>
                    <h4 class="card-title fs-3 fw-bold" style="font-family: Jost">Portofolio</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="card-link text-decoration-none text-white fw-bold" style="font-family: Red Hat Display;">KNOW MORE</a>
                </div>
            </div>
        </div>
        <div class="card mb-3 bg-dark text-white" style="width: 18rem; height: 19rem;">
            <div class="card-body d-flex align-items-center">
                <div>
                    <i class="bi bi-braces-asterisk text-white" style="font-size: 40px"></i>
                    <h4 class="card-title fs-3 fw-bold" style="font-family: Jost">Branding</h4>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="card-link text-decoration-none text-danger fw-bold" style="font-family: Red Hat Display;">KNOW MORE</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
