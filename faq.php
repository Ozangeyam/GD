<?php 
$title = "FAQ";
require 'header.php';

 ?>
    <!-- HEADER EOF   -->

    <!-- BEGIN CONTENT -->

    <main class="content">
			<!-- BEGIN FAQ -->
			<section class="faq">
				<div class="wrapper">
					<div class="faq-content">
						<div class="faq-decor1">
							<img src="en/img/faq-decor1.png" srcset="/en/img/faq-decor1.png 1x, /en/img/faq-decor1-2x.png 2x" alt="">
						</div>
						<div class="faq-decor2">
							<img src="en/img/faq-decor2.png" srcset="/en/img/faq-decor2.png 1x, /en/img/faq-decor2-2x.png 2x" alt="">
						</div>
						<div class="top-text">
							<span class="top-text__descr">Answers</span>
							<h2>Frequently Asked Questions</h2>
							<p>
								We have the resume answers you’re looking for, in more ways than one.
							</p>
						</div>
					</div>
					<div class="faq-items">
						<div class="faq-col">
							<div class="faq-item">
								<div class="faq-item__head">
									Are you a legitimate company?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Yes, we are incorporated as a legal company located in Australia. Company name: <?= $site_title; ?> LTD. Office address: Castle Meadows, Huish Champflower, Taunton, Englan.... Company certificate: <a target="_blank" href="<?= $cert ?>">Click here</a>. </p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									How to join <?= $site_title; ?>.com and is it free?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Please register <a href="signup.html">here</a>, fill in the form and proceed to sign-in page. Registration process is completely free and quick.</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									Can I own multiple accounts?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>No, every account must have different owner.</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									What investment plans are currently available?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>We have investment plans to choose from. 
									<br><br>
									Example: You made a deposit to the plan providing 110% return with a duration of 10 days; if you start with a $1,000 deposit in this plan, you will be paid back a total profit of $1,100 in exactly 10 calendar days. Your $100 net profit and $1,000 body will be automatically added to your account. After this, you can choose to withdraw or reinvest to increase your profits at any time. Interest is paid at the end of the deposit term.
									</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									What payment methods are accepted at <?= $site_title; ?>?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Deposits and withdrawals are accepted through BTC (Bitcoin), ETH (Ethereum), LTC (Litecoin) , BNB (Binance coin) and Tether USD (erc-20).</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									What is the Minimum / Maximum amount allowed to invest?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>You can start investing with the minimum and maximum provided on the investment plans. You can have multiple active Investment at the same time.</p>
								</div>
							</div>
						</div>
						<div class="faq-col">
							<div class="faq-item">
								<div class="faq-item__head">
									What's the amount limit for withdrawal?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>You can start withdrawing with the minimum USD100 and there is no maximum.</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									How long it take to complete my withdrawal request?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Requests are completed asap, during our working hours its normally completed within several hours but it could take up to 24 hours over weekend.</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									Can I make numerous deposits simultaneously?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Yes, it is possible for you to have an unrestricted number of deposits. The processing of each is going to be done individually.</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									Can I deposit directly from my account balance?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Yes, you can make a deposit from your account balance. Just log into your <?= $site_title; ?>.com account and choose 'Account balance' payment method when making a new deposit.</p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									Do you have an affiliate program?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Yes, we have an affiliate program of three levels paying up to 10% for every deposit made by your referrals. You can find detailed information about it <a href="affiliate.html"> here.</a></p>
								</div>
							</div>
							<div class="faq-item">
								<div class="faq-item__head">
									How to get my INVITE LINK and view my referral's downline?
									<span class="faq-item__head-btn"></span>
								</div>
								<div class="faq-item__content">
									<p>Inside your private members area you can find in the left navigation menu the 'My Referral' page, which has your invite link, and your referral's Downline and Link.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- FAQ EOF   -->
			<!-- BEGIN CONTACTS CHAT -->
			<div class="contacts-chat faq-chat">
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
							<span class="contacts-chat__main-title">Get in touch with us instantly using our Telegram Chat</span>
							<a href="https://t.me/alulusli" class="btn">Send message <i class="icon-send"></i></a>
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
			<!-- BEGIN FAQ BLOCK -->
			<div class="main-faq__block faq-block">
				<h5>Questions?</h5>
				<p>We’re happy to help! We’ll get back to you as quickly as possible.</p>
				<a href="contacts">Contact Us</a>
			</div>
			<!-- FAQ EOF BLOCK   -->
    </main>

    <!-- CONTENT EOF   -->

    <!-- BEGIN FOOTER -->

  <?php 

 require 'footer.php';
  ?>