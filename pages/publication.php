<?php
	$curr_page='publication';
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
                            <h4 class="style1 heading"><font font-weight:bold> Publication </font></h4>
                        </div>
                      
                        <div class="content" style="margin-bottom: 10px">
                          <p align="justify"><strong>An International Conference on Machine Intelligence and Cyber Physical Systems (ICMICPS 2023)</strong> will be held in virtual mode during 23 – 24, December 2023. All the accepted and presented papers will be published in Journal of Physics: IOP Conference Series or Conference Proceedings with ISBN Number.</p>
                         

						 <p align="center"><img class="img-responsive" src=""  alt = "image"width="250" > </p>
						 <p>Selected papers may be published in the following Journals: <br>1) International Journal of Vehicle Structures and Systems (Scopus Index) <br>
						 <strong>ISSN:-0975 3060</strong>
						 </p>

                        </div>
                    </article>                  
				</div>
				<?php
					include('import/sidebar.php');
				?>
				</div>
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