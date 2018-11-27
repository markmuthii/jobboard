<?php 
error_reporting(0);
session_start();
//if (!isset($_GET["id"]) || !isset($_SESSION["type"])) {
//  header("Location: ./");
//  exit();
//}
include "api/jobs.php";
// print_r($_GET["id"]);
$job = get_job_by_id($_GET["id"]);
// print_r($job);
// echo $_SESSION["user_id"];
// echo "Hello World";
// var_dump($_SESSION);
include "includes/header.php";

?>
<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
  <div class="jp_tittle_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="jp_tittle_heading_wrapper">
          <div class="jp_tittle_heading">
            <h2><?php echo $job["title"] ?></h2>
          </div>
          <div class="jp_tittle_breadcrumb_main_wrapper">
            <div class="jp_tittle_breadcrumb_wrapper">
              <ul>
                <li>
                  <a href="#">Home</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>
                  <a href="#">Jobs</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li><?php echo $job["title"] ?></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- jp Tittle Wrapper End -->
<!-- jp listing Single cont Wrapper Start -->
<div class="jp_listing_single_main_wrapper">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
        <div class="jp_listing_left_sidebar_wrapper">
          <div class="jp_job_des">
            <h2>Job Description</h2>
            <p><?php echo $job["description"] ?></p>
            <ul>
              <li>
                <i class="fa fa-globe"></i>&nbsp;&nbsp;
                <a href="#"><?php echo $job["website"] ?></a>
              </li>
            </ul>
          </div>
		  <!--
          <div class="jp_job_res">
            <h2>Responsibilities</h2>
            <p>Curabitur non nulla</p>
          </div>
          <div class="jp_job_res jp_job_qua">
            <h2>Minimum qualifications</h2>
            <p>Lorerabitur aliquet quam id dui posuere blandit. Curabitur non nulla sit amet nisl tempus convallis
              quis ac lectus</p>
          </div>
          <div class="jp_job_apply">
            <h2>How To Apply</h2>
            <p>Praesent sapien massa.
            </p>
          </div> 
		  -->
		  
          <div class="jp_job_apply">
            <h2>Location</h2>
            <p><?php echo $job["location"] ?></p>
          </div>
        </div>
        <div class="jp_listing_left_bottom_sidebar_key_wrapper">
          <ul>
            <li>
              <i class="fa fa-tags"></i>Keywords :
            </li>
          <?php foreach(json_decode($job["keywords"]) as $keyword): ?>
            <li>
              <a href="#"><?php echo $keyword ?></a>
            </li>
          <?php endforeach ?>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="jp_rightside_job_categories_wrapper jp_rightside_listing_single_wrapper">
              <div class="jp_rightside_job_categories_heading">
                <h4>Job Overview</h4>
              </div>
              <!-- <div class="jp_jop_overview_img_wrapper">
                <div class="jp_jop_overview_img">
                  <img src="images/content/job_post_img1.jpg" alt="post_img" />
                </div>
              </div> -->
              <div class="jp_job_listing_single_post_right_cont">
                <div class="jp_job_listing_single_post_right_cont_wrapper">
                  <h4><?php echo $job["title"] ?></h4>
                  <p><?php echo $job["company"] ?></p>
                </div>
              </div>
              <div class="jp_job_post_right_overview_btn_wrapper">
                <div class="jp_job_post_right_overview_btn">
                  <ul>
                    <!-- <li>
                      <a href="#">
                        <i class="fa fa-heart-o"></i>
                      </a>
                    </li> -->
                    <li>
                      <a href="#"><?php echo $job["type"] ?></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="jp_listing_overview_list_outside_main_wrapper">
                <!-- <div class="jp_listing_overview_list_main_wrapper">
                  <div class="jp_listing_list_icon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <div class="jp_listing_list_icon_cont_wrapper">
                    <ul>
                      <li>Date Posted:</li>
                      <li>Octomber 02, 2017</li>
                    </ul>
                  </div>
                </div> -->
                <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                  <div class="jp_listing_list_icon">
                    <i class="fa fa-map-marker"></i>
                  </div>
                  <div class="jp_listing_list_icon_cont_wrapper">
                    <ul>
                      <li>Location:</li>
                      <li><?php echo $job["location"] ?></li>
                    </ul>
                  </div>
                </div>
                <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                  <div class="jp_listing_list_icon">
                    <i class="fa fa-info-circle"></i>
                  </div>
                  <div class="jp_listing_list_icon_cont_wrapper">
                    <ul>
                      <li>Job Title:</li>
                      <li><?php echo $job["title"] ?></li>
                    </ul>
                  </div>
                </div>
                <!-- <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                  <div class="jp_listing_list_icon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <div class="jp_listing_list_icon_cont_wrapper">
                    <ul>
                      <li>Hours:</li>
                      <li>40h / Week</li>
                    </ul>
                  </div>
                </div> -->
                <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                  <div class="jp_listing_list_icon">
                    <i class="fa fa-money"></i>
                  </div>
                  <div class="jp_listing_list_icon_cont_wrapper">
                    <ul>
                      <li>Salary:</li>
                      <li><?php echo json_decode($job["salary"])->min . " - " . json_decode($job["salary"])->max . " $" ?></li>
                    </ul>
                  </div>
                </div>
                <!-- <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                  <div class="jp_listing_list_icon">
                    <i class="fa fa-th-large"></i>
                  </div>
                  <div class="jp_listing_list_icon_cont_wrapper">
                    <ul>
                      <li>Category:</li>
                      <li>Developer</li>
                    </ul>
                  </div>
                </div> -->
                <div class="jp_listing_overview_list_main_wrapper jp_listing_overview_list_main_wrapper2">
                  <div class="jp_listing_list_icon">
                    <i class="fa fa-star"></i>
                  </div>
                  <div class="jp_listing_list_icon_cont_wrapper">
                    <ul>
                      <li>Experience:</li>
                      <li><?php echo $job["experience"] ?></li>
                    </ul>
                  </div>
                </div>
                <div class="jp_listing_right_bar_btn_wrapper">
                  <div class="jp_listing_right_bar_btn">
                    <form name="jobApplicationForm" id="jobApplicationForm">
                      <input type="hidden" name="v_id" id="v_id" value="<?php echo $_GET["id"]?>">
                      <input type="hidden" name="u_id" id="u_id" value="<?php if(isset($_SESSION["user_id"])){echo $_SESSION["user_id"];}; ?>">
                      <input id="jobApplicationButton" type="submit" value="APPLY NOW" class="btn btn-primary btn-lg" style="margin-top: 40px;">
                    </form>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- jp listing Single cont Wrapper End -->

<?php 

include "includes/footer.php";

?>