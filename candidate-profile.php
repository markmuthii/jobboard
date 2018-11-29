<?php 
error_reporting(0);
session_start();
include 'includes/header.php';
include 'api/users.php';
$user_id;
if(isset($_GET["aid"])){
  $user_id = $_GET["aid"];
}else{
  $user_id = $_SESSION["user_id"];
}
$user = get_user_information($user_id);

// var_dump($user_id);
?>
	  <!-- jp Tittle Wrapper Start -->
    <div class="jp_tittle_main_wrapper">
        <div class="jp_tittle_img_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="jp_tittle_heading_wrapper">
                        <div class="jp_tittle_heading">
                            <h2>Profile</h2>
                        </div>
                        <div class="jp_tittle_breadcrumb_main_wrapper">
                            <div class="jp_tittle_breadcrumb_wrapper">
                                <ul>
                                    <li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
                                    <li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
                                    <li>Profile</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jp Tittle Wrapper End -->
    <!-- jp profile Wrapper Start -->
	<div class="jp_cp_profile_main_wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
					<div class="jp_cp_left_side_wrapper">
						<div class="jp_cp_left_pro_wallpaper">
							<!-- <img src="images/content/cp1.png" alt="profile_img"> -->
							<h2 style="margin-bottom: 20px"><?php echo $user["first_name"] . " " . $user["last_name"] ?></h2>
							<!-- <p>UI/UX Designer in Dewas</p> -->
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
							</ul>
						</div>
						<div class="jp_cp_rd_wrapper">
							<ul>
								<li><a href="<?php echo HOME_URL . "resumes/" . $user["resume"] ?>"><i class="fa fa-download"></i> 
                &nbsp;
                <?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "company"): ?>
                Download
                <?php else: ?>
                View
                <?php endif ?>
                Resume</a></li>
                <?php if(isset($_SESSION["type"]) && $_SESSION["type"] == "company"): ?>
								<li><a href="tel:<?php echo $user["phonenumber"]?>"><i class="fa fa-phone"></i> &nbsp;Contact candidate</a></li>
                <?php else:?>
                <li><a href="javascript:0" onclick="showEditForm()"><i class="fa fa-pencil"></i> &nbsp;Edit Profile</a></li>
                <?php endif ?>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
          <div id="userInformationWrapper">
            <div class="jp_cp_right_side_wrapper">
              <div class="jp_cp_right_side_inner_wrapper">
                <h2>PERSONAL DETAILS</h2>
                <table>
                  <tbody>
                      <tr>
                          <td class="td-w25">Full Name</td>
                          <td class="td-w10">:</td>
                          <td class="td-w65"><?php echo $user["first_name"] . " " . $user["last_name"] ?></td>
                      </tr>
                      <tr>
                          <td class="td-w25">Address</td>
                          <td class="td-w10">:</td>
                          <td class="td-w65">
                            <?php 
                            if($user["address"]) echo $user["address"]; else {echo "N/A"; if(isset($_SESSION["user_id"])) echo " - Please edit";}?>
                          </td>
                      </tr>
                      <tr>
                          <td class="td-w25">Zip Code</td>
                          <td class="td-w10">:</td>
                          <td class="td-w65">
                            <?php 
                            if($user["zip"]) echo $user["zip"]; else {echo "N/A"; if(isset($_SESSION["user_id"])) echo " - Please edit";}?>
                          </td>
                      </tr>
                      <tr>
                          <td class="td-w25">Phone</td>
                          <td class="td-w10">:</td>
                          <td class="td-w65"><?php echo $user["phonenumber"] ?></td>
                      </tr>
                      <tr>
                          <td class="td-w25">Email</td>
                          <td class="td-w10">:</td>
                          <td class="td-w65"><?php echo $user["email"] ?></td>
                      </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                  <h2>Qualifications</h2>
                  <p>
                  <?php 
                  if($user["qualifications"]) echo $user["qualifications"]; else {echo "N/A"; if(isset($_SESSION["user_id"])) echo " - Please edit";}?>
                  </p>
                </div>
              </div>

              <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="jp_cp_accor_heading_wrapper">
                  <h2>Experience</h2>
                  <p>
                  <?php 
                  if($user["experience"]) echo $user["experience"]; else {echo "N/A"; if(isset($_SESSION["user_id"])) echo " - Please edit";}?>
                  </p>
                </div>
              </div>
            </div>
          </div>
          
          <div id="profileEditFormWrapper">
            <div class="register_left_form">
              <div class="jp_regiter_top_heading edit-top">
                <p>Edit Your Profile Information </p>
              </div>
              <form name="userEditForm" id="userEditForm">
                <div class="row">
                  <!--Form Group-->
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" required id="editfirstname" name="firstname" placeholder="First Name *" value="<?php echo $user["first_name"] ?>">
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" required id="editlastname" name="lastname" placeholder="Last Name*" value="<?php echo $user["last_name"] ?>">
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="email" required id="editemail" name="email" placeholder=" Email *" value="<?php echo $user["email"] ?>">
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" required id="editphonenumber" name="phonenumber" placeholder="Phone Number *" value="<?php echo $user["phonenumber"] ?>">
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" required id="address" name="address" placeholder="Address *" value="<?php echo $user["address"] ?>">
                  </div>
                  <!--Form Group-->
                  <div class="form-group col-md-6 col-sm-6 col-xs-12">
                    <input type="text" required id="zipcode" name="zipcode" placeholder="Zipcode *" value="<?php echo $user["zip"] ?>">
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label for="qualifications">Qualifications</label>
                    <textarea name="qualifications" id="qualifications"><?php echo $user["qualifications"] ?></textarea>
                  </div>
                  <div class="form-group col-md-12 col-sm-12 col-xs-12">
                    <label for="experience">Experience</label>
                    <textarea name="experience" id="experience"><?php echo $user["experience"] ?></textarea>
                  </div>
                  <input type="hidden" name="userid" id="edituserid" value="<?php echo $_SESSION["user_id"] ?>">
                  <!--Form Group-->
                </div>
                <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                  <input type="submit" class="btn btn-success edit-btn" value="Edit">
                </div>
              </form>
            </div>
          </div>
				</div>
			</div>
		</div>
	</div>
    <!-- jp profile Wrapper End -->
<?php

include "includes/footer.php";

?>