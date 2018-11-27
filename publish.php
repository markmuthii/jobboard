<?php 
session_start();

if (!isset($_SESSION["type"]) || $_SESSION["type"] != "company") {
  header("Location: ./");
  exit();
}

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
            <h2>Add Vacancy</h2>
          </div>
          <div class="jp_tittle_breadcrumb_main_wrapper">
            <div class="jp_tittle_breadcrumb_wrapper">
              <ul>
                <li>
                  <a href="#">Home</a>
                  <i class="fa fa-angle-right"></i>
                </li>
                <li>Add Vacancy</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- jp Tittle Wrapper End -->
<!-- jp ad post Wrapper Start -->
<div class="jp_adp_main_section_wrapper">
  <div class="container">
    <form name="publishVacancyForm" id="publishVacancyForm">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <div class="jp_adp_form_heading_wrapper">
            <h2>Job Details</h2>
          </div>
          <div class="jp_adp_form_wrapper">
            <input type="text" name="jobtitle" id="jobtitle" placeholder="Job Title *">
          </div>
          <div class="jp_adp_form_wrapper">
            <input type="text" name="location" id="location" placeholder="Location *">
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
              <div class="jp_adp_form_wrapper">
                <input type="text" name="salarymin" id="salarymin" placeholder="Salary Min *">
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-md-6 col-xs-12">
              <div class="jp_adp_form_wrapper">
                <input type="text" name="salarymax" id="salarymax" placeholder="Salary Max *">
              </div>
            </div>
          </div>
          <div class="jp_adp_form_wrapper">
            <input type="text" name="experience" id="experience" placeholder="Experience *">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 bottom_line_Wrapper">
          <div class="jp_adp_form_heading_wrapper">
            <p>Fields with * are mandatory</p>
          </div>
          <div class="jp_adp_form_wrapper">
            <input type="text" name="jobcategory" id="jobcategory" placeholder="Category *">
          </div>
          <div class="jp_adp_form_wrapper">
            <select name="jobtype" id="jobtype">
              <option value="0">-- Job Type * --</option>
              <option value="part time">Part Time</option>
              <option value="full time">Full Time</option>
              <option value="contract">Contract</option>
              <option value="remote">Remote</option>
              <option value="temporary">Temporary</option>
            </select>
          </div>
          <div class="jp_adp_form_wrapper">
            <input type="text" name="skills" id="skills" placeholder="Skills required *">
          </div>
          <div class="jp_adp_form_wrapper">
            <input type="text" name="keywords" id="keywords" placeholder="Keywords *">
          </div>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="jp_adp_textarea_main_wrapper">
            <textarea rows="7" name="jobdescription" id="jobdescription" placeholder="Job Description *"></textarea>
          </div>
        </div>
        <input type="hidden" name="companyid" id="companyid" value="<?php echo $_SESSION["companyid"] ?>">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <input name="jobpublish" type="submit" value="Post Job" class="btn btn-primary btn-lg">
        </div>
      </div>
    </form>
  </div>
</div>
<!-- jp ad post Wrapper End -->

<?php

  include "includes/footer.php";

?>