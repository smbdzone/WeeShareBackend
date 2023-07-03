<!DOCTYPE html>
<html lang="en">

@include('home.layout.head')

<body>
    @include('home.layout.nav')
    <div class="register">
        <div class="row">
            <div class="col-md-6">
                <div class="register-form">
                    <h3>Reset Password</h3>

                    <div class="card-body">
                        @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="mb-3 custom-input-group">
                                <input id="email" type="email" class="form-control custom-form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                            </div>
                             @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            <div class="d-grid gap-2 custom-input-group">
                                <button type="submit" class="btn btn-login btn-block">
                                    {{ __('Reset Password') }}
                                </button>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>