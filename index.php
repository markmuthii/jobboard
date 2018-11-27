<?php
error_reporting(0);
include "api/jobs.php";
include "includes/header.php";
$all_jobs = get_all_jobs();
$jobs_number = $all_jobs->num_rows;

?>
  <div class="jp_bottom_footer_Wrapper_header_img_wrapper">
    <div class="jp_slide_img_overlay"></div>
    <div class="jp_banner_heading_cont_wrapper">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="jp_job_heading_wrapper">
              <div class="jp_job_heading">
                <h1>
                  <span>3,000+</span> Browse Jobs</h1>
                <p>Find Jobs, Employment & Career Opportunities</p>
              </div>
            </div>
          </div>
          <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="jp_banner_main_jobs_wrapper">
              <div class="jp_banner_main_jobs">
                <ul>
                  <li>
                    <i class="fa fa-tags"></i> Trending Keywords :</li>
                  <li>
                    <a href="#">ui designer,</a>
                  </li>
                  <li>
                    <a href="#">developer,</a>
                  </li>
                  <li>
                    <a href="#">senior</a>
                  </li>
                  <li>
                    <a href="#">it company,</a>
                  </li>
                  <li>
                    <a href="#">design,</a>
                  </li>
                  <li>
                    <a href="#">call center</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header W rapper End -->
  <!-- jp listing sidebar Wrapper Start -->
  <div class="jp_listing_sidebar_main_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="jp_listing_heading_wrapper">
            <h2>We found
              <span><?php echo $jobs_number; ?></span> Matches for you.
            </h2>
          </div>
        </div>
        <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div id="listResults">
                <div class="row">
                <?php foreach($all_jobs as $job): ?>
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
                <?php endforeach ?>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 hidden-sm hidden-xs">
          <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="jp_rightside_job_categories_wrapper">
                <div class="jp_rightside_job_categories_heading">
                  <h4>Jobs by Category</h4>
                </div>
                <div class="jp_rightside_job_categories_content">
                  <div class="handyman_sec1_wrapper">
                    <div class="content">
                      <div class="box">
                        <p>
                          <input type="checkbox" id="c101" name="cb">
                          <label for="c101">Graphic Designer
                            <span>(214)</span>
                          </label>

                          <p>
                            <input type="checkbox" id="c102" name="cb">
                            <label for="c102">Engineering Jobs
                              <span>(514)</span>
                            </label>
                          </p>
                          <p>
                            <input type="checkbox" id="c103" name="cb">
                            <label for="c103">Mainframe Jobs
                              <span>(554)</span>
                            </label>
                          </p>
                          <p>
                            <input type="checkbox" id="c104" name="cb">
                            <label for="c104">Legal Jobs
                              <span>(457)</span>
                            </label>
                          </p>
                          <p>
                            <input type="checkbox" id="c105" name="cb">
                            <label for="c105">IT Jobs
                              <span>(1254)</span>
                            </label>
                          </p>
                          <p>
                            <input type="checkbox" id="c106" name="cb">
                            <label for="c106">R&D Jobs
                              <span>(554)</span>
                            </label>
                          </p>
                          <p>
                            <input type="checkbox" id="c107" name="cb">
                            <label for="c107">Government Jobs
                              <span>(350)</span>
                            </label>
                          </p>
                          <p>
                            <input type="checkbox" id="c108" name="cb">
                            <label for="c108">PSU Jobs
                              <span>(221)</span>
                            </label>
                          </p>
                      </div>
                    </div>
                    <ul>
                      <li>
                        <i class="fa fa-plus-circle"></i>
                        <a href="#">SHOW MORE</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  </div>
  <!-- jp listing sidebar Wrapper End -->

  <?php

  include "includes/footer.php";

  ?>