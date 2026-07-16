<!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('layout/lib/wow/wow.min.js')}}"></script>
    <script src="{{asset('layout/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('layout/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{asset('layout/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('layout/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{asset('layout/lib/parallax/parallax.min.js')}}"></script>
    <script src="{{asset('layout/lib/isotope/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('layout/lib/lightbox/js/lightbox.min.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('layout/js/main.js')}}"></script>

    
    <script>
        $(document).ready(function(){
          $(".owl-carousel").owlCarousel();
        });

        $('.owl-carousel').owlCarousel({
              autoplay:true,
              loop:true,
              margin:10,
              nav:false,
              dots:false,
              responsive:{
                  0:{
                      items:1
                  },
                  600:{
                      items:1
                  },
                  1000:{
                      items:1
                  }
              }
          })
    </script>