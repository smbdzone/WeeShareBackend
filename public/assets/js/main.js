document.addEventListener("DOMContentLoaded", function(){
    window.addEventListener('scroll', function() {
    
  
        if (window.scrollY > 700) {
          $('nav').addClass('fixed-top')
          // add padding top to show content behind navbar
          navbar_height = document.querySelector('nav').offsetHeight;
          document.body.style.paddingTop = navbar_height + 'px';
        } else {
          $('nav').removeClass('fixed-top')
          //document.getElementById('nav').classList.remove('fixed-top');
          // remove padding top from body
          document.body.style.paddingTop = '0';
        } 
    });
  });

$(document).ready(function(){
    $('#industry').change(function(){
        var val = $(this).val();
        if(val =='other'){
            $('#other_industries').show()
        }
        else{
            $('#other_industries').hide()
            
        }
    })

    $('.view-password').click(function(){
          
      var passInput=$(".password");
  
      if(passInput.attr('type')==='password')
          {
          passInput.attr('type','text');
      }else{
          passInput.attr('type','password');
      }
  })


})
