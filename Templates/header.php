<head>
    <!-- font awesome -->
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Import Google Fonts-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Archivo+Narrow:wght@400;500;600;700&family=Grand+Hotel&family=Lato:ital,wght@0,300;0,400;0,700;1,400&family=Lora:wght@400;500&family=Rancho&family=swap" rel="stylesheet">
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>Herbs and Spices</title>
    <style>

      /* font-family: 'Archivo Narrow', sans-serif;
    font-family: 'Grand Hotel', cursive;
    font-family: 'Lato', sans-serif;
    font-family: 'Lora', serif;
    font-family: 'Rancho', cursive; 
    font-family: 'Roboto', sans-serif; 
    font-family: 'Roboto Condensed', sans-serif;*/

        .brand-logo{
            font-family: 'Grand Hotel', cursive;
            margin-left: 40px;
        }

        .desktop-ul{
            margin-right: 20px pulse;
        }

        .nav-text {
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 16px;
            color:white !important;

        }

        .nav-text:hover {
            background-color: black;
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 16px;
            color: #558b2f !important;
            
        }

        .nav-text-mob {
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 16px;
            color:black !important;

        }

        .nav-text-mob:hover {
            background-color: white;
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 16px;
            color: #558b2f !important;
            
        }

        .dropdown-link{
            
            font-family: 'Archivo Narrow', sans-serif !important;
            font-size: 16px !important;
            color: white !important;
        }

        .dropdown-link:hover{
            
            background-color: black;
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 16px;
            color: #558b2f  !important;
        }
        
        .drop-text{
            font-family: 'Archivo Narrow', sans-serif !important;
            font-size: 16px !important;
            color: black !important;
        }

        .drop-text:hover{
            background-color: black;
            color: #558b2f !important;
            font-family: 'Archivo Narrow', sans-serif !important;
            font-size: 16px !important;
        }

        .socials{
        background-color: black;
        }

        .socials:hover{
            background: #558b2f  !important;
        }

        #myBtn{
            display: none; /* Hidden by default */
            position: fixed; /* Fixed/sticky position */
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: 2px solid #558b2f;
            color: #558b2f ; /* Set a background color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 10px; /* Some padding */
            border-radius: 20px;
        }

        #myBtn:hover{
            bottom: 20px; /* Place the button at the bottom of the page */
            right: 30px; /* Place the button 30px from the right */
            z-index: 99; /* Make sure it does not overlap */
            border: 4px solid #558b2f;
            color: #558b2f ; /* Set a background color */
            cursor: pointer; /* Add a mouse pointer on hover */
            padding: 10px; /* Some padding */
            border-radius: 20px;
        }

        .row-header{
           font-family: 'Rancho', cursive;
           font-size: 60px;
           color: #558b2f;
           margin-top: 5%; 
        }

        .about-text{
            margin-top: 10%;
        }

        .sub-row{
            margin-top: 5%;
        }

        .events-post{
            height:
        }

        .section-head{
            font-family: 'Archivo Narrow', sans-serif;
            font-size: 50px;
            font-weight: bold;
            color: #505050;
        }

        .caption-heading{
            font-family: 'Grand Hotel', cursive;
            font-size: large;
            color: #558b2f;
        }

        .more-cont{
            margin-top: 10%;
        }

        .more{
            border: 3px solid #558b2f;
            border-radius: 10px;
            color: #558b2f;
            padding: 5px;
            width: 60px;
            height:20px;
        }

        .more:hover{
            font-weight: bold;
            border: 3px solid #558b2f;
            border-radius: 10px;
            color: white;
            background: #558b2f;
            padding: 5px;
            width: 20px;
            height:20px;
        }

        .photo{
            border: 5px solid #558b2f;
        }

        .position-text{
            margin-top: 3%;
            color: #558b2f;
            font-weight: bold;
            font-size: large;
        }

        .team-section{
            margin-bottom: 10%;
        }

        .card-title{

        font-family: 'Rancho', cursive;

        }
        .row > div{
        padding: 10px;
        border: 1px solid #fff;
        }

        .row{
            margin: 40px auto;
        }

        .box{
            height: 200px;
        }

        #carousel2:{
            height: 100px !important;
        }

        nav .badge{
            position: relative;
            top: 20px;
            right: 20px;
        }

        .foot{
            border: 0px !important;
        }

        .footer-header-text{
            font-family: 'Rancho', cursive;
            color: #558b2f;
            font-size: xx-large;
        }

        .footer-logos{
            width: 250px;
            height: 250px;
        }

    </style>
