<?php require 'texts.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <!-- Site Metas -->
    <title>About Us : <?php echo $title;?></title>
    <?php require 'meta.php';?>

</head>
<body class="seo_version">

    <?php require 'loader.php';?>

    <?php require 'header.php';?>


    <div class="all-page-title" style="background-image:url(images/pattern-4.png);">
        <div class="container text-center">
            <h1>Contact Us</h1>
        </div>
		<!--Page -->
        <div class="page-info">
            <div class="container">
            	<div class="inner-container">
                    <ul class="bread-crumb">
                        <li><a href="index.php">Home</a></li>
                        <li><span>Contact</span></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--End Page-->
    </div><!-- end section -->

    <svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

    <div id="support" class="section wb">
        <div class="container">
            <div class="section-title text-center">
                <h3>Get In Touch</h3>
                <p class="lead">If you want results not fake promises feel free to get in touch with us</p>
            </div><!-- end title -->

            <div class="row">
                <div class="col-md-6">
                    <div class="contact_form">
                        <div id="message"></div>
                        <form id="contactform" class="row" action="contact.php" name="contactform" method="post">
                            <fieldset class="row-fluid">
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="first_name" id="first_name" class="form-control" placeholder="First Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="last_name" id="last_name" class="form-control" placeholder="Last Name">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="email" name="email" id="email" class="form-control" placeholder="Your Email">
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Website">
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <label class="sr-only">Select Department</label>
                                    <select name="select_service" id="select_service" class="selectpicker form-control" data-style="btn-white">
                                        <option value="12">Installation Service</option>
                                        <option value="Web Design">Web Design</option>
                                        <option value="Web Development">Web Development</option>
                                        <option value="Graphic Design">Graphic Design</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <textarea class="form-control" name="comments" id="comments" rows="6" placeholder="Give us more details.."></textarea>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                                    <button type="submit" value="SEND" id="submit" class="btn btn-light btn-radius btn-brd grd1 btn-block">Get a Quote</button>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div><!-- end col -->
				<div class="col-md-6">
					<div class="map-box">
						<div id="custom-places" class="small-map"></div>
					</div>
				</div><!-- end col -->
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <section class="section nopad cac text-center">
        <a href="#"><h3>If you want results not fake promises feel free to get in touch with us</h3></a>
    </section>

    <div id="support" class="section db">
        <div class="container">
            <div class="section-title text-center">
                <h3>Clients Logo</h3>
            </div><!-- end title -->

            <div class="row">
                <div id="logo-carousel" class="owl-carousel">
					<div> <img src="uploads/logo_01.png" alt=""> </div>
					<div> <img src="uploads/logo_02.png" alt=""> </div>
					<div> <img src="uploads/logo_03.png" alt=""> </div>
					<div> <img src="uploads/logo_04.png" alt=""> </div>
					<div> <img src="uploads/logo_05.png" alt=""> </div>
					<div> <img src="uploads/logo_06.png" alt=""> </div>
					<div> <img src="uploads/logo_01.png" alt=""> </div>
					<div> <img src="uploads/logo_02.png" alt=""> </div>
				</div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div><!-- end section -->

    <svg id="clouds1" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
        <path d="M-5 100 Q 0 20 5 100 Z
            M0 100 Q 5 0 10 100
            M5 100 Q 10 30 15 100
            M10 100 Q 15 10 20 100
            M15 100 Q 20 30 25 100
            M20 100 Q 25 -10 30 100
            M25 100 Q 30 10 35 100
            M30 100 Q 35 30 40 100
            M35 100 Q 40 10 45 100
            M40 100 Q 45 50 50 100
            M45 100 Q 50 20 55 100
            M50 100 Q 55 40 60 100
            M55 100 Q 60 60 65 100
            M60 100 Q 65 50 70 100
            M65 100 Q 70 20 75 100
            M70 100 Q 75 45 80 100
            M75 100 Q 80 30 85 100
            M80 100 Q 85 20 90 100
            M85 100 Q 90 50 95 100
            M90 100 Q 95 25 100 100
            M95 100 Q 100 15 105 100 Z">
        </path>
    </svg>

	<?php require 'footer.php';?>

    <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

    <!-- ALL JS FILES -->
    <script src="js/all.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyCKjLTXdq6Db3Xit_pW_GK4EXuPRtnod4o"></script>
	<!-- Mapsed JavaScript -->
	<script src="js/mapsed.js"></script>
	<script src="js/01-custom-places-example.js"></script>
    <!-- ALL PLUGINS -->
    <script src="js/custom.js"></script>

</body>
</html>