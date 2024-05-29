<header>
    <div class="container">
        <div class="column">
            <div class="row">
                <nav class="navbar navbar-dark bg-primary fixed-top">
                    <div class="container-fluid">
                        <a class="navbar-brand" href="{{ route('welcome') }}">Blog</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="offcanvas offcanvas-end text-bg-primary" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Blog</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body">
                                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('about') }}">Nosotros</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{ route('contact') }}">Contacto</a>
                                    </li>
                                </ul>
                                <form class="d-flex mt-3" role="search">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>