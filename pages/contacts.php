<?php
	$curr_page='contacts';

	include('import/head.php');
?>
		<!-- Navbar Section End -->

		<!-- Body Section -->
		<section class="p-3 mb-3" style="background-color: white; box-sizing: border-box;">
			<div class="row">
				<div class="col-md-8">
					<div id="demo" class="carousel slide" data-ride="carousel">
						<!-- The slideshow -->
						<?php
							include('import/slidshow.php');
						?>
						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
						<span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
						<span class="carousel-control-next-icon"></span>
						</a>
					</div>
					<article>
                        <p>&nbsp;</p>
                        <h4 class="style1 heading"><font font-weight:bold>Contact Details </font></h4>
                        <h6>&nbsp;</h6>
						<h5  style="font-weight:400;"><i class="far fa-map-marker-alt"></i><span style="font-weight:400;">  <b>Sushila Devi Bansal College</b><br>AB Road, Umaria, Near Rau, Indore, Madhya Pradesh, India, Pin Code :<br/> 453331</span></h5> 
                        <h6>&nbsp;</h6>
                        <h5><i class="far fa-envelope"> conference@sdbc.ac.in</i></h5>
                        <h6>&nbsp;</h6>
						
						<h5><i class="far fa-user-alt"> <a href="mailto:conference@sdbc.ac.in" style="text-decoration: none; color: black;"><b>Dr. Rajesh Chakrawarti(Coordinator)</b></a></i></h5>
                        <h5><i class="far fa-phone-alt">  +91-98265 04034</i></h5>	
						<h5><i class="far fa-user-alt"> <a href="mailto:conference@sdbc.ac.in" style="text-decoration: none; color: black;"><b>Dr. Atul Agrawal</b></a></i></h5>					
                        <h5><i class="far fa-phone-alt">  +91-87700 13314</i></h5>						
                        <h6>&nbsp;</h6>
						<!-- <h5><i class="far fa-user-alt"> <a href="mailto:conference@sdbc.ac.in" style="text-decoration: none; color: black;"><b>Dr. Ankush Verma (Joint Coordinator)</b></a></i></h5>
                        <h5><i class="far fa-phone-alt">  +91-99265 01779</i></h5> -->                 
                        
                        <h6>&nbsp;</h6>
                        <h4 class="style1 heading"><font font-weight:bold>Contact Us </font></h4>
                        <h6>&nbsp;</h6>    
                        <div class="content">
                            <div class="row">
                                <div class="col-md-6 offset-md-1 p-3">
                                    <form action="contact.php" method="post">
                                        <input class="p-2" type="text" name="name" placeholder="Name*" id="name" required>
                                        <h6>&nbsp;</h6>
                                        <input class="p-2" type="email" name="email" placeholder="Email*" id="email" required>
                                        <h6>&nbsp;</h6>
                                        <input class="p-2" type="number" name="mobile" placeholder="Contact Number*" id="mobile" required>
                                        <h6>&nbsp;</h6>
                                        <textarea class="p-2" type="text" name="message" rows="7" style="width: 100%;" placeholder="Message*" id="message" required></textarea>
                                        <h6>&nbsp;</h6>
                                        <button class="btn" name = "login" type="submit" style="background-color: #274397; color: white;;" id="submit">SUBMIT</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </article>                  
				</div>
				<?php
					include('import/sidebar.php');
				?>
			</div>
		</section>
		<!-- Body Section End -->
	</div>
	<!-- Container Section End	 -->

	<!-- Footer Section Start -->
	<?php
		include('import/foot.php');
	?>
	<!-- Footer Section End -->


<script src="js/wow.js"></script>
<script>
   wow = new WOW({}).init();
</script>	
</body>
</html>