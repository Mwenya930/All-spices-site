<?php

?>

<!DOCTYPE html>
<html>

<?php include("Templates/header.php");?>

    <!--Slideshow-->
    <div class="slider">
        <ul class="slides">
            <li>
                <img src="images/chickpea-curry-recipe2.png" alt="">
                <div class="caption left-align">
                    <h2 class="slide-title "> <b>Contact</b> <i class="fa-solid fa-envelope"></i> </h2>
                </div> 
            </li>

            <li>
                <img src="images/081522-Ice-Cream-Cake-2-1200.jpg" alt="">
                <!-- <div class="caption left-align">
                    <h3 class="caption-heading">Baked products</h3>
                    <h5 class="indigo-text text-darken-4">Delicious cakes baked from natural Ingredients</h5>
                </div> -->
            </li>

            <li>
                <img src="images/Einkorn-Spaghetti-Creamy-Asparagus-11-1200.jpg" alt="">
                <!-- <div class="caption left-align">
                    <h3 class="caption-heading">Baked products</h3>
                    <h5 class="indigo-text text-darken-4">Delicious cakes baked from natural Ingredients</h5>
                </div> -->
            </li>

            <li>
                <img src="images/kettlefire-1200.jpg" alt="">
                <!-- <div class="caption left-align">
                    <h3 class="caption-heading">Baked products</h3>
                    <h5 class="indigo-text text-darken-4">Delicious cakes baked from natural Ingredients</h5>
                </div> -->
            </li>
        </ul>
    </div>

    <!--Contact Us section-->

    <div class="section-container center team-section"  id="our_team">
        <div class="row">

            <div class="col s12 l5 center sub-row">
                <h5 class="section-head">Our Address</h5>
            
                <div style="margin-top: 5%;">
                    <h6 class="grey-text "> Plot 778 Mpepo Road, Lusaka, Zambia 10101</h6>
                </div>

                <div style="margin-top: 7%;">
                    <h6 class="grey-text "> (+260) 0971 070 098</h6>
                </div>

                <div style="margin-top: 7%;">
                    <h6 class="grey-text "> order@hnmspiceandherbs.com</h6>
                </div>


            </div>

        <!--Form area-->

            <div class="col s12 l5 center sub-row offset-l1">
                <h5 class="section-head">Send a Message</h5>
                <div style="margin-top: 5%;">
                    <h6 class="grey-text "> Do you have anything on your mind you want to tell us?
                     Please don't hesitate to get in touch with us via our contact form.</h6>
                </div>

                <form style="margin-top: 7%;" action="">
                    <div class="input-field">
                        <i class="material-icons prefix">email</i>
                        <input type="email" id="email">
                        <label for="email">Your email</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix">message</i>
                        <textarea id="message" class="materialize-textarea"></textarea>
                        <label for="message">Your message</label>
                    </div>

                    <div class="input-field">
                        <i class="material-icons prefix"></i>
                        <input type="text" id="date" class="datepicker">
                        <label for="date">Choose a date</label>
                    </div>

                    <div class="center">
                        <ul>
                            <li class="">
                                <a href="mailto: mjnate930@gmail.com" class="button more" data-tooltip=""> Send 
                                     <i class="fa-solid fa-paper-plane fa-beat"></i>
                                </a>
                            </li>
                        </ul>     
                    </div>

            </form>

            </div>

        </div>    
    </div>

  <!--footer-->

  <?php include("Templates/footer.php"); ?> 
</body>

</html>