 <!-- ======= Footer ======= -->
 <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span><img src="{{asset('assets/img/LOGO_AGUIPEX.png')}}"/></span>
          </a>
          <p>
            <span style="font-weight: bold;">AGUIPEX</span> Agence Guinéenne de Promotion des Exportations est un Etablissement Public à caractère Administratif (EPA), doté de personnalité morale, d’autonomie financière et de gestion.
          </p>
          <div class="social-links d-flex mt-4">
            <a href="https://www.linkedin.com/company/agence-guineenne-de-promotion-des-exportations-aguipex/mycompany/" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://www.linkedin.com/company/agence-guineenne-de-promotion-des-exportations-aguipex/mycompany/" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.linkedin.com/company/agence-guineenne-de-promotion-des-exportations-aguipex/mycompany/" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.linkedin.com/company/agence-guineenne-de-promotion-des-exportations-aguipex/mycompany/" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Site Web</h4>
          <ul>
          <li><a href="#hero">Accueil</a></li>
          <li><a href="#about">Présentation</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#faq">Formalités Exportation</a></li>
          <li><a href="#portfolio">Produits Exportés</a></li>
          <li><a href="#statistique">Statistiques</a></li>
          </ul>
        </div> 

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contactez-nous</h4>
          <p>
            Immeuble Horizon, 3ème étage, <br> 5ème Avenue Sandervalia <br> Commune de Kaloum  <br><br>
            <strong>Phone</strong> : ( +224) 611 75 65 52<br>
            <strong>Email </strong> : contact@aguipex.gov.gn<br>
            <strong>Site web </strong> : www.aguipex.gov.gn<br>
          </p>
        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>AGUIPEX</span></strong>. Tous droits reservés
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/impact-bootstrap-business-website-template/ -->
        <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> -->
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('assets/js/jquery-1.10.2.js')}}"></script> 
  <script src="{{asset('assets/js/jquery-3.3.1.js')}}"></script> 

  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

    <!-- Pour le bootsrtrap 4 -->  
  
    <link rel="stylesheet" href="{{asset('assets/camara/bootstrap.css')}}">

  <script src="{{asset('asset/bootstrap.min.js')}}"></script>
  <script src="{{asset('css/jquery/jquery.js')}}"></script>
  <script src="{{asset('assets/camara/bootstrap.js')}}"></script>




  <!-- Template Main JS File -->
  <script src="{{asset('assets/js/main.js')}}"></script>
  <script src="{{asset('assets/js/slick.js')}}"></script>
  <script src="{{asset('assets/js/isotope.js')}}"></script>
  

  <script>
    var $loader=$('<div></div>').appendTo($('body'))
    $(document).ready(
        function(){
             //alert("j'ai clicquer")
             console.log("jai clicquer")
             //$("li:odd").hide()
         }
    )     
        
     $(".txt-bleu").hover(function(){
         //    $(this).css("background-color", "#cccccc") 
         }
     )
     $("li").click(function(){
       //  alert("Text: " + $(".media-body").text());
     });
   /*  $("#myCarousel li").click(function(){
       //  alert("Text: " + $(".media-body").text());
         $(this).siblings().removeClass("active");
         $(this).addClass("active");      
          console.log($(this).parent().siblings())
     });
     $("#p1").mousedown(function(){
         alert("Mouse down over p1!");
     });
   */
     $(document).ready(function(){
             // Highlight bottom nav links
             var clickEvent = false;
             $("#myCarousel").on("click", ".nav li", function(){
                 clickEvent = true;
                 $(this).siblings().removeClass("active");
                 $(this).addClass("active");		
                 console.log("jai clicquer");
                 console.log("event "+clickEvent);
             }).on("slid.bs.carousel", function(e){
                 if(!clickEvent){
                     itemIndex = $(e.relatedTarget).index();
                     console.log("voici index"+itemIndex);
                     targetNavItem = $(".nav li[data-slide-to='" + itemIndex + "']");
                     $(".nav li").not(targetNavItem).removeClass("active");
                     targetNavItem.addClass("active");
                 }
                 clickEvent = false;
             });

             $("#myCarousel").on("click", ".nav li", function(){
                 clickEvent = true;
                 $(this).siblings().removeClass("active");
                 $(this).addClass("active");		
             })

             $("#menu").on("click", "li a",function(){
             //  alert("Text: " + $(".media-body").text());
                 $(this).parent().siblings().removeClass("actives");
                 $(this).parent().addClass("actives");  
                 console.log($(this).parent().siblings())
             });

         });

   

    
 </script>

</body>

</html>