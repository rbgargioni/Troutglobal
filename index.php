<?php
include('protect.php');
?>
<!DOCTYPE html>
<html lang="en-US">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Trout - Dashboard</title>
    <link rel="stylesheet" href="css/components.css">
    <link rel="stylesheet" href="css/icons.css">
    <link rel="stylesheet" href="css/responsee.css">
    <link rel="stylesheet" href="owl-carousel/owl.carousel.css">
    <link rel="stylesheet" href="owl-carousel/owl.theme.css">     
    <link rel="stylesheet" href="css/template-style.css">
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>      
  </head>
  
  <body class="size-1140">
  	<!-- PREMIUM FEATURES BUTTON 
  	<a target="_blank" class="hide-s" href="contact.php" style="position:fixed;top:120px;right:-14px;z-index:10;"><img src="img/premium-features.png" alt=""></a>
   --> <!-- HEADER -->
    <header role="banner" class="position-absolute">    
      <!-- Top Navigation -->
      <nav class="background-transparent background-transparent-hightlight full-width sticky">
        <div class="s-12 l-2">
          <a href="index.php" class="logo">
            <!-- Logo White Version -->
            <img class="logo-white" src="img/logo.png" alt="">
            <!-- Logo Dark Version -->
            <img class="logo-dark" src="img/logo-dark.png" alt="">
          </a>
        </div>
        <div class="top-nav s-12 l-10">
          <p class="nav-text"></p>
          <ul class="right chevron">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">Products</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="https://sh-pro96.hostgator.com.br:2096/logout/?locale=en">WebMail</a></li>
            <!--<li><a href="contact.html">Contact</a></li>-->
            <li><a href="logout.php">Logout</a></li>
          </ul>
        </div>
      </nav>
    </header>
    
    <!-- MAIN -->
    <main role="main">    
      <!-- Main Header -->
      <header>
        <div class="carousel-default owl-carousel carousel-main carousel-nav-white background-dark text-center">
          <div class="item">
            <div class="s-12">
              <img src="img/header.jpg" alt="">
              <div class="carousel-content">
                <div class="content-center-vertical line">
                  <div class="margin-top-bottom-80">
                    
                  <!-- Title -->
                   <form action="" method="POST">
                                <h1 class="text-white margin-bottom-30 text-size-60 text-m-size-30 text-line-height-1">Trout - Dashboard</h1>
                                
                                

                                
                                <div class="line">
                                    <div class="s-12 m-12 l-3 center">
            
                                        <p>
                                        <a href="logout.php"class="button is-block is-link is-large is-fullwidth s-12">Sair</a>
                                        </p>
                                        <br><br>
                                    </div>
                                </div>
                                </form>
                  </div>
                </div>
              </div>
            </div>
          </div>              
        </div>               
      </header>
      
      <!-- Section 1 -->
      <section class="section-small-padding background-white text-center"> 
        <div class="line">
          <div class="margin">
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-energy icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Software Development</h2>
                <p class="margin-bottom-30">Refers to a set of computer science activities dedicated to the process of creating, designing, deploying and supporting software. At Trout Global, software development addresses all facets of writing and running software code.</p>
                <a class="button button-dark-stroke text-size-12" href="contact.php">GET MORE INFO</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-compass Services icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Consulting Services</h2>
                <p class="margin-bottom-30">Services focus on addressing clients' key business needs, optimizing their business processes and helping them transform on a global scale. Leveraging Trout's years of experience and cross-industry expertise in business transformation.</p>
                <a class="button button-dark-stroke text-size-12" href="contact.php">GET MORE INFO</a>
              </div>
            </div>
            <div class="s-12 m-12 l-4 margin-m-bottom">
              <div class="padding-2x block-bordered">
                <i class="icon-sli-people icon3x text-dark center margin-bottom-30"></i>
                <h2 class="text-thin">Business Operations</h2>
                <p class="margin-bottom-30">Disruption and operational challenges with the right strategy and practices to drive resiliency and competitive advantage. Trout Global provides enterprise strategy, implementation and technology solutions that deliver business outcomes.</p>
                <a class="button button-dark-stroke text-size-12" href="contact.php">GET MORE INFO</a>
              </div>
            </div>
          </div>
        </div>
      </section>
      
      <!-- Section 1 -->
      <section class="section">
        <div class="line">
          <h2 class="text-size-50 text-center">About Us</h2>
          <hr class="break-small background-primary break-center">
        </div>
        <div class="line">
          <div class="margin">  
            <div class="s-12 m-12 l-2">
              <p class="h1 text-size-30 margin-m-bottom-30 text-primary text-line-height-1 text-right">We Are...<br> Tech Heroes</p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 margin-m-bottom-30 text-dark">We discover, design and develop advanced information technology, and translate that into value for our clients through services.</p>
            </div>
            <div class="s-12 m-12 l-5">
              <p class="text-size-14 text-dark">Our management services deliver operational efficiencies that lower costs and implement intelligent business processes by integrating data, AI and advanced automation.</p>
            </div>
          </div>
        </div>    
      </section>
      
      <section class="full-width">
        <div class="s-12 m-12 l-6">  
          <img src="img/img-12.jpg" alt="">
        </div>
        <div class="s-12 m-12 l-6">
          <div class="padding-2x">
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-screen-smartphone icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Trout Digital Solutions</h3>
                <p class="text-dark">We build digital products and solutions to meet our customers' needs.</p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-drop icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Trout Services</h3>
                <p class="text-dark">Digital transformation, data journey, ready products, experience, innovation, acceleration, assurance and more.</p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-chart icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Banking and Financial Industry</h3>
                <p class="text-dark">Trout banking and financial expertise helps to optimize enterprise risk management, create solutions and innovative services.</p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-heart icon3x text-dark"></i>
              </div>
              <div class="margin-left-60 margin-bottom-30">
                <h3 class="text-size-25 margin-bottom-0">Consulting Services</h3>
                <p class="text-dark"> Trout Consulting Services works with the world’s leading companies to reimagine and reinvent their business through technology.</p>            
              </div>
            </div>
            
            <div class="line">
              <div class="float-left">
                <i class="icon-sli-globe-alt icon3x text-dark"></i>
              </div>
              <div class="margin-left-60">
                <h3 class="text-size-25 margin-bottom-0">Business operations</h3>
                <p class="text-dark">Enable and optimize efficiency in your organization with our business operations solutions.</p>            
              </div>
            </div> 
          </div>
        </div>
      </section>
      
      <!-- Section 3 -->
      <section class="section background-white" >  
        <div class="line">
          <h2 class="text-size-50 text-center">Our Stats</h2>
          <hr class="break-small background-primary break-center">
          <div class="margin margin-top-bottom-50">
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50">20+</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Years of Experience</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50">95%</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Projects Effectiveness</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50">100%</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Project Delivery</p> 
                </div>
              </div>
            </div>
            <div class="s-12 m-12 l-3">
              <div class="block">
                <div class="count-to">
                  <span class="timer h1 text-size-50">4</span>
                  <p class="h1 text-size-20 margin-top-10 text-dark text-thin">Continents</p> 
                </div>
              </div>
            </div> 
          </div>
        </div>
      </section>
      
      <hr class="break margin-top-bottom-0">
      
      <hr class="break margin-top-bottom-0">
      

    </main>
    
    <!-- FOOTER -->
    <footer>
      <!-- Contact Us -->
      <div class="background-primary padding text-center">
        <p class="h1">Contact Us: +1 347 809 5560</p>                                                                        
      </div>
      
      <!-- Main Footer -->
      <section class="background-dark full-width">
        <!-- Map -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="s-12 grayscale center">  	  
