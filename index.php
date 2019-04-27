<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' ) {
    
    $user = filter_var($_POST['username'], FILTER_SANITIZE_STRING);    
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);   
    $subject = filter_var($_POST['subject'], FILTER_SANITIZE_STRING);
    $msg = filter_var($_POST['message'], FILTER_SANITIZE_STRING);


    // Array Errors
    $formErrors = array();
    $formErrorss = array();
    
    if (strlen($user) <= 3) {
        
    $formErrors[] = '
	<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>UserName Must be Longer Then <strong>3</strong> Characters</p>
</div>';
        
    }
        
    if (strlen($msg) <= 6) {
        
    $formErrorss[] = '
	<div class="uk-alert-danger" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>Message Can\'t be Less Than <strong>6</strong> Characters</p>
</div>';
        
    }
    
    $headers = 'From: ' . $email;
    $MyEmail = 'alabade.host@yahoo.com';
    $subj = $subject;
    if (empty($formErrors || $formErrorss)) {
        
        mail($MyEmail, $subj, $msg, $headers);
        
        $user = '';
        $email = '';
        $subject = '';
        $msg = '';
        
        $success = '
		<div class="uk-alert-success" uk-alert>
    <a class="uk-alert-close" uk-close></a>
    <p>We Have Recieved Your Messge</p></div>';
    }
}
    
?>
<!DOCTYPE html>
<html>

<head>
    <title>Services And Servers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="fonts/fonts.css" />
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</head>

<body>

    <!------------------------------------------------------------------------------------------------------------------------------------>




    <!----------------------------------------------- Start Navbar --------------------------------------------------------->

    <div class="uk-position-relative">

<div uk-sticky>            <div class="uk-position-top uk-background-muted uk-panel">
                <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
                    <div class="uk-navbar-center">
                        <ul class="uk-navbar-nav uk-iconnav">
                            <li class="uk-active uk-button-text"><a href="#Home" uk-icon="icon: home">Home &nbsp;</a></li>
                            <li class="uk-active uk-button-text"><a href="#Servers" uk-icon="icon: server">Servers &nbsp;</a></li>
                            <li class="uk-active uk-button-text"><a href="#About" uk-icon="icon: info">About &nbsp;</a></li>
                            <li class="uk-active uk-button-text"><a href="#Contact" uk-icon="icon: receiver">Contact &nbsp;</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>




    <!----------------------------------------------- End Navbar --------------------------------------------------------->

    <!------------------------------------------------------------------------------------------------------------------------------------>


    <!----------------------------------------------- Start Home --------------------------------------------------------->


