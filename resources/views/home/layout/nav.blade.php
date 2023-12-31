<nav class="navbar navbar-expand-lg  nav-bar">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="{{ asset('assets/img/logo.png') }}" alt="Weeshare" class="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- End Left Element -->
            <!-- Center Element -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 m-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About Weeshare</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">How It Works</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">White Papper</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#">Road Map </a>
                    </li>
                </ul>
            </div>

            <!-- End Center Element -->
            <!-- Right Element -->
            @auth
                <a class="btn btn-login" href="{{ url('dashboard') }}">Dashboard</a>
            @else
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <div class="nav-item dropdown">
                        <a class="nav-link  btn-login" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Login
                        </a>
                        <div class="dropdown-menu login-dropdown " aria-labelledby="navbarDropdown">
                            <div class="login-arar">
                                <div id="errors-list">

                                </div>
                               
                                <!-- <p class="text-danger text-center">(Please check your email and verify!)</p> -->
                                <h3 class="text-blug text-center mt-3">Login to Continue</h3>
                                <form method="POST" action="{{ route('login') }}"  >
                                    @csrf
                                    <div class="mb-3">
                                        <input type="email" name="email"  class="form-control custom-form-control @error('email') is-invalid @enderror"
                                            placeholder="Enter you Email"   autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <input type="password" name="password"   class="form-control custom-form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter you Password"  autocomplete="off">
                                    </div>
                                    <div class="d-grid gap-2 custom-input-group">
                                        <button type="submit" name="login" class="btn btn-login btn-block" > Login</button>
                                    </div>

                                </form>
                                <div class="text-center mt-3">
                                    <a href="{{ route('password.request') }}" class="nav-link">Forget Password</a>
                                </div>

                                <div class="boroder-dash"></div>

                                <div class="login-register-btn">
                                    <p>New Hear</p>
                                    <a href="/account_type" class="btn btn-login"> Register</a>

                                </div>
                                <div class="socail-icon">
                                    <ul class="list-unstyled d-flex justify-content-center">
                                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                        <li><a href="#"><i class="fab fa-pinterest-square"></i></a></li>
                                        <li><a href="#"><i class="fab fa-tiktok"></i></a></li>
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endauth
            <!-- End Right Element -->
        </div>
    </nav>