</head>
<body>

    <div class="navbar">
        <nav class="nav-wrapper black z-depth-0" id="top">
                <a href="#" class="left brand-logo white-text">Spice & Herbs</a>
                <a href="#" class="sidenav-trigger" data-target="mobile-menu">
                    <i class="material-icons white-text">menu</i>
                </a>
                <ul class="desktop-ul right hide-on-med-and-down">
                    <li><a class="nav-text black-text" href="index.php">Home</a></li>
                    <!--Dropdown Trigger-->
                    <!-- <li><a href="" class="dropdown-trigger dropdown-link" data-target="dropdown1">
                        <span>Retail</span>
                        <i class="material-icons arrow right">arrow_drop_down</i>
                    </a></li> -->
                    <!--Structure-->
                    <!-- <ul class="dropdown-content" id="dropdown1">
                        <li><a href="" class="drop-text ">Our Brands</a></li>
                        <li><a href="" class="drop-text ">Our Customers</a></li>
                        <li><a href="" class="drop-text ">Our Partnerships</a></li>
                    </ul> -->
                    <li><a class="nav-text black-text" href="products.php">Products</a></li>
                    <li><a class="nav-text black-text" href="industry.php">Industry</a></li>
                    <li><a class="nav-text black-text" href="events.php">Events</a></li>
                    <!--Dropdown Trigger-->
                    <li><a href="about.php" class="dropdown-trigger dropdown-link" data-target="dropdown2">
                        <span>About</span>
                        <i class="material-icons arrow right">arrow_drop_down</i>
                    </a></li>
                    <!--Structure-->
                    <ul class="dropdown-content" id="dropdown2">
                        <li><a href="about" class="drop-text ">Our History</a></li>
                        <li><a href="about.php#our_team" class="drop-text ">Our Team</a></li>
                    </ul>
                    <li><a class="nav-text black-text" href="contact.php">Contact</a></li>

                    
                    <li class=""><a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                        <i class="fab fa-facebook"></i>
                    </a></li>
        
                    <li><a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                        <i class="fab fa-twitter"></i>
                    </a></li>
        
                    <li><a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                        <i class="fab fa-instagram"></i>
                    </a></li>
        
                    <li><a href="" class="socials tooltipped btn-floating btn-small pulse" data-tooltip="">
                        <i class="fa-brands fa-linkedin"></i>
                    </a></li>
                </ul>
        </nav>
    </div>

    <!--Mobile Menu-->

    <ul class="sidenav mobile-links" id="mobile-menu">

        <li><a class="nav-text-mob black-text" href="index.php">Home</a></li>

        <li><a class="nav-text-mob" href="products.php">Products</a></li>

        <li><a class="nav-text-mob" href="industry.php">Industry</a></li>

        <li><a class="nav-text-mob" href="events.php">Events</a></li>

        <li><a class="nav-text-mob" href="about.php">Our History</a></li>

        <li><a class="nav-text-mob" href="about.php#our_team">Our Team</a></li>

        <li><a class="nav-text-mob" href="contact.php">Contact</a></li>

        <!-- Mob Socials-->
        
        <!-- <li><a href="" class="nav-text-mob" style="font-family: 'Rancho', cursive;
                                                    color: #558b2f !important; font-size:large !important;">Socials</a></li> -->

        <li><a href="" class="nav-text-mob" style="color:#01579b !important;">Facebook</a></li>

        <li><a href="" class="nav-text-mob" style="color:#039be5 !important;">Twitter</a></li>

        <li><a href="" class="nav-text-mob" style="color:#f50057 !important;">Instagram</a></li>

        <li><a href="" class="nav-text-mob" style="color:#00b0ff !important;">LinkedIn</a></li>
    </ul>

    <!--To top button-->

    <button class="hide-on-med-and-down" onclick="topFunction()" id="myBtn" title="Return to top"><a href="#top"><i class="material-icons green-text text-darken-3 ">arrow_upward</i></a></button>