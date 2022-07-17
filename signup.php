<?php 
require 'auth.php';

 ?>


<!DOCTYPE html>
<html>


<!-- Mirrored from coynex.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jun 2021 18:59:31 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from www.<?= $site_title; ?>.com/signup.php by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 27 Nov 2021 17:19:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<title>Register New Account | Bitcoin Investment | Cryptocurrency Investment | Etherium Investment</title>
	<meta name='description' content="" />
	<meta name="keywords" content="" />
	<link rel="icon" type="image/x-icon" href="en/img/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="en/css/style.css" />
    <script type="text/javascript" src="user/js/sweetalert.min.js"></script>
        <style>
            
            * {
  box-sizing: border-box;
}

#google_translate_element {
  z-index: 9999999;
  position: fixed;
  bottom: 25px;
  left: 15px;
}

.goog-te-gadget {
  font-family: Roboto, "Open Sans", sans-serif !important;
  text-transform: uppercase;
}

.goog-te-gadget-simple {
  background-color: rgba(0, 0, 0, 0.5) !important;
  border: 1px solid rgba(255, 255, 255, 0.5) !important;
  padding: 3px !important;
  border-radius: 4px !important;
  font-size: 0.8rem !important;
  line-height: 2rem !important;
  display: inline-block;
  cursor: pointer;
  zoom: 1;
  margin-bottom: 4px;
}

.goog-te-menu2 {
  max-width: 100%;
}

.goog-te-menu-value {
  color: #fff !important;
}
.goog-te-menu-value:before {
  font-family: 'Material Icons';
  content: "\E927";
  margin-right: 16px;
  font-size: 2rem;
  vertical-align: -10px;
}

.goog-te-menu-value span:nth-child(5) {
  display: none;
}

.goog-te-menu-value span:nth-child(3) {
  border: none !important;
  font-family: 'Material Icons';
}
.goog-te-menu-value span:nth-child(3):after {
  font-family: 'Material Icons';
  content: "\E5C5";
  font-size: 1.5rem;
  vertical-align: -6px;
}

.goog-te-gadget-icon {
  background-position: 0px 0px;
  height: 32px !important;
  width: 32px !important;
  margin-right: 8px !important;
  display: none;
}

.goog-te-banner-frame.skiptranslate {
  display: none !important;
}


body {
  top: 0px !important;
}

/* ================================== *\
    Mediaqueries
\* ================================== */
@media (max-width: 667px) {
  #google_translate_element {
  }
  #google_translate_element goog-te-gadget {
  }
  #google_translate_element .skiptranslate {
  }
  #google_translate_element .goog-te-gadget-simple {
    text-align: center;
  }
}
p {
    font-size: 1rem;
}
        </style>
        
        <style>
            .lead {
    font-size: 1rem;
    font-weight: 300;
}
            span{
                
            }
            .btn-custom {
  color: #bdc3c7;
  font-size: 18px;
  border: 1px solid #bdc3c7;
}
.btn-custom:hover {
  color: #ffffff;
  border: 1px solid #ffffff;
}
.rounded-lg {
  border-radius: 1rem !important;
}

.text-small {
  font-size: 0.9rem !important;
}

.custom-separator {
  width: 5rem;
  height: 6px;
  border-radius: 1rem;
}




.cah2 {
	color: #0998ec;
	font-size: 20px;
	font-weight: 800;
	text-align: center;
	text-transform: uppercase;
	position: relative;
}
.cah2::after {
	content: "";
	width: 100px;
	position: absolute;
	margin: 0 auto;
	height: 4px;
	border-radius: 1px;
	background: #0998ec;
	left: 0;
	right: 0;
	bottom: -20px;
}
.carousel_test {
	margin: 50px auto;
	padding: 0 10px;
}
.carousel_test .item {
	color: #ffffff;
	overflow: hidden;
    min-height: 120px;
	font-size: 13px;
}
.carousel_test .media img {
	width: 40px;
	height: 40px;
	display: block;
	border-radius: 50%;
}
.carousel_test .testimonial {
	padding: 0 10px 0 10px ;
	position: relative;
}
.carousel_test .overview b {
	text-transform: uppercase;
	color: #0998ec;
}

