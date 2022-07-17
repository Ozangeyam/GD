<?php 
require 'auth.php';

 ?>


<!DOCTYPE html>
<html>


<!-- Mirrored from coynex.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jun 2021 18:59:31 GMT -->
<!-- Added by HTTrack -->
<!-- Mirrored from www.<?= $site_title; ?>.com/login.php by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 27 Nov 2021 17:19:11 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="format-detection" content="telephone=no">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, maximum-scale=1">
	<title>Login | <?= $site_title; ?> | Bitcoin Investment And Cryptocurrency Trade  | <?= $site_title; ?> | Bitcoin Investment | Cryptocurrency Investment | Etherium Investment</title>
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

<script src="https://www.w3counter.com/tracker.js?id=145497"></script>

	<!-- BEGIN BODY -->

	<div class="main-wrapper">

		<!-- BEGIN CONTENT -->

		<main class="content">

            <!-- BEGIN LOGIN -->
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
                    if (isset($_POST['sign-in'])) {
                        $login = login_user($_POST);
                        if ($login === true) {
                            $user_id = $_SESSION['id'];
                            $user_id = sanitize($user_id);
                            $response = fetch_user($user_id);

                            if ($response) {
                                $user = $response;
                                $fchar = substr($user['name'], 0, 1);

                                header("Location: user/dashboard");
                            }
                        }else{
                            echo "<script>swal('Login Failed!', 'Try Again!', 'warning');</script>";
                            }
                    }
                     ?>
                    <form class="login-form" method="post" action="">
                        <h3 class="login-form__title">Log In</h3>
						<span class="login-form__subtitle">Welcome back to <?= $site_title; ?>. Log in to get going.</span>
						<div class="box-field">
							<span class="box-field__label">Email</span>
							<input type="text" class="form-control" placeholder="Your Email" name="email">
						</div>
						<div class="box-field box-field__password">
							<span class="box-field__label">Password <a href="./user/recover" class="box-field__password-link">Forgot password?</a></span>
							<input type="password" class="form-control" placeholder="Your password" name="password" minlength="4">
							<span class="box-field__password-eye"><i class="icon-eye-closed"></i></span>
						</div>
						<div class='form-errors'></div>
                        <button class="btn" type="submit" name="sign-in">Log In</button>
						<span class="login-form__agree">
							If you have any problems logging into your account,<br>
							please <a href="contacts">contact support</a>.
						</span>
						<span class="login-form__add">Don't have an account? <a href="signup">Sign up</a></span>
					</form>
                </div>
                <div class="login-bottom">
                    <span>&copy; <?= $site_title; ?> · </span>
				    <a href="contacts">Contact</a>
                </div>
            </div>
            <!-- LOGIN EOF   -->
			
		</main>

		<!-- CONTENT EOF   -->
	</div>

	<div class="icon-load"></div>

	<!-- BODY EOF   -->
        <script src="https://www.w3counter.com/tracker.js?id=145497"></script>

	<script src="en/js/jquery-3.5.1.min.js"></script>
	<script src="en/js/components/lazyload.min.js"></script>
	<script src="en/js/components/jquery.maskedinput.js"></script>
	<script src="en/js/components/jquery.validate.js"></script>
	<script src="en/js/custom.js"></script>
</body>


<!-- Mirrored from coynex.com/login by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 30 Jun 2021 18:59:32 GMT -->

<!-- Mirrored from www.<?= $site_title; ?>.com/login.php by HTTrack Website Copier/3.x [XR&CO'2017], Sat, 27 Nov 2021 17:19:11 GMT -->
</html>
