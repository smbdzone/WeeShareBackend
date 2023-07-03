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
                        <form method="POST" action="{{ route('fist-step.update') }}">
                            @csrf
                            <h3>Create Account</h3>
                  
                            <input type="hidden" name="user_id" value=" {{ auth()->id()}}">

                                <div class="custom-input-group">
                                    <input type="text" name="company" class="form-control custom-form-control   @error('company') is-invalid @enderror" placeholder="Full name or Company Name">
                                </div>
                                @error('company')
                                     <p class="error-text">{{ $message }}</p>
                                @enderror
           
                            
                        
                            <div class="custom-input-group">
                                <select name="industry" id="industry" class="form-control custom-form-control @error('industry') is-invalid @enderror">
                                    <option value=""> industries</option>
                                    <option value="industry"> industries</option>
                                    <option value="industry"> industries</option>
                                    <option value="industry"> industries</option>
                                    <option value="other"> other</option>
                                </select>
                            </div>
                            @error('industry')
                                     <p class="error-text">{{ $message }}</p>
                            @enderror

                            <div class=" mb-3 custom-input-group" id="other_industries" style="display: none;">
                                <input type="text" name="other_company" class="form-control custom-form-control " placeholder="Other Industries">
                            </div>

                            <div class="custom-input-group">
                                <select name="country" id="" class="form-control custom-form-control @error('country') is-invalid @enderror">
                                    <option value=""> Country </option>
                                    <option value=""> Country 1</option>
                                    <option value=""> Country 2</option>
                                    <option value=""> Country 3</option>
                                    <option value=""> Country 4</option>
                                </select>
                            </div>
                            @error('country')
                                <p class="error-text">{{ $message }}</p>
                            @enderror

                            <div class="custom-input-group">
                                <select name="city" id="" class="form-control custom-form-control @error('city') is-invalid @enderror">
                                    <option value=""> City </option>
                                    <option value=""> City 1</option>
                                    <option value=""> City 2</option>
                                    <option value=""> City 3</option>
                                    <option value=""> City 4</option>
                                </select>
                            </div>
                            @error('city')
                                <p class="error-text">{{ $message }}</p>
                            @enderror

                            <div class=" mb-3 custom-input-group">
                                <input type="text" name="tax_number" class="form-control custom-form-control" placeholder="Tax Number (if any)">
                            </div>

                            <div class="d-grid gap-2 custom-input-group">
                                <input type="submit" name="submit" class="btn btn-login btn-block" value="Nexet">

                            </div>




                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="container">
                        <img src="assets/img/logo.png" alt="" class="img-fluid register-logo">
                        <img src="assets/img/atom.png" alt="" class="img-fluid register-img">
                    </div>

                </div>
            </div>
        </div>

    </div>

    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/lib/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>