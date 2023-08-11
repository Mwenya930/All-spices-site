<!-- footer -->
<!-- <hr class="footer-line"> -->
    <footer class="page-footer grey darken-4">
        <div class="section-container center">

            <div class="row">

                <!--Contact-->

                <div class="col s12 l4 foot">
                    <div>
                        <h5 class="flow-text footer-header-text">Contact</h5>
                    </div>

                    <div>
                        <h6 class=""><b>Herbs & Spices</b></h6>
                    </div>

                    <div>
                        <p><h6 class=""><b class="light-green-text  text-darken-3">Address: </b> Plot 778 Mpepo Road, Lusaka 10101</h6></p>
                    </div>

                    <div>
                        <p>
                            <h6 class=""><b class="light-green-text  text-darken-3">Phone: </b> +260 0971 070 098</h6>
                        </p>
                    </div>

                    <div>
                        <p>
                            <h6 class=""><b class="light-green-text  text-darken-3">email: </b> order@hnmspiceandherbs.com</h6>
                        </p>
                    </div>
                </div>

                <!--Partners-->

                <div class="col s12 l4 foot">
                    <div>
                        <h5 class="flow-text footer-header-text">Partners</h5>
                    </div>

                    <div class="row">

                        <div class="col s6 l4 foot">
                            <a href="#"><img src="images/afridelivery.png" alt="" class="footer-logos responsive-img"></a>
                        </div>

                        <div class="col s6 l4 foot">
                            <a href="#"><img src="images/afridelivery.png" alt="" class="footer-logos responsive-img"></a>
                        </div>

                        <div class="col s6 l4 foot">
                            <a href="#"><img src="images/afridelivery.png" alt="" class="footer-logos responsive-img"></a>
                        </div>

                    </div>

                </div>
                
                <!--Socials-->

                <div class="col s12 l4 foot hide-on-med-and-down">
                    <div>
                        <h5 class="flow-text footer-header-text">Socials</h5>
                    </div>

                    <div class="row footer-socials">

                        <div class="col s4 l3 foot offset-1">
                            <a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </div>

                        <div class="col s4 l3 foot">
                            <a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </div>

                        <div class="col s4 l3 foot">
                            <a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </div>

                        <div class="col s4 l3 foot">
                            <a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                                <i class="fa-brands fa-linkedin"></i>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-copyright black">
            <div class="container center-align">&copy; 2023, Herbs and Spices</div>
        </div>

    </footer>
<script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>

<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<!--font awesome-->
<script src="https://kit.fontawesome.com/936752abdf.js" crossorigin="anonymous"></script>

<!--Activating pop up message-->
<script>
    $(document).ready(function(){   

      $('.modal').modal();
      $('.dropdown-trigger').dropdown();
      //$('.tooltipped').tooltip();
      $('.sidenav').sidenav(); 
      $('.slider').slider();
      $('#carousel1').carousel({
        padding: 5,
        indicators: true,
        numVisible: 3
      });
      $('#carousel2.carousel-slider').carousel({
        fullWidth: true,
        padding: 5,
        indicators: true,
        numVisible: 3,
        shift: 10
      })
      $('.materialboxed').materialbox();
      $('.scrollspy').scrollspy();
    });

        // Get the button:
    let mybutton = document.getElementById("myBtn");

        // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
    }

        // When the user clicks on the button, scroll to the top of the document

    function topFunction() {
    document.body.scrollTop = 0; // For Safari
    document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
    }
</script>
</body>