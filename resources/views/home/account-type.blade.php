<!DOCTYPE html>
<html lang="en">

@include('home.layout.head')

<body>

@include('home.layout.nav')


    <div class="account-type">
        <div class="container">
            <h3 class="text-blug">Welcome to our app! Please select the user type that fits your needs:</h3>
            <p>
                Advertisers: Upload and schedule your social media posts.
                
            </p>
            <p>
                Publishers: Interact with advertiser's posts and earn crypto
            </p>
            <div class="d-flex justify-content-center">
                <a href="/register" >
                    <div class="account-items">

                        <img src="assets/img/icon/advertiser.png" alt="" class="img-fluid account-type-img">
                        <h2 class="account-type-text">Advertiser</h2>
                    </div>
                </a>
                <a href="/register" >
                    <div class="account-items">
                        <img src="assets/img/icon/publisher.png" alt="" class="img-fluid account-type-img">
                        <h2 class="account-type-text">Publisher</h2>
                    </div>
                </a>
            </div>
        </div>
           
    </div>

    @include('home.layout.footer')

</body>

</html>