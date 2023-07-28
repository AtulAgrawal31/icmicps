<?php
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
                        <div>
                            <p>&nbsp;</p>
                            <h4 class="style1 heading"><font font-weight:bold> About Venue </font></h4>
                        </div>
                      
                        <div class="content" style="margin-bottom: 10px">
                          <p align="justify">An<strong> International Conference on Material Science,  Mechanics and Technology (ICMMT 2022)</strong>&nbsp;will be  held in virtual mode during&nbsp;23 – 24, December  2022.&nbsp;</p>
						  <h6><i class="far fa-map-marker-alt"></i><span style="font-weight:400;"> AB Road, Umaria, Near Rau, Indore, Madhya Pradesh, Pin Code : 453331</span> </h6>
						  <p align="center">The detailed information regarding virtual platforms, program schedule etc will be shared very soon.</p>
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