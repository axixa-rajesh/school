 </div>
 </section>

 <!-- end service section -->

 <!-- info section -->

 <section class="info_section ">
     <div class="info_container layout_padding2">
         <div class="container">
             <div class="info_logo">
                 <a class="navbar-brand" href="index.html"> Tro<span>Weld</span> </a>
             </div>
             <div class="info_main">
                 <div class="row">
                     <div class="col-md-3 col-lg-2">
                         <div class="info_link-box">
                             <h5>
                                 Useful Link
                             </h5>
                             <ul>
                                 <li class=" active">
                                     <a class="" href="index.html">Home <span class="sr-only">(current)</span></a>
                                 </li>
                                 <li class="">
                                     <a class="" href="about.html">About </a>
                                 </li>
                                 <li class="">
                                     <a class="" href="service.html">Services </a>
                                 </li>
                                 <li class="">
                                     <a class="" href="portfolio.html"> Portfolio </a>
                                 </li>
                                 <li class="">
                                     <a class="" href="contact.html"> Contact </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                     <div class="col-md-3 ">
                         <h5>
                             Welding
                         </h5>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur
                             adipiscinaliquaLoreadipiscing
                         </p>
                     </div>
                     <div class="col-md-3 mx-auto  ">
                         <h5>
                             social media
                         </h5>
                         <div class="social_box">
                             <a href="#">
                                 <i class="fa fa-facebook" aria-hidden="true"></i>
                             </a>
                             <a href="#">
                                 <i class="fa fa-twitter" aria-hidden="true"></i>
                             </a>
                             <a href="#">
                                 <i class="fa fa-linkedin" aria-hidden="true"></i>
                             </a>
                             <a href="#">
                                 <i class="fa fa-youtube-play" aria-hidden="true"></i>
                             </a>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <h5>
                             Our welding center
                         </h5>
                         <p>
                             Lorem ipsum dolor sit amet, consectetur
                             adipiscinaliquaLoreadipiscing
                         </p>
                     </div>
                 </div>
             </div>
             <div class="info_bottom">
                 <div class="row">
                     <div class="col-lg-9">
                         <div class="info_contact ">
                             <div class="row">
                                 <div class="col-md-3">
                                     <a href="#" class="link-box">
                                         <i class="fa fa-map-marker" aria-hidden="true"></i>
                                         <span>
                                             Location
                                         </span>
                                     </a>
                                 </div>
                                 <div class="col-md-5">
                                     <a href="#" class="link-box">
                                         <i class="fa fa-phone" aria-hidden="true"></i>
                                         <span>
                                             Call +01 1234567890
                                         </span>
                                     </a>
                                 </div>
                                 <div class="col-md-4">
                                     <a href="#" class="link-box">
                                         <i class="fa fa-envelope" aria-hidden="true"></i>
                                         <span>
                                             demo@gmail.com
                                         </span>
                                     </a>
                                 </div>
                             </div>
                         </div>
                     </div>
                     <div class="col-md-3">
                         <div class="info_form ">
                             <form action="">
                                 <input type="email" placeholder="Enter Your Email" />
                                 <button>
                                     <i class="fa fa-arrow-right" aria-hidden="true"></i>
                                 </button>
                             </form>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>

 <!-- end info section -->

 <!-- footer section -->
 <footer class="footer_section">
     <div class="container">
         <p>
             &copy; <span id="displayYear"></span> All Rights Reserved By
             <a href="https://html.design/">Free Html Templates</a>
         </p>
     </div>
 </footer>
 <!-- footer section -->

 <!-- jQery -->
 <script src=" https://code.jquery.com/jquery-3.7.1.js"></script>

 <!-- popper js -->
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <!-- bootstrap js -->
 <script src=" https://code.jquery.com/jquery-3.7.1.js"></script>
 <!-- owl slider -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
 <!--  OwlCarousel 2 - Filter -->
 <script src="https://huynhhuynh.github.io/owlcarousel2-filter/dist/owlcarousel2-filter.min.js"></script>
 <!-- nice select -->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js" integrity="sha256-Zr3vByTlMGQhvMfgkQ5BtWRSKBGa2QlspKYJnkjZTmo=" crossorigin="anonymous"></script>
 <!-- custom js -->
 <script src="<?= ROOT; ?>js/custom.js"></script>
 <!-- Google Map -->
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap"></script>
 <!-- End Google Map -->
 <script src=" https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>
 <script src="https://cdn.datatables.net/2.1.8/js/dataTables.bootstrap5.js"></script>


 <script>
    $(document).ready(function(){
     new DataTable('#example');
    });
    function confirmDelete(path){
        if(confirm("Do you really want to delete this record?")){
            location.href=path;
        }
    }
 </script>


 </body>

 </html>