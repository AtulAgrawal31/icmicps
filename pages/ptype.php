<?php
	include('import/head.php');
?>
		<!-- Navbar Section End -->

        <!-- Body Section  -->
        <section class="container"  style="background-color:white; height: 400px;">
            <div>
                <h4>&nbsp;</h4>
                <h4 class="style1 hading"><font font-weight:bold>Participant Information</font></h4>
				<h4>&nbsp;</h4>
            </div>
			<div>
				<ul>
				<li><h5><a href="authorForm.php" target="_blank" style="text-decoration: none; color: red;">Fill Author Form</a></h5></li>
				<li><h5><a href="guestform.php" target="_blank" style="text-decoration: none; color: red;">Fill Guest Form</a></h5></li>
			</ul>
			</div>
			<!-- <form >
				<select class="form-control pstype" name="Participant_type" id="formtype" required>
					<option value="author" id="Author">Author</option>
					<option value="guest" id="Guest">Guest / Attendee / Listener</option>
				</select>
				<h6>&nbsp;</h6>
				<div class="row justify-content-center">
					<button class="btn" type="submit" style="background-color: #40d0c6; color: white; font-weight: bold;">SUBMIT</button>
				</div>
			</form>	 -->
            <h6>&nbsp;</h6>
            <div class="row justify-content-center">
                <a href="registrationFee.php" style="text-decoration: none; font-weight: bolder;">Go Back</a>
            </div>
        </section>
		
    </div>
    <!-- Container Section End -->
<script src="js/wow.js"></script>
<script>
   wow = new WOW({}).init();
</script>	
</body>
</html>