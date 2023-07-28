<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Animate CSS Link -->
   <link rel="stylesheet" type="text/css" href="css/animate.css">

   <!-- Hover CSS Link -->
   <link rel="stylesheet" type="text/css" href="css/hover.css">

   <!-- Fontawesome Icons CSS Link -->
   <link rel="stylesheet" type="text/css" href="fa-icon_v6_pro/css/all.css">

   <!-- Site Logo -->
	<link rel="icon" type="image/png" href="images/BGI.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/style.css">
    <title>ICMICPS 2023</title>
	<style>
		#bansallogo
		{
			margin-right:0px ;
		}
	</style>
</head>
<body>
	<!-- Header Section -->
	<section class="container-fluid header">
		<div class="row">
			<div class="col-md-2 offset-md-2 text-center pt-3 pb-4">
				<img src="images/bansalLogo.jpeg" class="img-responsive" alt="logo" width="115" height="90">
			</div>
			<div class="col-md-4 pt-3 pb-3 title">
				<h1>ICMICPS 2023</h1>
				<h5>International Conference on Machine Intelligence and Cyber Physical Systems</h5>	
			</div>
			<div class="col-md-2 text-center pt-3 pb-4">
				<img id="logo" src="images/ICMICPS.jpg"  class="img-responsive" alt="logo" width="130">
			</div>
		</div>	
	</section>
	<!-- Header Section End -->

	<!-- Container Section -->
	<div class="container">
		<!-- Nav Bar Section -->
		<section class="mt-3 mb-3">
			<nav class="navbar navbar-expand-lg">
			
				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon">
					<i class="fa fa-bars" style="color: white;font-size: 30px;"></i>
				</span>
				</button>
			
				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item p-2" >
						<a class="nav-link" id="<?php echo $curr_page == 'index' ?  active : ''?>" style="padding: 12px 8px;" id="home" href="#">Home</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" id="<?php echo $curr_page == 'callForPaper' ?  active : ''?>" style="padding: 12px 8px;"href="pages/callForPaper.php">Call for papers</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" id="<?php echo $curr_page == 'committee' ?  active : ''?>" style="padding: 12px 8px;" href="pages/committee.php">Committee</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" id="<?php echo $curr_page == 'keyNote' ?  active : ''?>" style="padding: 12px 8px;"href="pages/keyNote.php">Keynote Speakers</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" id="<?php echo $curr_page == 'registrationFee' ?  active : ''?>" style="padding: 12px 8px;"href="pages/registrationFee.php">Registration Fee</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" id="<?php echo $curr_page == 'publication' ?  active : ''?>" style="padding: 12px 8px;"href="pages/publication.php">Publication</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" id="<?php echo $curr_page == 'organizer' ?  active : ''?>" style="padding: 12px 8px;"href="pages/organizer.php">Organizers</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" id="<?php echo $curr_page == 'contacts' ?  active : ''?>" style="padding: 12px 8px;"href="pages/contacts.php">Contact Us</a>
					</li>
				</ul>
				</div>
			</nav>
		</section>
		<!-- Navbar Section End -->