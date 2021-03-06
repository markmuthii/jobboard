<?php 
error_reporting(0);
session_start();
include "config/global.php";

?>

<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
  <meta charset="utf-8" />
  <meta http-equiv="content-type" content="text/html;charset=utf-8" />
  <title>Job Board Pro</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport" />
  <meta name="description" content="Job Pro" />
  <meta name="keywords" content="Job Pro" />
  <meta name="author" content="" />
  <meta name="MobileOptimized" content="320" />
  <!--srart theme style -->
  <link rel="stylesheet" type="text/css" href="assets/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/fonts.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/reset.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/owl.theme.default.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/flaticon.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/style_II.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/responsive2.css" />
  <!-- favicon links -->
  <link rel="shortcut icon" type="image/png" href="assets/images/header/favicon.ico" />
  <script>
    const homePath = "<?php echo HOME_URL ?>";
  </script>

  <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
  <!-- preloader Start -->
  <div id="preloader">
    <div id="status">
      <img src="assets/images/header/loadinganimation.gif" id="preloader_image" alt="loader">
    </div>
  </div>
  <!-- Top Scroll End -->
  <!-- Top Header Wrapper Start -->
  <!-- <div class="jp_top_header_main_wrapper">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="jp_top_header_left_wrapper">
            <div class="jp_top_header_left_cont">
              <p>
                <i class="fa fa-phone"></i> &nbsp;Phone &nbsp;+123456789</p>
              <p class="">
                <i class="fa fa-envelope"></i> &nbsp;Email :&nbsp;
                <a href="#">Email@example.com</a>
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="jp_top_header_right_wrapper">
            <div class="jp_top_header_right_cont">
              <ul>
                <li>
                  <a href="register.php">
                    <i class="fa fa-user"></i>&nbsp; SIGN UP</a>
                </li>
                <li>
                  <a href="login.php">
                    <i class="fa fa-sign-in"></i>&nbsp; LOGIN</a>
                </li>
              </ul>
            </div>
            <div class="jp_top_header_right__social_cont">
              <ul>
                <li>
                  <a href="#">
                    <i class="fa fa-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-pinterest-p"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-linkedin"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-google-plus"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-vimeo"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div> -->
  <!-- Top Header Wrapper End -->
  <!-- Header Wrapper Start -->
  <div class="jp_top_header_img_wrapper">
    <div class="gc_main_menu_wrapper">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-xs hidden-sm full_width">
            <div class="gc_header_wrapper">
              <div class="gc_logo">
                <a href="./">
                  <img src="assets/images/header/logo2.png" alt="Logo" title="Job Pro" class="img-responsive">
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 full_width">
            <div class="header-area hidden-menu-bar stick" id="sticker">
              <!-- mainmenu start -->
              <div class="mainmenu">
                <div class="gc_right_menu">
                  <ul>
                    <!--<li id="search_button">
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_3" x="0px" y="0px"
                        viewBox="0 0 451 451" style="enable-background:new 0 0 451 451;" xml:space="preserve">
                        <g>
                          <path id="search" d="M447.05,428l-109.6-109.6c29.4-33.8,47.2-77.9,47.2-126.1C384.65,86.2,298.35,0,192.35,0C86.25,0,0.05,86.3,0.05,192.3   s86.3,192.3,192.3,192.3c48.2,0,92.3-17.8,126.1-47.2L428.05,447c2.6,2.6,6.1,4,9.5,4s6.9-1.3,9.5-4   C452.25,441.8,452.25,433.2,447.05,428z M26.95,192.3c0-91.2,74.2-165.3,165.3-165.3c91.2,0,165.3,74.2,165.3,165.3   s-74.1,165.4-165.3,165.4C101.15,357.7,26.95,283.5,26.95,192.3z"
                            fill="#23c0e9" />
                        </g>
                      </svg>
                    </li>
                     <li>
                      <div id="search_open" class="gc_search_box">
                        <input type="text" placeholder="Search here">
                        <button>
                          <i class="fa fa-search" aria-hidden="true"></i>
                        </button>
                      </div>
                    </li> -->
                  </ul>
                </div>
                <ul class="float_left">
                  <li class="gc_main_navigation">
                    <a href="./" class="gc_main_navigation"> Home&nbsp;
                    </a>
                  </li>
                  <?php if(!isset($_SESSION["type"])): ?>
                  <!-- Not logged in -->
                    <li class="gc_main_navigation">
                      <a href="login.php" class="gc_main_navigation"> Login&nbsp;
                      </a>
                    </li>
                    <li class="gc_main_navigation">
                      <a href="register.php" class="gc_main_navigation"> Signup&nbsp;
                      </a>
                    </li>
                  <?php else: ?>
                    <li class="gc_main_navigation">
                      <a href="dashboard.php" class="gc_main_navigation"> Dashboard&nbsp;
                      </a>
                    </li>
                    <?php if($_SESSION["type"] == "company"):?>
                    <!-- Logged in company -->
                    <!-- <li class="gc_main_navigation">
                      <a href="dashboard.php" class="gc_main_navigation"> Dashboard&nbsp;
                      </a>
                    </li> -->
                    <?php else: ?>
                    <!-- Logged in jobseeker -->
                    <li class="gc_main_navigation">
                      <a href="profile.php" class="gc_main_navigation"> Profile&nbsp;
                      </a>
                    </li>

                    <?php endif ?>
                    <li class="gc_main_navigation">
                      <a href="logout.php" class="gc_main_navigation"> Logout&nbsp;
                      </a>
                    </li>
                  <?php endif ?>
                </ul>
              </div>
              <!-- mainmenu end -->
              <!-- mobile menu area start -->
              <header class="mobail_menu">
                <div class="container-fluid">
                  <div class="row">
                    <div class="col-xs-6 col-sm-6">
                      <div class="gc_logo">
                        <a href="index.html">
                          <img src="assets/images/header/logo2.png" alt="Logo" title="Grace Church">
                        </a>
                      </div>
                    </div>
                    <div class="col-xs-6 col-sm-6">
                      <div class="cd-dropdown-wrapper">
                        <a class="house_toggle" href="#0">
                          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                            viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve"
                            width="25px" height="25px">
                            <g>
                              <g>
                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z"
                                  fill="#000000" />
                              </g>
                              <g>
                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z"
                                  fill="#000000" />
                              </g>
                              <g>
                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z"
                                  fill="#000000" />
                              </g>
                              <g>
                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z"
                                  fill="#000000" />
                              </g>
                              <g>
                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z"
                                  fill="#000000" />
                              </g>
                            </g>
                          </svg>
                        </a>
                        <nav class="cd-dropdown">
                          <h2>
                            <a href="#">Job
                              <span>Pro</span>
                            </a>
                          </h2>
                          <a href="#0" class="cd-close">Close</a>
                          <ul class="cd-dropdown-content">
                            <!-- <li>
                              <form class="cd-search">
                                <input type="search" placeholder="Search...">
                              </form>
                            </li> -->
                            <li class="has-children">
                              <a href="#">Home</a>

                              <ul class="cd-secondary-dropdown is-hidden">
                                <li class="go-back">
                                  <a href="#0">Menu</a>
                                </li>
                                <li>
                                  <a href="index.html">Home1</a>
                                </li>
                                <!-- .has-children -->

                                <li>
                                  <a href="index_II.html">Home2</a>
                                </li>
                                <li>
                                  <a href="index_map.html">Home3</a>
                                </li>
                                <!-- .has-children -->

                              </ul>
                              <!-- .cd-secondary-dropdown -->
                            </li>
                            <!-- .has-children -->


                            <li class="has-children">
                              <a href="#">Listing</a>

                              <ul class="cd-secondary-dropdown is-hidden">
                                <li class="go-back">
                                  <a href="#0">Menu</a>
                                </li>
                                <li>
                                  <a href="listing_left.html">listing-Left</a>
                                </li>
                                <!-- .has-children -->

                                <li>
                                  <a href="listing_right.html">listing-Right</a>
                                </li>
                                <!-- .has-children -->

                                <li>
                                  <a href="listing_single.html">listing-Single</a>
                                </li>
                                <!-- .has-children -->

                              </ul>
                              <!-- .cd-secondary-dropdown -->
                            </li>
                            <!-- .has-children -->
                            <li class="has-children">
                              <a href="#">candidates</a>

                              <ul class="cd-secondary-dropdown is-hidden">
                                <li class="go-back">
                                  <a href="#0">Menu</a>
                                </li>
                                <li>
                                  <a href="company_listing.html">Company-Listing</a>
                                </li>
                                <li>
                                  <a href="company_listing_single.html">Company-Single</a>
                                </li>
                                <li>
                                  <a href="candidate_listing.html">candidate-Listing</a>
                                </li>
                                <li>
                                  <a href="candidate_profile.html">candidate-Profile</a>
                                </li>
                                <!-- .has-children -->

                              </ul>
                              <!-- .cd-secondary-dropdown -->
                            </li>
                            <!-- .has-children -->
                            <!-- .has-children -->

                          </ul>
                          <!-- .cd-dropdown-content -->



                        </nav>
                        <!-- .cd-dropdown -->

                      </div>
                    </div>
                  </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
              </header>
            </div>
          </div>
          <!-- mobile menu area end -->
          <?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "company"):?>
          <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12 hidden-sm hidden-xs">
            <div class="jp_navi_right_btn_wrapper">
              <ul>
                <li>
                  <a href="publish.php">
                    <i class="fa fa-plus-circle"></i>&nbsp; Post a job</a>
                </li>
              </ul>
            </div>
          </div>
          <?php endif ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Wrapper End -->
  