<?php

$company_name = "Charity Heart for Good Health Initiative (CHGHI)";
$company_email = "charityheartinitiative@gmail.com";
$company_phone = "+2348066552835";
$company_number = $company_phone;


?>
<!DOCTYPE html>
<html dir="ltr" lang="en">

  <!-- Mirrored from kodesolution.com/html/2016/echarity-html/demo/index-mp-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 30 Oct 2023 04:43:23 GMT -->
  <head>

    <!-- Meta Tags -->
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="description"
      content="<?php echo $company_name ?>" />
    <meta name="keywords"
      content="<?php echo $company_name ?>" />
    

    <!-- Page Title -->
    <title><?php echo $company_name ?></title>

    <!-- Favicon and Touch Icons -->
    <link href="images/favicon.png" rel="shortcut icon" type="image/png">
    <link href="images/apple-touch-icon.png" rel="apple-touch-icon">
    <link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon"
      sizes="72x72">
    <link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon"
      sizes="114x114">
    <link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon"
      sizes="144x144">

    <!-- Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/jquery-ui.min.css" rel="stylesheet" type="text/css">
    <link href="css/animate.css" rel="stylesheet" type="text/css">
    <link href="css/css-plugin-collections.css" rel="stylesheet" />
    <!-- CSS | menuzord megamenu skins -->
    <link id="menuzord-menu-skins" href="css/menuzord-skins/menuzord-boxed.css"
      rel="stylesheet" />
    <!-- CSS | Main style file -->
    <link href="css/style-main.css" rel="stylesheet" type="text/css">

    <!-- CSS | Theme Color -->
    

    <link href="css/colors/theme-skin-orange.css" rel="stylesheet"
      type="text/css">
      
      
    <!-- CSS | Preloader Styles -->
    <link href="css/preloader.css" rel="stylesheet" type="text/css">
    <!-- CSS | Custom Margin Padding Collection -->
    <link href="css/custom-bootstrap-margin-padding.css" rel="stylesheet"
      type="text/css">
    <!-- CSS | Responsive media queries -->
    <link href="css/responsive.css" rel="stylesheet" type="text/css">
    <!-- CSS | Style css. This is the file where you can place your own custom css code. Just uncomment it and use it. -->
    <!-- <link href="css/style.css" rel="stylesheet" type="text/css"> -->

    <!-- Revolution Slider 5.x CSS settings -->
    <link href="js/revolution-slider/css/settings.css" rel="stylesheet"
      type="text/css" />
    <link href="js/revolution-slider/css/layers.css" rel="stylesheet"
      type="text/css" />
    <link href="js/revolution-slider/css/navigation.css" rel="stylesheet"
      type="text/css" />

    <!-- external javascripts -->
    <script src="js/jquery-2.2.4.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- JS | jquery plugin collection for this theme -->
    <script src="js/jquery-plugin-collection.js"></script>

    <!-- Revolution Slider 5.x SCRIPTS -->
    <script src="js/revolution-slider/js/jquery.themepunch.tools.min.js"></script>
    <script src="js/revolution-slider/js/jquery.themepunch.revolution.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
  </head>
  <body class>
    <div id="wrapper">
      <!-- preloader -->
      <div id="preloader">
        <div id="spinner">
          <i
            class="flaticon-charity-shelter font-60 text-theme-colored floating"></i>
          <h5 class="line-height-50 font-18">Loading...</h5>
        </div>
        <div id="disable-preloader" class="btn btn-default btn-sm">Disable
          Preloader</div>
      </div>

      <!-- Header -->
      <header class="header">
        <div class="header-top bg-theme-colored sm-text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <div class="widget no-border m-0">
                  <ul
                    class="styled-icons icon-dark icon-theme-colored icon-sm sm-text-center">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-8">
                <div class="widget no-border m-0">
                  <ul
                    class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                    <li class="m-0 pl-10 pr-10"> <i
                        class="fa fa-phone text-white"></i> <a
                        class="text-white" href="tel:<?php echo $company_name ?>"><?php echo $company_phone ?></a> </li>
                    <li class="text-white m-0 pl-10 pr-10"> <i
                        class="fa fa-clock-o text-white"></i> Mon-Fri 8:00 to
                      2:00 </li>
                    <li class="m-0 pl-10 pr-10"> <i
                        class="fa fa-envelope-o text-white"></i> <a
                        class="text-white" href="mailto:<?php echo $company_email ?>"><?php echo $company_email ?></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="col-md-2">
                <div class="widget no-border m-0">
                  <ul
                    class="list-inline pull-right flip sm-pull-none sm-text-center mt-5">
                    <li class="mt-sm-10 mb-sm-10">
                      <!-- Modal: Appointment Starts -->
                      <!-- <a
                        class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 ajaxload-popup"
                        href="ajax-load/donation-form.html">Donate Now</a>
                    </li>
                    <li class="mt-sm-10 mb-sm-10">
                      <a
                        class="btn btn-default btn-flat btn-xs bg-light p-5 font-11 pl-10 pr-10 ajaxload-popup"
                        href="ajax-load/volunteer-apply-form.html">Join Us
                    </a> -->
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="header-nav">
          <div class="header-nav-wrapper navbar-scrolltofixed bg-white">
            <div class="container">
              <nav id="menuzord-right" class="menuzord green no-bg">
                <a class="menuzord-brand pull-left flip"
                  href="javascript:void(0)"><img src="images/logo-wide.png" alt></a>
                <ul class="menuzord-menu">
              
                  <li>
                    <a href="about-us.php">About us</a>
                  </li>
                  <li>
                    <a href="events.php">Events</a>
                  </li>
                  <li>
                    <a href="projects.php">Projects</a>
                  </li>
                  <li>
                    <a href="news.php">News</a>
                  </li>
                  <li>
                    <a href="contact-us.php">Contact us</a>
                  </li>
                
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>