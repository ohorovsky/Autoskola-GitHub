

$( window ).on( "load", function() { 
    $('body').addClass('fade-in');
    $('.jumboText').addClass('fade-up');

});


$(document).ready(function(){
   
//    $('body').addClass('fade-in');
//    $('.jumboText').addClass('fade-up');
//    $('#myModal').modal(options);
    $('.menuBtn').click(function(){
        $('.menu').toggleClass("showMenu");
        $('.menuBtn').toggleClass("open");
        
    });
    
    $('.menuItems a').click(function(){
        $('.menu').toggleClass("showMenu");
        $('.menuBtn').toggleClass("open");
    })
    
    //Menu hiding behaviour

var didScroll;
    // on scroll, let the interval function know the user has scrolled
    $(window).scroll(function(event){
      didScroll = true;
    });
        // run hasScrolled() and reset didScroll status
    setInterval(function() {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 250);
    function hasScrolled() {
        // do stuff here...

        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop){
            // Scroll Down
            $('nav').addClass('nav-up');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('nav').removeClass('nav-up').addClass('nav-down');
                $('nav a').addClass('links-down');
            }

        }
        if($(window).scrollTop() == 0) {

                $('nav').removeClass('nav-down');
                $('nav a').removeClass('links-down');

            }

        lastScrollTop = st;
    };

    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $("nav").outerHeight();


    
    
    
    $("a").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;
        //Select animation
        var animation = 'easeOutCubic';
      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 1500, animation, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
    
    
    
    
})