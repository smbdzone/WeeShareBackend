<!DOCTYPE html>
<html lang="en">

@include('home.layout.head')

<body>

@include('home.layout.nav')
    <img src="{{ asset('assets/img/atom.png') }}" alt="" class="banner-img">


    <div class="spacer">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="email-verify">
                        <h6>A verfication email has been send to you</h6>
                        <p> A fresh verification link has been sent to your email address </p>
                        <p>Before proceeding, please check your email for a verification link</p>
                        <a href="/" class="btn btn-login"> Go to Home page</a>
                    </div>
                </div>

                <div class="col-md-3 mt-5">
                    <img src=" {{ asset('assets/img/mail.png') }}" alt="" class="img-fluid mt-5">
                </div>
            </div>
        </div>
    </div>
 




    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <script src="assets/lib/aos/aos.js"></script>
    <script src="assets/js/main.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>