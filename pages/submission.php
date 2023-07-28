<?php 
	include('import/head.php');
?>
		<!-- Navbar Section End -->

		<!-- Body Section -->
		<section class="p-3 mb-3" style="background-color: white; box-sizing: border-box;">
			<div class="row">
				<div class="col-md-8">
					<!-- The slideshow -->
					<?php
						include('import/slidshow.php');
					?>			
                    <article>
                        <div>
                            <p>&nbsp;</p>
                            <h4 class="style1 heading"><font font-weight:bold>Paper Submission </font></h4>
                            <p>&nbsp;</p>
                            <h5 class="style1"><font font-weight:bold>Before submission keep the following documents ready </font></h5>
                            <ol style="list-style:circle; font-size: 20px;">
                                <li>Author Agreement Form <a href="#" style="text-decoration: none; font-weight: bolder;">  Download</a></li>
                                <li>Credit Author Statement <a href="#" style="text-decoration: none; font-weight: bolder;">  Download</a></li>
                                <li>Paper Template <a href="#" style="text-decoration: none; font-weight: bolder;">  Download</a></li>
                            </ol>
                        </div>
                        <h6>&nbsp;</h6>
                        <div class="row justify-content-center">
                            <div class="col-sm-7">
                                <a class="btn p-2 "  href="https://easychair.org/conferences/?conf=icmmt2022" role="button" style=" color:white; font-size:18px; " target="_top">
                                   Online Submission System
								</a>
                            </div>
                        </div>
						<p>&nbsp;</p>
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