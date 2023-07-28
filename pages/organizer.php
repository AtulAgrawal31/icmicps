<?php
	$curr_page='organizer';
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
                        <div class="text-center">
							<p>&nbsp;</p>
                            <h4 class="style1 heading"><font font-weight:bold>Organizer</font></h4><br>
                            <div class="row justify-content-center">
								<div class="col-md-6 p-3">
									<img class="img-responsive" src="https://sdbc.ac.in/icmmt/images/bansal.png" width="280" height="80" />
								</div>	
								<h4>Sushila Devi Bansal College, Indore</h4>
							</div>
							<p>&nbsp;</p>
                            <!-- <h4 class="style1 heading"><font font-weight:bold>Our Organizer</font></h4><br> -->
							<p>&nbsp;</p>
                            <h4 class="style1 heading"><font font-weight:bold>Associate</font></h4><br>
                            <div class="row justify-content-center">
								<div class="col-md-6 p-3">
									<img class="img-responsive" src="https://sdbc.ac.in/icmmt/images/Institution_of_Engineers_Logo.svg" width="250" height="50" />
								</div>
								<h4>The Institution of Engineers (India)</h4>								
							</div>
							<div class="row justify-content-center">
								<div class="col-md-6 p-3">
									<img class="img-responsive" src="../images/ISTE.png" width="280" height="80" />
								</div>	
								<h4>Indian Society for Technical Education</h4>
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