@media screen and (max-width: 992px) {
  .me_table::-webkit-scrollbar {
  display: none !important;
  overflow-x: scroll;
}

.rem-home{
        padding: 9rem 0 5rem 0;
    } 
    
@media screen and (max-width: 992px) {
    .rem-home{
        padding: 6rem 0 5rem 0;
    } 
}

/* Hide scrollbar for IE and Edge */
.me-table {
  -ms-overflow-style: none !important;
  overflow-x: scroll;
}
}

.me_icon {
    margin-top: 10px;
    color: #fff;
}

.token_rtinfo {
    color: #fff;
    border-radius: 10px;
    box-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
    margin-top: -80px;
    padding: 40px 15px;
    background-color: rgba(255,255,255,0.10);
    box-shadow: none !important;
}

.token_rt_value {
    padding: 0 25px;
}

.me_big{
    font-size: 1rem !important;
    line-height: normal !important;
}

.tradingview-widget-copyright{
    display: none !important;
}

.badge {
    border-radius: 50px;
    padding: 0.2rem 1rem;
    color: #fff;
    text-align: center;
}

.pricing-rate sup {
  font-size: 24px;
  position: relative;
  left: -20px;
  top: -30px;
}

.pricing-rate span {
  font-size: 12px;
  color: #707070;
  text-transform: uppercase;
  right: -600px;
}

.pricing-rate {
  font-size: 70px;
  font-weight: 700;
  color: #1a2c79;
  position: relative;
  text-align: center;
}



            
        </style>


        
</head>

