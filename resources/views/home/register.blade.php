<!DOCTYPE html>
<html lang="en">

@include('home.layout.head')

<body>

    @include('home.layout.nav')

    <div class="register">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="register-form">
                        <form action=" {{ route('register') }} " method="post">
                            @csrf
                            <h3>Create Account</h3>
                            <div class="input-group mb-3 custom-input-group">
                                <input type="text" name="name" class="form-control custom-form-control @error('name') is-invalid @enderror" placeholder="Full name" required autocomplete="name" autofocus>
                                <span class="input-group-text" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3 custom-input-group">
                                <input type="email" id="email" type="email" class="form-control custom-form-control @error('email') is-invalid @enderror" placeholder="Email" required autocomplete="email">
                                <span class="input-group-text" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3 custom-input-group">
                                <input type="password" id="password" type="password" class="form-control custom-form-control @error('password') is-invalid @enderror " placeholder="Password" required autocomplete="new-password">
                                <span class="input-group-text" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3 custom-input-group">
                                <input type="password" id="password-confirm" class="form-control custom-form-control" placeholder="Retype Password" required autocomplete="new-password">
                                <span class="input-group-text" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>
                            </div>

                            <div class="d-grid gap-2 custom-input-group">
                                <input type="submit" name="submit" class="btn btn-login btn-block" value="Create">

                            </div>




                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <img src="assets/img/reg-bo-1.png" alt="" class="img-fluid mt-5">
                </div>
            </div>
        </div>

    </div>

    @include('home.layout.footer')

</body>

</html>