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
            <h2>Login</h2>
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
                <li>Login</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- jp Tittle Wrapper End -->

<!-- jp login wrapper start -->
<div class="login_section">
  <!-- login_form_wrapper -->
  <div class="login_form_wrapper">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <!-- login_wrapper -->
          <h1>LOGIN TO YOUR ACCOUNT</h1>
          <form name="loginForm" id="loginForm">
            <div class="login_wrapper">
              <div class="formsix-pos">
                <div class="form-group i-email">
                  <input type="text" class="form-control" required id="emailusername" placeholder="Email / Username*">
                </div>
              </div>
              <div class="formsix-e">
                <div class="form-group i-password">
                  <input type="password" class="form-control" required id="loginpassword" placeholder="Password *">
                </div>
              </div>
              <div class="login_btn_wrapper">
                <input type="submit" class="btn btn-primary login_btn" value="Login">
              </div>
              <div class="login_message">
                <p>Don’t have an account ?
                  <a href="register.php"> Register Now </a>
                </p>
              </div>
            </div>
          </form>
          <p>In case you are using a public/shared computer we recommend that you logout to prevent any un-authorized access
            to your account</p>
          <!-- /.login_wrapper-->
        </div>
      </div>
    </div>
  </div>
  <!-- /.login_form_wrapper-->
</div>
<!-- jp login wrapper end -->


<?php  

	include 'includes/footer.php';

	?>