<div class="uk-section uk-section-muted">
<div class="uk-container">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: push">

        <ul class="uk-slideshow-items">
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-center-left">
                    <img src="img/bg.jpg" alt="" uk-cover>
                </div>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove fontar"> Services - الخدمات </h3>
                    <hr class="uk-divider-small">
                    <p class="uk-margin-remove fontar">. يقدم موقعنا مجموعة من الخدمات الخاصة بالسوشيال ميديا علي مستوي جودة عالية</p>
                </div>
            </li>
            <li>
                <div class="uk-position-cover uk-animation-kenburns uk-animation-reverse uk-transform-origin-top-right">
                    <img src="img/bg2.jpg" alt="" uk-cover>
                </div>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-center uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove fontar"> Servers - السيرفرات </h3>
                    <hr class="uk-divider-small">
                    <p class="uk-margin-remove fontar">. يوجد لدينا خدمات استضافة سيرفرات العاب وخدمات تصميم مواقع</p>
                </div>
            </li>
        </ul>
    </div>


    <div id="Home" class="uk-text-center">
        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-grid" uk-grid>
            <div class="uk-card-media-left uk-cover-container" uk-scrollspy="cls:uk-animation-slide-top-small; delay:500">
                <img src="img/social.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body fontar" uk-scrollspy="cls:uk-animation-slide-right-small; delay:500">
                    <h3 class="uk-card-title fontar"> Services </h3>
                    <hr class="uk-divider-icon">
                    <p>Social Media And Services Web Design.</p>
                </div>
            </div>
        </div>

        <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@s uk-margin uk-grid" uk-grid>
            <div class="uk-flex-last@s uk-card-media-right uk-cover-container" uk-scrollspy="cls:uk-animation-slide-bottom-small; delay:500">
                <img src="img/servers.jpg" alt="" uk-cover>
                <canvas width="600" height="400"></canvas>
            </div>
            <div>
                <div class="uk-card-body fontar" uk-scrollspy="cls:uk-animation-slide-left-small; delay:500">
                    <h3 class="uk-card-title fontar">Servers</h3>
                    <hr class="uk-divider-icon">
                    <p>Servers Games ( Multi Theft Auto ) And Servers VPS.</p>
                </div>
            </div>
        </div>

    </div>
    </div>
    </div>
    <br>
       <div class="uk-text-center">
        <a href="#" uk-totop uk-scroll></a>
    </div>
    <br>

    <!----------------------------------------------- End Home --------------------------------------------------------->





    <!------------------------------------------------------------------------------------------------------------------------------------>






    <!----------------------------------------------- Start Servers --------------------------------------------------------->

    <div id="Servers" class="uk-text-center">
    <div class="uk-section-default"><br>
		
			<h3 class="uk-heading-line uk-text-center fontar"><span>Services And Servers</span></h3>



        <div class="uk-margin-medium-top">


            <ul class="uk-subnav uk-subnav-pill uk-flex-center" uk-switcher>
                <li><a href="#" uk-scrollspy="cls:uk-animation-scale-down; delay:300">Services - الخدمات </a></li>
                <li><a href="#" uk-scrollspy="cls:uk-animation-scale-up; delay:300">Servers - السيرفرات </a></li>
            </ul>

            <hr class="uk-divider-icon">

            <ul class="uk-switcher uk-margin">


                <li>

<div class="uk-section uk-section-default">
<div class="uk-container">
 <div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>
 
 
 
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls:uk-animation-slide-left-small; delay:500"> 
		<h3 class="uk-card-title fontar"> خدمات السوشيال </h3>
        <hr class="uk-divider-icon">
        <p><br></p>
        <p>Getting Comments Videos <span uk-icon="icon: youtube"></span></p>
        <p>Getting Likes Videos <span uk-icon="icon: youtube"></span></p>
        <p>Getting Subscribe <span uk-icon="icon: youtube"></span></p>
        <p><br></p>
        <hr class="uk-divider-small">
        <a href="https://www.facebook.com/alabade.host" class="uk-button uk-button-default" target="_blank">Buy Now</a>
		</div><span uk-icon="icon: code"></span>
		
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls:uk-animation-slide-right-small; delay:500"> 
		<h3 class="uk-card-title fontar"> خدمات التصميم </h3>
        <hr class="uk-divider-icon">
        <p>Get a Website Design Responsive and High Quality Features   <br>Tv : <span uk-icon="icon: tv"></span><br> Laptop : <span uk-icon="icon: laptop"></span><br> Desktop : <span uk-icon="icon: desktop"></span><br> Tablet : <span uk-icon="icon: tablet"></span><br> Phone : <span uk-icon="icon: phone"></span></p>
        <hr class="uk-divider-small">
        <a href="https://www.facebook.com/alabade.host" class="uk-button uk-button-default" target="_blank">Buy Now</a>
		</div>
	
		
</div>
</div>
</div>






                </li>











                <li>

