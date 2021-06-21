<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page | Pascoevale Central Cricket Club</title>
    
    <!-- Bootstrap CSS  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <!-- bootstrap script -->
  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   
    <!--Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <!-- Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Favicon Icon links-->
    <link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
    <link rel="manifest" href="img/favicon/site.webmanifest">
    <link rel="mask-icon" href="img/favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
 <!-- My CSS -->
 <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/blog.css">

 <?php wp_head(); ?>
</head>
<body>
<div class="container-fluid banner">
    
        <img class="logo img-fluid" src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-header2.png" alt="">
            
</div>
<nav class="nav-links navbar-expand-md navbar-dark">
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
          
        <ul class="nav list-inline collapse navbar-collapse" id="collapsibleNavbar">
            <div class="nav-left col">
            <li class="nav-item list-inline-item">
                <a class="banner-link" href="<?php echo get_bloginfo('template_directory'); ?>/about-us.php">About</a>
            </li>
            <li class="nav-item list-inline-item">
                <a class="banner-link" href="#">Teams</a>
            </li>
            <li class="nav-item list-inline-item">
                <a class="banner-link" href="#">Merch</a>
            </li>
            </div>
            <div class="nav-right col-reverse align-content-right">
            <li class="nav-item list-inline-item">
                <a class="banner-link" href="#">Home</a>
            </li>
            <li class="nav-item list-inline-item">
                <a class="banner-link" href="index.php">News & Events</a>
            </li>
            <li class="nav-item list-inline-item">
                <a class="banner-link" href="#">Contact</a>
            </li>
        </div>
        </ul>
    
</nav>