<iframe src="https://www.google.com/maps/embed?pb=!4v1646161900912!6m8!1m7!1s1OubhEqL3kydRrlv9JiFkw!2m2!1d-30.00742731731861!2d-51.1413228722278!3f301.3195974847942!4f9.30342351287969!5f0.7820865974627469" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
        
        <!-- Collumn 2 -->
        <div class="s-12 m-12 l-6 margin-m-bottom-2x">
          <div class="padding-2x">
            <div class="line">              
              <div class="float-left">
                  <i class="icon-sli-location-pin text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">Company Address</h3>
                  <p>Assis Brasil Avenue 4600<br>
                     Icon Business Center<br>
                     Porto Alegre / RS / Brazil
                  </p>               
                </div>
                <div class="float-left">
                  <i class="icon-sli-envelope text-primary icon3x"></i>
                </div>
                <div class="margin-left-70 margin-bottom-30">
                  <h3 class="margin-bottom-0">E-mail</h3>
                  <p>trout.global@trout.com.br<br>
                  </p>              
                </div>
                <div class="float-left">
                  <i class="icon-sli-phone text-primary icon3x"></i>
                </div>
                <div class="margin-left-70">
                  <h3 class="margin-bottom-0">Phone Number</h3>
                  <p>+1 347 809 5560<br>
                  </p>             
                </div>
            </div>
          </div>
        </div>  
      </section>
      <hr class="break margin-top-bottom-0" style="border-color: rgba(0, 38, 51, 0.80);">
      
      <!-- Bottom Footer -->
      <section class="padding background-dark full-width">
        <div class="s-12 l-6">
          <p class="text-size-12">Copyright 2021, Trout Global - All rights reserved</p>
        </div>
        <div class="s-12 l-6">
          <a class="right text-size-12" href="http://www.myresponsee.com" title="Responsee - lightweight responsive framework">Design and coding<br> by Trout Global Team</a>
        </div>
      </section>
    </footer>
    <script type="text/javascript" src="js/responsee.js"></script>
    <script type="text/javascript" src="owl-carousel/owl.carousel.js"></script>
    <script type="text/javascript" src="js/template-scripts.js"></script>
  </body>
</html>