<div class="uk-section uk-section-default">
<div class="uk-container">
 <div class="uk-grid-small uk-child-width-1-4@s uk-flex-center uk-text-center" uk-grid>
 
 
 

        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls:uk-animation-slide-left-small; delay:500">
		<h3 class="uk-card-title">MTA:SA 1</h3>
        <hr class="uk-divider-icon">
        <p>256 Players</p>
        <p>IP Address Shared</p>
        <p>2 GB SSD Disk</p>
        <p>DDoS Protection Included</p>
        <p>CP : Open Game Panel</p>
        <p><span class="uk-label">1$</span></p>
        <div class="uk-card-footer">
        <a href="https://www.facebook.com/alabade.host" class="uk-button uk-button-default" target="_blank">Buy Now</a>
        </div> 		
		</div>
		
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls:uk-animation-slide-bottom-small; delay:500">
		<h3 class="uk-card-title">MTA:SA 2</h3>
        <hr class="uk-divider-icon">
        <p>512 Players</p>
        <p>IP Address Shared</p>
        <p>5 GB SSD Disk</p>
        <p>DDoS Protection Included</p>
        <p>CP : Open Game Panel</p>
        <p><span class="uk-label">2$</span></p>
        <div class="uk-card-footer">
        <a href="https://www.facebook.com/alabade.host" class="uk-button uk-button-default" target="_blank">Buy Now</a>
        </div> 		
		</div>
		
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls:uk-animation-slide-top-small; delay:500">
		<h3 class="uk-card-title">MTA:SA 3</h3>
        <hr class="uk-divider-icon">
        <p>768 Players</p>
        <p>IP Address Shared</p>
        <p>8 GB SSD Disk</p>
        <p>DDoS Protection Included</p>
        <p>CP : Open Game Panel</p>
        <p><span class="uk-label">3$</span></p>
        <div class="uk-card-footer">
        <a href="https://www.facebook.com/alabade.host" class="uk-button uk-button-default" target="_blank">Buy Now</a>
        </div> 		
		</div>
		
        <div class="uk-card uk-card-default uk-card-body" uk-scrollspy="cls:uk-animation-slide-right-small; delay:500">
		<h3 class="uk-card-title">MTA:SA 4</h3>
        <hr class="uk-divider-icon">
        <p>1024 Players</p>
        <p>IP Address Shared</p>
        <p>10 GB SSD Disk</p>
        <p>DDoS Protection Included</p>
        <p>CP : Open Game Panel</p>
        <p><span class="uk-label">4$</span></p>
        <div class="uk-card-footer">
        <a href="https://www.facebook.com/alabade.host" class="uk-button uk-button-default" target="_blank">Buy Now</a>
        </div> 		
		</div>
		
</div>
</div>
</div>






                </li>





            </ul>









            </div>
            </div>
            </div>
       <div class="uk-text-center">
        <a href="#" uk-totop uk-scroll></a>
    </div>
            <br>

            <!----------------------------------------------- End Servers --------------------------------------------------------->




            <!------------------------------------------------------------------------------------------------------------------------------------>






            <!----------------------------------------------- Start About --------------------------------------------------------->

            <div id="About">
			
			
<div class="uk-section uk-section-default">

<h3 class="uk-heading-line uk-text-center fontar"><span>About Team</span></h3><br><br>

<div class="uk-flex uk-flex-right">
		

<div class="uk-child-width-expand@s" uk-scrollspy="cls:uk-animation-slide-left-small; delay:300" uk-grid>
 <div class="uk-width-3-4">
 <div class="uk-card uk-card-default uk-card-body">
	<ul class="uk-comment-list">
    <li>
        <article class="uk-comment uk-visible-toggle" tabindex="-1">
            <header class="uk-comment-header uk-position-relative">
                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-comment-avatar" src="img/support.png" width="80" height="80" alt="">
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove fontar">King Abady</h4>
                        <p class="uk-comment-meta uk-margin-remove-top">Front End Developer</p>
                    </div>
                </div>
            </header>
            <div class="uk-comment-body uk-text-center">
                <p></p>
                <p> تخصص تصميم وبرمجة مواقع ويب واستضافتها , ادارة سيرفرات لينكس وويندوز</p>
                <p></p>
            </div>
        </article>
    </li>
