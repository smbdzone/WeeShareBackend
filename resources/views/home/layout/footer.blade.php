<footer class="spacer">
    <div class="container">
      <div class="row">
        <div class="col-md-2">
          <img src="assets/img/WeeShare-Logo-02.png" alt="" class="img-fluid footer-logo">
        </div>
        <div class="col-md-2">
          <h3 class="footer-h">GO TO</h3>
          <ul class="footer-unstyle-list">
            <li><a href="#" class="footer-link">About WeeShare</a></li>
            <li><a href="#" class="footer-link">How It Works</a></li>
            <li><a href="#" class="footer-link">White Papper</a></li>
            <li><a href="#" class="footer-link">Advertise with us </a></li>
          </ul>
        </div>

        <div class="col-md-2">
          <h3 class="footer-h">Quick Links</h3>
          <ul class="footer-unstyle-list">
            <li><a href="{{ url('term_conduction') }}" class="footer-link">Terms & Conditions</a></li>
            <li><a href="{{ url('privacy_policy') }}" class="footer-link">Privacy Policy</a></li>
            <li><a href="{{ url('cookies_policy') }}" class="footer-link">Cookies Policy</a></li>
            <li><a href="{{ url('disclaimer') }}" class="footer-link">Disclaimer</a></li>
          </ul>
        </div>

        <div class="col-md-2">
          <h3 class="footer-h">Contact Us</h3>
          <ul class="footer-unstyle-list">
            <li><a href="tel:+971 55 919 9661" class="footer-link">+971 55 919 9661</a></li>
            <li><a href="mailto:info@weeshare.co" class="footer-link">info@weeshare.co</a></li>
            <li><a href="#" class="footer-link"><address>Old Town Island, Burj Khalifa District, Dubai, UAE</address></a></li>
          </ul>
        </div>

        <div class="col-md-4">
          <h3 class="footer-h">Subscribe to our latest news</h3>
         <form action="">
          <input type="email" name="email"  class="custom-form-control" placeholder="Enter you Email"> 
          <input type="submit" value="Submit" class="btn btn-login">
         </form>
         <div class="row mt-3">
          <div class="col-6">
            <div class="footer-item">
              <div class="row">
                <div class="col-3 mt-2">
                  <i class="fa-brands fa-google-play"></i>
                </div>
                <div class="col-9">
                  <h6 class="footer-text" >Get it on
                    </h6>
                  <p class="text-blug">Play Store</p>
                </div>
              </div>
              
              
            </div>
          </div>
          <div class="col-6">
            <div class="footer-item">
              <div class="row">
                <div class="col-3 mt-2">
                  <i class="fa-brands fa-apple"></i>
                </div>
                <div class="col-9">
                  <h6 class="footer-text" >Get it on
                    </h6>
                  <p class="text-blug">App Store</p>
                </div>
              </div>
              
              
            </div>
          </div>
         </div>
        </div>
      </div>
    </div>
  </footer>

  
  <script src="{{ asset('assets/js/jquery.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

  <script src="{{ asset('assets/lib/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
  <script type="text/javascript">
 
 $(function() {
       
     /*------------------------------------------
     --------------------------------------------
     Submit Event
     --------------------------------------------
     --------------------------------------------*/
     $(document).on("submit", "#handleAjax", function() {
         var e = this;
       
         $(this).find("[type='submit']").html("Login...");
       
         $.ajax({
             url: $(this).attr('action'),
             data: $(this).serialize(),
             type: "POST",
             dataType: 'json',
             success: function (data) {
                console.log(data)
               $(e).find("[type='submit']").html("Login");
 
               if (data.status) {
                console.log(data)
                  window.location = data.redirect;
               }else{
                   $("#errors-list").html('')
                   $.each(data.errors, function (key, val) {           
                       $("#errors-list").append(
                        "<p class='text-danger text-center'>"+ val +"</p>"
                        );
                   });
               }
              
             }
         });
 
         return false;
     });
 
   });
 
</script>