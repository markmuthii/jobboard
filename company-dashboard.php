<?php 
error_reporting(0);
session_start();
include "includes/header.php";
include "api/users.php";

$company_id = $_SESSION["companyid"] != NULL ? $_SESSION["companyid"] : "";
$applicants = get_applicants_by_company_id($company_id);

// foreach ($applicants as $applicant) {
//   var_dump($applicant);
// }
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
        <h2>Candidates who have applied to your vacancies</h2>
      </div>
    </div>
    
    <?php foreach($applicants as $applicant): ?>
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 applicant-wrapper">
        <div class="applicant-name">
          <span class="applicant-name">Name:</span><h3><?php echo $applicant["fname"] . " " . $applicant["lname"]?></h3>
        </div>
        <div class="application-vacancy">
          <span class="job-title">Applied For:</span><h4><?php echo $applicant["vacancy"] ?></h4>
        </div>
        <a href="<?php echo HOME_URL . "profile.php?aid=" . $applicant["aid"]?>" class="btn btn-primary btn-lg">View Candidate</a>
      </div>
    <?php endforeach ?>

    <!-- <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 applicant-wrapper">
      <div class="applicant-name">
        <span class="applicant-name">Name:</span><h3>Mark Muthii</h3>
      </div>
      <div class="application-vacancy">
        <span class="job-title">Applied For:</span><h4>Junior Dev</h4>
      </div>
      <a href="#" class="btn btn-primary btn-lg">View Candidate</a>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 applicant-wrapper">
      <div class="applicant-name">
        <span class="applicant-name">Name:</span><h3>Mark Muthii</h3>
      </div>
      <div class="application-vacancy">
        <span class="job-title">Applied For:</span><h4>Junior Dev</h4>
      </div>
      <a href="#" class="btn btn-primary btn-lg">View Candidate</a>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 applicant-wrapper">
      <div class="applicant-name">
        <span class="applicant-name">Name:</span><h3>Mark Muthii</h3>
      </div>
      <div class="application-vacancy">
        <span class="job-title">Applied For:</span><h4>Junior Dev</h4>
      </div>
      <a href="#" class="btn btn-primary btn-lg">View Candidate</a>
    </div>

    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 applicant-wrapper">
      <div class="applicant-name">
        <span class="applicant-name">Name:</span><h3>Mark Muthii</h3>
      </div>
      <div class="application-vacancy">
        <span class="job-title">Applied For:</span><h4>Junior Dev</h4>
      </div>
      <a href="#" class="btn btn-primary btn-lg">View Candidate</a>
    </div> -->
  </div>
</div>


<?php 

include "includes/footer.php";

?>