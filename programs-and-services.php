<?php
			/*
				Template Name: html2wp-programs-and-services
			*/

			?>
<!DOCTYPE html>
<html lang="en">
  <head>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Alex Pickrell">
    <!-- <meta name="generator" content="Hugo 0.83.1"> -->
    <title><?php  wp_title( '|', true, 'right' );  ?>
</title>

    <!-- <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/blog/"> --> 
    <!-- Bootstrap core CSS -->
<!-- <link href="/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous"> -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script> -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="<?php  bloginfo('template_url');  ?>/css/style.css">
<script src="<?php  bloginfo('template_url');  ?>/js/index.js"></script>
    <!-- Favicons -->
<link rel="apple-touch-icon" href="<?php  bloginfo('template_url');  ?>/img/favicons/apple-touch-icon.png" sizes="180x180">
<link rel="icon" href="<?php  bloginfo('template_url');  ?>/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
<link rel="icon" href="<?php  bloginfo('template_url');  ?>/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
<!-- <link rel="manifest" href="/docs/5.0/assets/img/favicons/manifest.json">
<link rel="mask-icon" href="/docs/5.0/assets/img/favicons/safari-pinned-tab.svg" color="#7952b3">
<link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">
<meta name="theme-color" content="#7952b3"> -->


    <!-- Custom styles for this template -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900&amp;display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    
  <?php  wp_head();  ?>