<body class="loaded">


	<!-- BEGIN BODY -->

	<div class="main-wrapper">
        <script src="https://www.w3counter.com/tracker.js?id=145497"></script>

		<!-- BEGIN CONTENT -->

		<main class="content">

            <!-- BEGIN SIGNUP -->
            <div class="login">
                <div class="login-top">
                    <a href="index" class="login-logo">
                        <img src="<?= $site_logo2; ?>" class="js-img" alt="">
                    </a>
                    <!-- <div class="login-lang">
                        <i class="icon-lang"></i>
                        English                    </div> -->
                </div>
                <div class="login-content">
                    <?php 
                    if (isset($_POST['sign-up'])) {
                        $register = register_user($_POST);
                        if ($register != false) {
                            $to = $_POST['email'];
                            $fname = $_POST['fname'];
                            // $name = "Galaxy Digital Support";
                            $subject = "Account Verification";
                            $body = "<!DOCTYPE html>
                            <html lang='en' xmlns='http://www.w3.org/1999/xhtml' xmlns:o='urn:schemas-microsoft-com:office:office'>
                            <head>
                                <meta charset='utf-8'>
                              <meta name='viewport' content='width=device-width,initial-scale=1'>
                              <meta name='x-apple-disable-message-reformatting'>
                              <title></title>
                                <!--[if mso]>
                              <style>
                                table {border-collapse:collapse;border-spacing:0;border:none;margin:0;}
                                div, td {padding:0;}
                                div {margin:0 !important;}
                                </style>
                              <noscript>
                                <xml>
                                  <o:OfficeDocumentSettings>
                                    <o:PixelsPerInch>96</o:PixelsPerInch>
                                  </o:OfficeDocumentSettings>
                                </xml>
                              </noscript>
                              <![endif]-->
                              <style>
                                table, td, div, h1, p {
                                  font-family: Arial, sans-serif;
                                }
                                @media screen and (max-width: 530px) {
                                  .unsub {
                                    display: block;
                                    padding: 8px;
                                    margin-top: 14px;
                                    border-radius: 6px;
                                    background-color: #555555;
                                    text-decoration: none !important;
                                    font-weight: bold;
                                  }
                                  .col-lge {
                                    max-width: 100% !important;
                                  }
                                }
                                @media screen and (min-width: 531px) {
                                  .col-sml {
                                    max-width: 27% !important;
                                  }
                                  .col-lge {
                                    max-width: 73% !important;
                                  }
                                }
                              </style>
                            </head>
                            <body style='margin:0;padding:0;word-spacing:normal;background-color:#939297;'>
                              <div role='article' aria-roledescription='email' lang='en' style='text-size-adjust:100%;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;background-color:#fff;'>
                                <table role='presentation' style='width:100%;border:none;border-spacing:0;'>
                                  <tr>
                                    <td align='center' style='padding:0;'>
                                      <!--[if mso]>
                                      <table role='presentation' align='center' style='width:600px;'>
                                      <tr>
                                      <td>
                                      <![endif]-->
                                      <table role='presentation' style='width:94%;max-width:600px;border:none;border-spacing:0;text-align:left;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;'>
                                        <tr>
                                          <td style='padding:40px 30px 30px 30px;text-align:center;font-size:24px;font-weight:bold;'>
                                            <a href='$site_url' style='text-decoration:none;'><img src='$site_logo' width='165' style='width:80%;max-width:165px;height:auto;border:none;text-decoration:none;color:#ffffff;'></a>
                                          </td>
                                        </tr>
                                        
                                        <tr>
                                          <td style='padding:35px 30px 11px 30px;font-size:0;background-color:#ffffff;border-bottom:1px solid #f0f0f5;border-color:rgba(201,201,207,.35);'>
                                            <!--[if mso]>
                                            <table role='presentation' width='100%'>
                                            <tr>
                                            <td style='width:145px;' align='left' valign='top'>
                                            <![endif]-->
                                            <div class='col-sml' style='display:inline-block;width:100%;max-width:145px;vertical-align:top;text-align:left;font-family:Arial,sans-serif;font-size:14px;color:#363636;'>
                                              <img src='$favicon' width='115' height='90' alt='' style='width:80%;max-width:115px;margin-bottom:20px;'>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            <td style='width:395px;padding-bottom:20px;' valign='top'>
                                            <![endif]-->
                                            <div class='col-lge' style='display:inline-block;width:100%;max-width:395px;vertical-align:top;padding-bottom:20px;font-family:Arial,sans-serif;font-size:16px;line-height:22px;color:#363636;'>
                                              <p style='margin-top:0;margin-bottom:12px;'>Investing with us is a very simplified process, and our 24/7 Customer Care Livechat is available to attend to your issues. Click the Button below to Verify your Email</p>

                                              <p style='margin:0;'><a href='$site_url/user/activate?actc=$register' style='background: #ff3884; text-decoration: none; padding: 10px 25px; color: #ffffff; border-radius: 4px; display:inline-block; mso-padding-alt:0;text-underline-color:#ff3884'><!--[if mso]><i style='letter-spacing: 25px;mso-font-width:-100%;mso-text-raise:20pt'>&nbsp;</i><![endif]--><span style='mso-text-raise:10pt;font-weight:bold;'>Verify your Email</span><!--[if mso]><i style='letter-spacing: 25px;mso-font-width:-100%'>&nbsp;</i><![endif]--></a></p>
                                            </div>
                                            <!--[if mso]>
                                            </td>
                                            </tr>
                                            </table>
                                            <![endif]-->
                                          </td>
                                        </tr>
                                        
                                        
                                        <tr>
                                          <td style='padding:30px;text-align:center;font-size:12px;background-color:#404040;color:#cccccc;'>
                                            
                                            <p style='margin:0;font-size:14px;line-height:20px;'>&reg; $site_title, $company_address.</p>
                                          </td>
                                        </tr>
                                      </table>
                                      <!--[if mso]>
                                      </td>
                                      </tr>
                                      </table>
                                      <![endif]-->
                                    </td>
                                  </tr>
                                </table>
                              </div>
                            </body>
                            </html>";
                            $welcome_mail = send_mail($to, $fname, $subject, $body);
                            // $welcome_mail = true;
                            if ($welcome_mail) {
                                echo "<script>swal('Successfully Registered!', 'Welcome to $site_title! Check your Email for Verification', 'success');</script>";    
                            }else{
                                echo "<script>swal('Successfully Registered!', 'Welcome to $site_title!', 'success');</script>";
                            }
                        }else{
                            echo "<script>swal('Failed!', 'Fill All Fields and Try Again!', 'warning');</script>";
                        }
                    }
                     ?>
                    <form class="login-form" method="post" action="">
                        <h3 class="login-form__title">Sign Up</h3>
						<span class="login-form__subtitle">Join us and start making money right now.</span>
						<div class="box-field">
							<span class="box-field__label">First Name</span>
							<input type="text" class="form-control" placeholder="Enter First Name" name="fname">
						</div>
                        <div class="box-field">
                            <span class="box-field__label">Last Name</span>
                            <input type="text" class="form-control" placeholder="Enter your Last Name" name="lname">
                        </div>
						<div class="box-field">
							<span class="box-field__label">Email</span>
							<input type="email" class="form-control" placeholder="Enter Email" name="email" placeholder="Enter your email">
						</div>
                        <div class="box-field">
                            <span class="box-field__label">Gender</span>
                            <select class="form-control" name="gender">
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                        <div class="box-field box-field__password">
							<span class="box-field__label">Password</span>
                            <input type="password" class="form-control" placeholder="4+ characters" name="password" minlength="4">
                            <span class="box-field__password-eye"><i class="icon-eye-closed"></i></span>
						</div>
                            <div class="box-field box-field__password">
							<span class="box-field__label">Confirm Password</span>
                            <input type="password" class="form-control" placeholder="4+ characters" name="password2" minlength="4">
                            <span class="box-field__password-eye"><i class="icon-eye-closed"></i></span>
						</div>
                        <div class="box-field">
							<span class="box-field__label">Referral ID(Optional)</span>
                            <input type="text" class="form-control" placeholder="Referral ID" name="ref" value="">
						</div>
                        <div class="box-field">
                            <span class="box-field__label">Select Plan</span>
                            <select class="form-control" name="plan">
                                <option value="STANDARD">STANDARD PLAN</option>
                                <option value="DICE">DICE PLAN</option>
                                <option value="PREMIUM">PREMIUM PLAN</option>
                                <option value="GOLDEN">GOLDEN PLAN</option>
                            </select>
                        </div>

						<div class='form-errors'></div>
                        <button class="btn" type="submit" name="sign-up">Sign Up</button>
						<span class="login-form__agree">
							By continuing, you agree to <?= $site_title; ?>'s<br>
							<a href="terms-of-use">Terms and Conditions</a> and <a href="privacy-policy">Privacy Policy</a> 
						</span>
						<span class="login-form__add">Already have an account? <a href="login">Log In</a></span>
					</form>
                </div>
                <div class="login-bottom">
                    <span>&copy; <?= $site_title; ?> · </span>
				    <a href="contacts">Contact</a>
                </div>
            </div>
            <!-- SIGNUP EOF   -->
			
		</main>

		<!-- CONTENT EOF   -->
	</div>

	<div class="icon-load"></div>

	<!-- BODY EOF   -->

	<script src="en/js/jquery-3.5.1.min.js"></script>
	<script src="en/js/components/lazyload.min.js"></script>
	<script src="en/js/components/jquery.maskedinput.js"></script>
	<script src="en/js/components/jquery.validate.js"></script>
	<script src="en/js/custom.js"></script>
</body>


<!-- Mirrored from coynex.com/signup by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jun 2021 18:59:31 GMT -->

<!-- Mirrored from www.<?= $site_title; ?>.com/signup.php by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 27 Nov 2021 17:19:11 GMT -->
</html>
