<?php 
$title = "Contacts";
require 'header.php';

 ?>

    <!-- HEADER EOF   -->

    <!-- BEGIN CONTENT -->

    <main class="content">
			<!-- BEGIN CONTACTS MAIN BLOCK -->
			<section class="contacts-main detail-main">
				<div class="wrapper">
					<div class="contacts-main__content">
						<div class="contacts-main-decor1">
							<img src="en/img/contacts-main-decor1.png" srcset="/en/img/contacts-main-decor1.png 1x, /en/img/contacts-main-decor1-2x.png 2x" alt="">
						</div>
						<div class="contacts-main-decor2">
							<img src="en/img/contacts-main-decor2.png" srcset="/en/img/contacts-main-decor2.png 1x, /en/img/contacts-main-decor2-2x.png 2x" alt="">
						</div>
						<div class="top-text">
							<span class="top-text__descr">Be in touch</span>
							<h1>Contact us</h1>
							<p>
								Our financial company, which blends knowledge with love and then experience, is at your service 24/7
							</p>
                                                        						</div>
					</div>
				</div>
			</section>
			<!-- CONTACTS MAIN BLOCK EOF   -->
			<!-- BEGIN CONTACTS HELP -->
			<section class="contacts-help">
				<div class="wrapper">
					<div class="contacts-help__content">
						<div class="contacts-help__info">
							<h2>How can we help?</h2>
							<span class="contacts-help__info-subtitle">We’re here to help and answer any question you might have, <br> We look forward to hearing from you.</span>
							<div class="contacts-help__info-item">
								<img src="en/img/contacts-help__info-img1.png" 
								class="js-img" alt="">
								<span>Support</span>
								<p>Questions, concerns, or complaints? Let us know how we can help you.</p>
							</div>
							<div class="contacts-help__info-item">
								<img src="en/img/contacts-help__info-img2.png" 
								class="js-img" alt="">
								<span>Recommendations</span>
								<p>Do you have a feature request or a way to improve our platform? We’re interested to hear what you have to say.</p>
							</div>
							<div class="contacts-help__info-item">
								<img src="en/img/contacts-help__info-img3.png" 
								class="js-img" alt="">
								<span>General Inquiries</span>
								<p>For general questions or potential partnerships please contact us.</p>
							</div>
						</div>
						<!-- <div class="contacts-help__form">
							<form class="" id="form-contact" method="post" action="">
                                                                     
								<h4>Get in Touch</h4>
								<span class="form-subtitle">Have a question? Please contact us.</span>
								<div class="box-field">
									<span class="box-field__label">Email</span>
									<input type="email" class="form-control" name="email" placeholder="Enter your email">
								</div>
								<div class="box-field">
									<span class="box-field__label">Full Name</span>
									<input type="text" class="form-control" name="name" placeholder="Enter your name">
								</div>
								<div class="box-field">
									<span class="box-field__label">Subject</span>
									<select name="subject" class="styled">
										<option value="login">General questions</option>
										<option value="deposit">Affiliates & Advertisers</option>
										<option value="withdraw">Technical issues</option>
										<option value="other">Deposits & withdrawals</option>
										<option value="other">Other issues</option>
									</select>
								</div>
								<div class="box-field box-field__textarea">
									<span class="box-field__label">Message</span>
									<textarea class="form-control" name="msg"></textarea>
								</div>
								<div class='form-errors' style="margin-top: 10px;"></div>
                                                                <button class="btn" name="send" type="submit">Send Message</button>
							</form>
						</div> -->
					</div>
				</div>
			</section>
			<!-- CONTACTS HELP EOF   -->
			<!-- BEGIN CONTACTS CHAT -->
			<div class="contacts-chat">
				<div class="wrapper">
					<div class="contacts-chat__block">
						<div class="contacts-chat__block-decor">
							<img src="en/img/contacts-chat-decor.png" 
							class="js-img" alt="">
						</div>
						<div class="contacts-chat__block-decor2">
							<img src="en/img/contacts-chat__block-decor2.svg" 
							class="js-img" alt="">
						</div>
						<div class="contacts-chat__block-decor3">
							<img src="en/img/contacts-chat__block-decor3.svg" 
							class="js-img" alt="">
						</div>
						<div class="contacts-chat__main">
							<span class="contacts-chat__main-addr"><?= $site_title; ?></span>
							<span class="contacts-chat__main-title">Get in touch with us instantly using our Whatsapp Chat</span>
							<a href="https://wa.me/message/SSY2FRLXWQHMF1" class="btn">Whatsapp Us <i class="icon-send"></i></a>
							<img src="en/img/contacts-chat-img.png" 
							class="js-img" alt="">
						</div>
						<div class="contacts-chat__items">
							<div class="contacts-chat__item">
								<p>Hello</p>
								<span>11:43</span>
							</div>
							<div class="contacts-chat__item">
								<p>Hello. How can I help you?</p>
								<span>11:43 <i class="icon-check2"></i> </span>
							</div>
							<div class="contacts-chat__item">
								<p>I need help with choosing a deposit.</p>
								<span>11:44</span>
							</div>
							<div class="contacts-chat__item">
								<p>Of course. What exactly are you interested in?</p>
								<span>11:44 <i class="icon-check2"></i></span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- CONTACTS CHAT EOF   -->
			<!-- BEGIN LOCATION -->
			<section class="location">
				<div class="wrapper">
					<div class="top-text">
						<span class="top-text__descr">Location</span>
						<h2>Where we are</h2>
						<p>
							Find the <?= $site_title; ?> team in one of the amazing global cities we call home.
						</p>
					</div>
					<div class="location-items">
						<div class="location-item">
							<div class="location-item__img">
								<img src="en/img/location-item-img1.jpg" 
								class="js-img" alt="">
							</div>
							<span>United Kingdom</span>
							<p>Castle Meadows, Huish Champflower, Taunton, England</p>
						</div>
						<div class="location-item">
							<div class="location-item__img">
								<img src="en/img/location-item-img3.jpg" 
								class="js-img" alt="">
							</div>
							<span>Switzerland</span>
							<p>
								City Centre Stockerhof, Dreikönigstrasse 31A, <br>ZH8002, Zurich, Switzerland  
							</p>
                                                        <script src="https://www.w3counter.com/tracker.js?id=145497"></script>
						</div>
					</div>
				</div>
			</section>
			<!-- LOCATION EOF   -->
    </main>

    <!-- CONTENT EOF   -->

    <!-- BEGIN FOOTER -->

    
 <?php 

 require 'footer.php';
  ?>
