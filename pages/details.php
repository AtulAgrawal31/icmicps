<?php
// (A) START SESSION
session_start();
 
// (B) LOGOUT REQUEST
if (isset($_POST["logout"])) { unset($_SESSION["user"]); }
 
// (C) REDIRECT TO LOGIN PAGE IF NOT LOGGED IN
if (!isset($_SESSION["user"])) {
  header("Location: 1a-login.php");
  exit();
}
?>
<?php
	include('import/head.php');
?>
		<!-- Navbar Section End -->

        <!-- Body Section  -->
        <section class="container"  style="background-color:white; height: 400px;">
            <div>
                <h4>&nbsp;</h4>
                <h4 class="style1 heading"><font font-weight:bold>Participant Information</font></h4>
				<h4>&nbsp;</h4>
            </div>
			<div>
				<ul>
				<li><h5><a href="showAuthor.php" target="_blank" style="text-decoration: none; color: red;">Check Author Details</a></h5></li>
				<li><h5><a href="showGuest.php" target="_blank" style="text-decoration: none; color: red;">Check Guest Details</a></h5></li>
			</ul>
			</div>
            <h6>&nbsp;</h6>
            <div class="row justify-content-center">
				<form method="post">
					<input type="hidden" name="logout" value="1"/>
					<button type="submit" class="btn btn-primary">Logout</button>
				</form>
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