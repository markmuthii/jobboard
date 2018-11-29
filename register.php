<?php  

include 'includes/header.php';

?>
	<!-- jp Tittle Wrapper Start -->
	<div class="jp_tittle_main_wrapper">
		<div class="jp_tittle_img_overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class="jp_tittle_heading_wrapper">
						<div class="jp_tittle_heading">
							<h2>Register</h2>
						</div>
						<div class="jp_tittle_breadcrumb_main_wrapper">
							<div class="jp_tittle_breadcrumb_wrapper">
								<ul>
									<li><a href="#">Home</a> <i class="fa fa-angle-right"></i></li>
									<li><a href="#">Pages</a> <i class="fa fa-angle-right"></i></li>
									<li>Register</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jp Tittle Wrapper End -->

	<!-- jp register wrapper start -->
	<div class="register_section">
		<!-- register_form_wrapper -->
		<div class="register_tab_wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-10 col-md-offset-1">
						<div role="tabpanel">

							<!-- Nav tabs -->
							<ul id="tabOne" class="nav register-tabs">
								<li class="active"><a href="#userregistertab" data-toggle="tab">Personal account <br> <span>i am looking for a job</span></a>
								</li>
								<li><a href="#companyregistertab" data-toggle="tab">Company account <br> <span>We are hiring Employees</span></a>
								</li>
							</ul>

							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane fade in active register_left_form" id="userregistertab">
									
									<div class="jp_regiter_top_heading">
										<p>Fields with * are mandatory </p>
									</div>
                  <form name="userRegForm" id="userRegForm" enctype="multipart/form-data">
                    <div class="row">
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" required id="userfirstname" name="firstname" placeholder="First Name *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" required id="userlastname" name="lastname" placeholder="Last Name*">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="email" required id="useremail" name="email" placeholder=" Email *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" required id="userphonenumber" name="phonenumber" placeholder="Phone Number *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" required id="userusername" name="userusername" placeholder="Username *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="password" required id="userpassword" name="password" placeholder="Password *">
                      </div>
                      <input type="hidden" required id="userrole" name="userrole" id="role" value="jobseeker">
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12 custom_input">
                        <label for="userresume">Resume</label>
                        <input type="file" id="userresume" name="resume" required>
                      </div>
                    </div>
                    <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                      <input type="submit" class="btn btn-primary login_btn" value="Register">
                    </div>
                  </form>

									
									<div class="login_message">
										<p>Already a member? <a href="login.php"> Login Here </a> </p>
									</div>
								</div>

								<div class="tab-pane fade register_left_form" id="companyregistertab">

									<div class="jp_regiter_top_heading">
										<p>Fields with * are mandatory </p>
									</div>
                  <form name="companyRegForm" id="companyRegForm">
                    <div class="row clearfix">
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="companyname" name="companyname" placeholder="Company Name*">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="email" id="companyemail" name="companyemail" placeholder="Email *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="companyphonenumber" name="companyphonenumber" placeholder="Phone Number *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="password" id="companypassword" name="companypassword" placeholder="Password *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <textarea id="companydescription" name="companydescription" id="companydescription" placeholder="Company Description *" cols="30" rows="10"></textarea>
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="companywebsite" name="companywebsite" placeholder="Website *">
                      </div>
                      <!--Form Group-->
                      <div class="form-group col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="companyaddress" name="companyaddress" placeholder="Address *">
                      </div>

                    </div>
                    <div class="login_btn_wrapper register_btn_wrapper login_wrapper ">
                      <input type="submit" class="btn btn-primary login_btn" value="Register Company">
                    </div>
                  </form>
									
									<div class="login_message">
										<p>Already registered? <a href="login.php">Login Here</a></p>
									</div>

								</div>

							</div>
							<p class="btm_txt_register_form">In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access to your account</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- jp register wrapper end -->
<?php  

include 'includes/footer.php';

?>