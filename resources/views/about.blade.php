@extends('layouts.app')

@section('title', 'ProgrammerRaincity - About Me')

@section('css')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
<link rel="stylesheet" href="css/about.css">
@endsection

@section('content')
<div class="mt-4 container bg-primary">
    <div class="description">
        <img src="img/portofolio1.png" class="my-photo">
        <div class="about-me w-75 h-auto d-flex align-items-center">
            <div class="bg-dark">
                <h3 class="name text-danger">
                    Bangkit Juang Raharjo
                </h3>
                <h1 class="text-white" style="font-family: Montserrat;">Backend Developer</h1>
                <p class="mt-5 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab beatae fugiat qui
                    modi praesentium possimus impedit, deleniti quisquam consectetur totam vel voluptate tenetur illo
                    porro ratione expedita magnam inventore est rerum assumenda ipsa consequuntur placeat ducimus? Odio,
                    tempora. Praesentium magni earum dolores dicta culpa voluptatem ex corporis quas explicabo eveniet
                    error blanditiis quae nulla voluptatum laboriosam corrupti recusandae labore aliquam, impedit,
                    architecto voluptates! Architecto impedit obcaecati illum, aliquid nobis error.</p>
                <a href="#" class="mt-5 btn btn-danger">About Me!</a>
            </div>
        </div>
    </div>
    <div class="portofolio mt-5 d-flex justify-content-evenly">
        <div class="card bg-dark text-white" style="width: 18rem; height: 19rem;">
            <div class="card-body d-flex align-items-center">
                <div>
                    <i class="bi bi-code-slash code"></i>
                    <h5 class="card-title"></h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="card bg-dark text-white" style="width: 18rem; height: 19rem;">
            <div class="card-body d-flex align-items-center">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
        <div class="card bg-dark text-white" style="width: 18rem; height: 19rem;">
            <div class="card-body d-flex align-items-center">
                <div>
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's
                        content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
