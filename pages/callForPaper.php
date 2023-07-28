<?php
	$curr_page='callForPaper';

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
                        <div class="heading">
                            <h4 class="style1">&nbsp;</h4>
                            <h4 class="style6"><font color="#0c38af" font-weight:bold>Call for papers</font></h4>
                        </div>
                        <div class="content">
                            <p>The call for original papers from the following areas are included in our conference but not limited  to:</p>
                            <p><h5 style="color: #0c38af;">Material Intelligence</h5></p>
                            <div class="flexBox" >
                                <div>
                                    <ol style="list-style:circle;  margin-top:0;display:flex;flex-direction:column;height:469px;flex-wrap:wrap;">
                                        <li>Artificial Intelligence (AI)</li>
										<li>Augmented Learning</li>
										<li>Automation</li>
										<li>Behavioral Modeling</li>
										<li>Biometry/Bioinformatics</li>
										<li>Blockchain</li>
										<li>Cloud Computing</li>
										<li>Cognitive Computing</li>
										<li>Computer Vision</li>
										<li>Data Analytics</li>
										<li>Data Mining and Warehousing</li>
										<li>Data Science</li>
										<li>Data Structures and Algorithms</li>
										<li>Decision-making</li>
										<li>Deep Learning</li>
										<li>Evolutionary Computation</li>
										<li>Fuzzy Systems</li>
										<li>Gaming and Animation Theory</li>
										<li>Human-Computer Interaction</li>
										<li>Intelligence: Human vs Artificial</li>
										<li>Intelligent systems</li>
										<li>Internet of Things</li>
										<li>Knowledge Representation</li>
										<li>Machine Intelligence (MI)</li>
										<li>Machine Learning</li>
										<li>Machine Translation</li>
										<li>Meta-Heuristic Search</li>
										<li>Natural Language Processing</li>
										<li>Neural Network</li>
										<li>Ontology</li>
										<li>Parallel and Distributed Computing</li>
										<li>Pattern Recognition</li>
										<li>Reinforcement Learning</li>
										<li>Recommendation Systems</li>
										<li>Sentiment Analysis</li>
										<li>Soft Computing</li>
										<li>Statistics and Probability</li>
										<li>Swarm Intelligence</li>
                                    </ol>
                             	</div>
								<div>
									<p><h5 style="color: #0c38af;">Cyber-Physical Systems</h5></p>
									<ol style="list-style:circle; margin-top:0;display:flex;flex-direction:column;height:469px;flex-wrap:wrap;">
                                        <li>Cyber-Physical Systems (CPS)</li>
                                        <li>Cybernetics</li>
                                        <li>Cyber Security</li>
                                        <li>Data Communication</li>
										<li>Digital Communication</li>
										<li>Digital Forensics</li>
										<li>Digital Twins</li>
										<li>Embedded Systems</li>
										<li>Energy-Neutral Buildings</li>
										<li>Experts Systems</li>
										<li>Information Security</li>
										<li>Intelligent Agents and Systems</li>
										<li>Intelligent Sensing with AI</li>
										<li>Mechanism Design</li>
										<li>Mechatronics</li>
										<li>Networking</li>
										<li>Network Security</li>
										<li>Robotics</li>
										<li>Signal Processing</li>
										<li>Six-Sense Technologies </li>
										<li>Smart Actuators and Sensors</li>
										<li>Smart and Additive Manufacturing</li>
										<li>Speech recognition</li>
										<li>Zero-Fatality Highways</li>
										<li>5G Communication</li>
                                    </ol>
								</div>
                            </div>
						</div>
                            
						<div class="col-md-12">
				<!-- <p>*All submissions will be peer-reviewed, and all the accepted and registered papers may be published in the Algorithms for Intelligent Systems  - Springer Book series, which is indexed in</p> -->
				<!-- <img src="../images/publi.jpg" class="d-block w-100" alt="first"> -->
				<p>Organizer is in touch with ers of high-quality SCI, Scopus, WOS Indexed Journals/Proceedings to get published an extended version of selected papers as per Journal norms.</p>
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