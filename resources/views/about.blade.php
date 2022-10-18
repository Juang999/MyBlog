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
<div class="mt-4 container">
    <div class="d-flex justify-content-center">
        <div class="col-md-5 d-flex justify-content-center">
            <img src="img/portofolio1.png" class="myPhoto w-75" alt="">
        </div>
        <div class="col-md-7 d-flex align-items-center">
            <div>
                <h3 class="mb-1 name text-danger">Bangkit Juang Raharjo</h3>
                <h1 class="mt-1 mb-1 profession text-light">Backend Developer</h1>
                <p class="mt-1 mb-5 text-light">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique
                    provident blanditiis magnam non numquam, excepturi veniam quis omnis accusamus ex consequatur
                    molestiae voluptates, aperiam, tenetur cupiditate molestias aliquam natus. Necessitatibus aperiam,
                    molestias atque eum, ullam, eos repellat consectetur dolorum nesciunt culpa veritatis cupiditate. Ad
                    veniam iste facilis cumque perferendis magni!</p>
                <a href="#" class="btn btn-danger mt-5">ABOUT ME!</a>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <div class="contoh card-place">

            <div class="grid">
                <div class="card g-col-12" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
                            content.</p>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>
</div>

</div>
@endsection
