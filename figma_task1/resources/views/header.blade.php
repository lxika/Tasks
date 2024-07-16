<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/image/logo.svg') }}" alt="Logo" width="162.31px" height="30px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link nav-text" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Resources
                        <img src="{{ asset('assets/image/nav-dropdown.svg') }}" alt="dropdown" width="10px" height="6px" id="navbarDropdown1" role="button">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown1">
                        <li><a class="dropdown-item" href="#">Action 1</a></li>
                        <li><a class="dropdown-item" href="#">Action 2</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Success stories</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link nav-text" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        Company
                        <img src="{{ asset('assets/image/nav-dropdown.svg') }}" alt="dropdown" width="10px" height="6px" id="navbarDropdown2" role="button">
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="#">Action 1</a></li>
                        <li><a class="dropdown-item" href="#">Action 2</a></li>
                    </ul>
                </li>
                <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
                <li class="nav-item">
                    <a class="btn btn-login ms-lg-3" href="#">Login</a>
                </li>
                <li class="nav-item">
                    <a class="btn btn-create-account ms-lg-3" href="#">Create Free Account</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
