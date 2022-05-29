<?php 

$plans = ["STANDARD", "DICE", "PREMIUM", "GOLDEN"];

?>


<section class="how">
                <div class="wrapper">
                    <div class="top-text">
                        <img src="en/img/title-star1.svg"  alt="" class="top-text-decor1 js-img">
                        <img src="en/img/title-star2.svg"  alt="" class="top-text-decor2 js-img">
                        <span class="top-text__descr">Our current offers</span>
                        <h2>Investment Plans</h2>
                        <p>We offer our investors great investment plans. </p>
                    </div>
                                   
                    <div class="how-items">
                        <?php 
                        foreach ($plans as $plan) {
                            switch ($plan) {
                                case 'STANDARD':
                                    $roi = 25;
                                    $invPlan = [$plan, $roi, 7, 250, 999];
                                    break;

                                case 'DICE':
                                    $roi = 35;
                                    $invPlan = [$plan, $roi, 7, 1000, 9999];
                                    $height = "97px";
                                    break;

                                case 'PREMIUM':
                                    $roi = 45;
                                    $invPlan = [$plan, $roi, 7, 10000, 49000];
                                    break;

                                case 'GOLDEN':
                                    $roi = 65;
                                    $invPlan = [$plan, $roi, 7, 50000, 500000];
                                    break;
                                
                                default:
                                    $roi = 5;
                                    break;
                            }
                              $planName = $invPlan[0];  
                              $planROI = $invPlan[1];  
                              $planDuration = $invPlan[2];  
                              $planMin = $invPlan[3];  
                              $planMax = $invPlan[4]; 
                              $dailyInt = $planROI/7; 
                         ?>

                            <div class="how-item">
                                <span class="investment-card__title" style="color: #fff"><?= $planName; ?> PLAN</span><br>
                                <div class="how-item__num">
                                    <img src="en/img/investments-plan__card-img2.png"   alt="" class="js-img">
                                </div><br>
                                <span class="investment-card__rate-title" style="color: #fff">MINIMUM - $<?= $planMin; ?>.00</span>
                                <span class="investment-card__rate-title" style="color: #fff">MAXIMUM - $<?= $planMax; ?>.00</span><br>
                                <span class="investment-card__rate-interest" style="color: #fff"><?= round(floatval($dailyInt), 2); ?>% Daily for <?= $planDuration; ?> Day(s) </span><br>
                                <span class="investment-card__rate-interest" style="color: #fff"> 
                                    <ul> 
                                        <li>Total return: <?= $planROI; ?>%</li>
                                        <li>Referral Bonus: 10%</li>
                                    </ul> 
                                </span><br>
                                <span class="investment-card__rate-exp">Duration : <?= $planDuration; ?> Day(s)</span><br>
                                <a href="signup" class="btn">Activate</a>
                            </div>

                        <?php 
                        }
                         ?>
                                            
                            
                                            
                    </div>  
                </div>
            </section>