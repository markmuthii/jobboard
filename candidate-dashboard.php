<?php 
error_reporting(0);
session_start();
include "api/jobs.php";
include "includes/header.php";
$jobs_applied = get_jobs_applied_by($_SESSION["user_id"]);

?>

<!-- jp Tittle Wrapper Start -->
<div class="jp_tittle_main_wrapper">
  <div class="jp_tittle_img_overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="jp_tittle_heading_wrapper">
          <div class="jp_tittle_heading">
            <h2>Dashboard</h2>
          </div>
          <div class="jp_tittle_breadcrumb_main_wrapper">
            <div class="jp_tittle_breadcrumb_wrapper">
              <ul>
                <li>
                  <a href="#">Home</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>
                  <a href="#">Pages</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>Dashboard</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- jp Tittle Wrapper End -->

<div class="container" style="margin-bottom:50px">
  <div class="row">

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="jp_listing_heading_wrapper">
      <h2>Vacancies you have applied to</h2>
    </div>
  </div>

    <?php foreach($jobs_applied as $job): ?>
    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div id="listResults">
            <div class="row">
            
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="jp_job_post_main_wrapper_cont jp_job_post_grid_main_wrapper_cont">
                  <div class="jp_job_post_main_wrapper">
                    <div class="row">
                      <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                        <!-- <div class="jp_job_post_side_img">
                          <img src="images/content/job_post_img5.jpg" alt="post_img" />
                        </div> -->
                        <div class="jp_job_post_right_cont">
                          <h4><?php echo $job["title"] ?></h4>
                          <p><?php echo $job["company"] ?>.</p>
                          <ul>
                            <li>
                              <i class="fa fa-cc-paypal"></i>&nbsp; <?php echo json_decode($job["salary"])->min . " - " . json_decode($job["salary"])->max . " $"?></li>
                            <li>
                              <i class="fa fa-map-marker"></i>&nbsp; <?php echo $job["location"] ?></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="jp_job_post_right_btn_wrapper">
                          <ul>
                            <li>
                              <!-- <a href="#">
                                <i class="fa fa-heart-o"></i>
                              </a> -->
                            </li>
                            <li>
                              <a href="#"><?php echo $job["type"] ?></a>
                            </li>
                            <li>
                              <a href="listing.php?id=<?php echo $job["id"] ?>">View</a>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="jp_job_post_keyword_wrapper">
                    <ul>
                      <li>
                        <i class="fa fa-tags"></i>Keywords :</li>
                    <?php foreach(json_decode($job["keywords"]) as $keyword): ?>
                      <li>
                        <a href="#"><?php echo $keyword ?></a>
                      </li>
                    <?php endforeach ?>
                    </ul>
                  </div>
                </div>
              </div>
            
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach ?>
  </div>
</div>

<?php 

include "includes/footer.php";

?>