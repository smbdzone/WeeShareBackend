<!DOCTYPE html>
<html lang="en">

@include('home.layout.head')

<body>

    @include('home.layout.nav')

    <div class="register">
        <div class="">
            <div class="row">
                <div class="col-md-6">
                    <div class="register-form">
                        <form action=" {{ route('register') }} " method="post">
                            @csrf
                            <h3>Create Account</h3>
                            <div class="custom-input-group">
                                <input type="text" name="name" class="form-control custom-form-control @error('name') is-invalid @enderror" placeholder="Full name" value="{{ old('name') }}">
                                <span class="input-tootip" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>
                            </div>
                            @error('name')
                                 <p class="error-text">{{ $message }}</p>

                            @enderror

                            <div class="mb-3 custom-input-group">
                                <input type="email" id="email" name="email" class="form-control custom-form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                                <span class="input-tootip" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>
                            </div>

                            @error('email')
                                <p class="error-text">{{ $message }}</p>
                            @enderror

                            <div class="input-group mb-3 custom-input-group">
                                <input id="password" type="password" class="form-control password custom-form-control @error('password') is-invalid @enderror" name="password" placeholder="Password">
                                <button class="input-group-text view-password" type="button"><i class="fas fa-eye-slash"></i></button>
                                <span class="input-tootip" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>

                                @error('password')
                                    <p class="error-text">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="input-group mb-3 custom-input-group">
                                <input id="password-confirm " type="password" class="form-control password custom-form-control" name="password_confirmation" placeholder="Re-type password">
                                <button class="input-group-text view-password" type="button"><i class="fas fa-eye-slash"></i></button>
                                <span class="input-tootip" data-bs-toggle="tooltip" title="Tooltip on left"><i class="fa-solid fa-circle-info"></i></span>
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