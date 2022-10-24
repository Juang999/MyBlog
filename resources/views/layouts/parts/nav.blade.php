<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark text-white">
        <div class="container-fluid">
            <a class="navbar-brand text-danger fs-6" href="/" style="font-family: 'Monoton';">Bangkit Juang Raharjo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item me-5">
                        <a class="nav-link {{ ($active == 'root') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item me-5">
                        <a class="nav-link {{ ($active == 'portofolio') ? 'active' : '' }}" href="/portofolio">Portofolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ ($active == 'blog') ? 'active' : '' }}" href="/about">Blog</a>
                    </li>
                    @if (Auth::user())
                    <li class="nav-item">
                        <a class="nav-link" href="/about">Back To Dashboard</a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
</div>
</nav>