</head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="main-nav-bar">
        <a href="<?php  html2wp_the_page_link( 'index.php' );  ?>" class="navbar-brand" id="brand-nav-bar">"Once a member, always a friend."</a>
        <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-md-auto">
            <a>
            <li class="nav-item">
              <a id="testThingId" class="nav-link margin-link" href="<?php  html2wp_the_page_link( 'index.php' );  ?>">Home</a>
            </li>
            </a>
            <a>
            <li class="nav-item">
              <a class="nav-link margin-link" href="<?php  html2wp_the_page_link( 'partners.php' );  ?>">Partners</a>
            </li>
            </a>
            <a>
            <li class="nav-item">
              <a class="nav-link margin-link" href="<?php  html2wp_the_page_link( 'contact.php' );  ?>">Contact</a>
            </li>
            </a> 
          </ul>
          <form class="form-inline my-2 my-lg-0">
            <a href="https://www.paypal.com/donate/?hosted_button_id=BVNMUBZ8EBX32">
                <button class="btn round-btn shadow ml-2 my-2 my-sm-0" type="button">Donate</button>
            </a>
          </form>
        </div>
      </nav>
    <main>
      <!-- Shared Section -->
        <div class="row">
            <div class="col">
              <img style="width:100%;" class="img-fluid" src="<?php  bloginfo('template_url');  ?>/img/newbackground.jpg">
            </div>
          </div>
          <div class="container-fluid">
   
            <div class="row" id="tan-gradient-row">     
              <div class="col">
                <p class="text-center">
                    <a href="<?php  html2wp_the_page_link( 'programs-and-services.php' );  ?>">
                        <button class="shadow black-center-btn" id="first-button">Programs <br> and Services</button>
                    </a>
                </p>
              </div>
              <div class="col">
                <p class="text-center">
                    <a href="<?php  html2wp_the_page_link( 'who-we-serve.php' );  ?>">
                        <button class="shadow black-center-btn">Who We <br> Serve</button>
                    </a>
                </p>
              </div>
              <div class="col">
                <p class="text-center">
                   <a href="<?php  html2wp_the_page_link( 'measuring-success.php' );  ?>">
                    <button class="shadow black-center-btn">Measuring <br> Success</button>
                   </a>
                </p>
              </div>
              <div class="col">
                <p class="text-center">
                    <a href="<?php  html2wp_the_page_link( 'how-to-help.php' );  ?>">
                        <button class="shadow black-center-btn">How You <br> Can Help</button>
                    </a>
                </p>
              </div>
              <div class="col">
                <p class="text-center">
                   <a href="<?php  html2wp_the_page_link( 'about.php' );  ?>">
                    <button class="shadow black-center-btn">About<br> TFO</button>
                   </a>
                </p>
              </div>
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-2"></div>
                    <h2 class="col-md-4 mb-4">Our Programs</h2>
                  </div>
                  <div class="row" id="card-row-1">
                      <div class="col-sm-2"></div>
                      <div class="col-sm-3 mb-2 hover-card">
                        <a href="<?php  html2wp_the_page_link( 'programs-and-services/discover-me.php' );  ?>">
                          <div class="card gold-bg-card text-center shadow hover-card">
                              <div>
                                <p>DISCOVER ME SUMMER BOOTCAMP PROGRAM</p>
                                <p>
                                    3-week summer bootcamp held in four Clayton County middle schools 
                                    introducing students to a variety of STEAM careers and equipping them with the skills they need 
                                    to succeed. The program consists of self-discovery activities, career research, weekly guest speakers and field trips,
                                    and the weekly Together Friends Career Challenge Bowls.
                                </p>
                              </div>
                          </div>
                          <div class="card shadow hover-card" style="margin-top:-17px;">
                              <!-- <img src='../../../assets/img/programpictwo.png' class="img-fluid" style="min-height:200px;"/> -->
                             <img src="<?php  bloginfo('template_url');  ?>/img/stadium.jpg" alt="together friends stadium" class="img-fluid" style="min-height:200px !important;">
                          </div>
                        </a>
                          
                      </div>
                      <div class="col-sm-3 mb-2 hover-card">
                          <a href="<?php  html2wp_the_page_link( 'programs-and-services/youth-exploring-I.php' );  ?>">
                          <div class="card gold-bg-card text-center shadow hover-card" style="height:48%">
                              <div>
                                <p>YOUTH EXPLORING OPTION (YEO) AFTERSCHOOL PROGRAM</p>
                                <p>
                                  Afterschool program combining synchronous learning and exploration with asynchronous career research projects and digital powerpoint presentations.
                                </p>
                              </div>
                          </div>
                          <div class="card shadow hover-card">
                             <!-- <img src='../../../assets/img/programonepic.png' class="img-fluid" style="min-height:200px;"/> -->
                            <img src="<?php  bloginfo('template_url');  ?>/img/bus.jpg" alt="together friends schoolbus" class="img-fluid" style="min-height:200px !important">
                          </div>
                        </a>
                      </div>
                        
                        <div class="col-sm-3 ">
                          <div class="card gold-bg-card text-center shadow" style="height:48%;">
                                <div>
                                <p>YOUTH EXPLORING OPTION (YEO) AFTERSCHOOL PROGRAM II</p>
                                <p>
                                   To be launched in September of 2021...
                                </p>
                                </div>
                               
                          </div>
                          <div class="card shadow" style="margin-top:-17px;">
                              <!-- <img src="../../../assets/img/programpicthree.png" class="img-fluid" style="min-height: 200px !important;"/> -->
                              <img src="<?php  bloginfo('template_url');  ?>/img/damengineer.jpg" alt="together friends hardhat" border="0" class="img-fluid" style="min-height:200px;">
                          </div>
                      </div>
                  </div>
                
            </div>
                
    


<footer class="blog-footer" style="margin-top:100px;">
    <div class="row text-center mt-4" style="background-color:#D9CB9E;padding-top:20px;padding-bottom:20px;">
        <div class="col-sm-12">
          <p class="mt-2">Copyright © 2020 Together Friends Organization | <a href="<?php  html2wp_the_page_link( 'privacy-policy.php' );  ?>">Privacy Policy</a></p>
          <a href="https://www.facebook.com/OnceAMember/"><img src="https://cdn4.iconfinder.com/data/icons/vector-brand-logos/40/Facebook-512.png" class="img-fluid" style="height:55px;"></a>
          <a href="https://www.instagram.com/togetherfriendsorg/"><img src="https://i.pinimg.com/originals/63/9b/3d/639b3dafb544d6f061fcddd2d6686ddb.png" class="img-fluid" style="height:40px;"></a>
        </div>
      </div>
</footer>

  </div></main><?php  wp_footer();  ?>
</body>
</html>
