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
                            <h4 class="style1 heading"><font font-weight:bold> Template </font></h4>
                        </div>
                      
                        <div class="content" style="margin-bottom: 10px">
                          <p align="justify"><strong><a href="https://publishingsupport.iopscience.iop.org/questions/templates-and-guidelines-for-proceedings-papers/" target="_blank">Journal of Physics – IOP Conference</a>  </strong> </p>
                         <p align="justify"><strong><a href="https://sdbc.ac.in/icmmt/images/Paper_Template_ISBN.pdf" target="_blank"> ISBN Proceedings</a></strong> </p>
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
	<section class="container-fluid footer">
		<div class="container">
            <div class="row">
                <div class="col-md-3">
					<br>
                    <div class="style4"><b>CONTACT US</b></div>
                    <div class="style5">
                        <!-- Dr. Avadesh K. Sharma-->
                        <i class="far fa-envelope"></i><font style="size: 20px;"> conference@sdbc.ac.in
						</font><br>
						<i class="far fa-phone-alt"> </i><font style="size: 20px;"> +91-84354 31353 </font><br>
                        <i class="fa fa-clock"></i><font style="size: 20px;"> (9:00AM - 05:30PM, Monday to Saturday)</font> 
					</div>
                </div>
				<div class="col-md-3 offset-md-1" >
					<br>
                   	<div class="style4"><b>ABOUT US</b></div>
                   	<div class="style5">
				    	1st International Conference on Machine Intelligence and Cyber Physical Systems. (ICMICPS 2023)<br />
                       	December 23-24, 2022 / India
                   	</div>
               	</div>
				<div class="col-md-3 offset-md-1">
			   		<br>
                   	<div class="style4"><b>LINKS</b></div>
					<div class="style6">
                       	<ul>
                       	    <li><a href="https://easychair.org/conferences/?conf=icmmt2022" style="color:red;"><b>Online Submission System</b></a></li>
                   			<li><a href="registrationFee.html">Registration</a></li>
							   <li><a href="/pages/1a-login.php" target="_blank">Admin Login</a></li>
                     	</ul>
                   	</div>
              	</div>
            </div>
        </div>

    	<div class="row justify-content-center" id="copyright">
			<div class="col-md-8">
        		<marquee>Copyright © 1st International Conference on Machine Intelligence and Cyber Physical Systems. (ICMICPS 2023)</marquee>
			</div>
		</div>
	</section>
	<!-- Footer Section End -->
<script src="js/wow.js"></script>
<script>
   wow = new WOW({}).init();
</script>	
</body>
</html>