</ul>		
</div>
</div>
</div>

	
<br>
					
						
<div class="uk-child-width-expand@s" uk-scrollspy="cls:uk-animation-slide-right-small; delay:300" uk-grid>
 <div class="uk-width-3-4">
        <div class="uk-card uk-card-default uk-card-body">
		
		
	<ul class="uk-comment-list">
    <li>
        <article class="uk-comment uk-visible-toggle" tabindex="-1">
            <header class="uk-comment-header uk-position-relative">
                <div class="uk-grid-medium uk-flex-middle" uk-grid>
                    <div class="uk-width-auto">
                        <img class="uk-comment-avatar"  src="img/support.png" width="80" height="80" alt="">
                    </div>
                    <div class="uk-width-expand">
                        <h4 class="uk-comment-title uk-margin-remove fontar">Abdo Alhryzy</h4>
                        <p class="uk-comment-meta uk-margin-remove-top">Manager and Supporter Host</p>
                    </div>
                </div>
            </header>
            <div class="uk-comment-body uk-text-center">
                <p></p>
                <p>الممول والداعم للموقع , دعم فني للاستضافه والمشاكل الخاصه بسيرفرات الالعاب</p>
                <p></p>
            </div>
        </article>
    </li>
</ul>
			
</div>
</div>
</div>		
			
			
			
			
			

</div>
</div>
 </div>
 <br>
       <div class="uk-text-center">
        <a href="#" uk-totop uk-scroll></a>
    </div>
 <br>

            <!----------------------------------------------- End About --------------------------------------------------------->




            <!------------------------------------------------------------------------------------------------------------------------------------>






            <!----------------------------------------------- Start Contact --------------------------------------------------------->

    <div id="Contact" class="uk-text-center">
    <div class="uk-section-default"><br>
<h3 class="uk-heading-line uk-text-center fontar"><span>Contact Us</span></h3>

<div class="uk-flex uk-flex-center" uk-scrollspy="cls:uk-animation-scale-up; delay:200" uk-grid>

<div>

        <div class="uk-dark uk-card uk-card-default uk-card-hover uk-card-body">
		
         <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">      

    <div class="uk-margin">
			 <?php if (! empty($formErrors)) {    ?>
        <?php
        foreach($formErrors as $error) {
            echo $error . '<br>';
        }
        ?>
        <?php } ?>
        <div class="uk-inline" uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:800">
            <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input" type="text" name="username" required placeholder="Username" value="<?php if (isset($user)) { echo $user; } ?>" />
        </div>
    </div>

    <div class="uk-margin">
        <div class="uk-inline" uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:1200">
            <span class="uk-form-icon" uk-icon="icon: mail"></span>
            <input class="uk-input" type="email" name="email" required placeholder="Email" value="<?php if (isset($email)) { echo $email; } ?>"/> 
        </div>
    </div>


    <div class="uk-margin">

        <div class="uk-inline" uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:1400">
            <span class="uk-form-icon" uk-icon="icon: comment"></span>
            <input class="uk-input" type="text" name="subject" required placeholder="Subject" value="<?php if (isset($subject)) { echo $subject; } ?>"/> 
        </div>
    </div>

        <div class="uk-margin" uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:1600">
            <textarea class="uk-textarea" rows="5" required placeholder="Text Here Your Subject" name="message"><?php if (isset($msg)) {echo $msg;} ?></textarea>
								 <?php if (! empty($formErrorss)) {    ?>
        <?php
        foreach($formErrorss as $error) {
            echo $error . '<br>';
        }
        ?>
        <?php } ?>
        </div>
<button class="uk-button uk-button-default" uk-scrollspy="cls:uk-animation-slide-bottom-medium; delay:1800">Send</button>
		
       <?php if (isset($success)) { echo $success; } ?>
</form>
</div>
</div>
</div><br><br>
</div>
</div>

       <br><div class="uk-text-center">
		<span>Web Site By <span uk-icon="icon: hashtag"></span><a class="uk-link-text" href="https://facebook.com/king3bady">K3</a></span>
    </div><br>


            <!----------------------------------------------- End Contact --------------------------------------------------------->






            <!------------------------------------------------------------------------------------------------------------------------------------>
</body>

</html>
