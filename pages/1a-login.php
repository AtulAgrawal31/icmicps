<?php
// (A) LOGIN CHECKS
require "login.php";
?> 
<!-- // (B) LOGIN PAGE HTML -->
<?php if (isset($failed)) { ?>
<!-- <div id="bad-login">Invalid user or password.</div> -->
<script>
  alert("INVALID USER OR PASSWORD");
</script>
<?php } ?>

<?php
	include('import/head.php');
?>
		<!-- Navbar Section End -->

        <!-- Body Section  -->
        <section class="container"  style="background-color:white; height: 400px;">
            <div>
                <h4>&nbsp;</h4>
                <h4 class="style1 heading text-center"><font font-weight:bold>ADMIN LOGIN</font></h4>
				<h4>&nbsp;</h4>
            </div>
			<div>
            <form class="text-center" method="post" target="_self">
                <div class="row justify-content-center">
                    <div class="col-sm-5">
                        <input type="text" class="form-control text-center" id="email" placeholder="Enter User Id" name="user">
                    </div>
                </div>
                <br>
                <div class="row  justify-content-center">
                    <div class="col-sm-5">
                        <input type="password" class="form-control text-center" placeholder="Enter Password" name="password">
                    </div>
                </div>
				<br>	
                <button type="submit" class="btn btn-primary">Log In</button>
            </form>
            <br>
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