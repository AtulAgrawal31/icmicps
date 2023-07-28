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
             $servername = "localhost";
             $username = "root";
             $password = "";
             $dbname = "collegeconference";
            //  $server = "localhost";
            //  $username = "root";
            //  $password = "";

            // Create a database connection
            $con = mysqli_connect($servername, $username, $password,$dbname);

            // Check for connection success
            if(!$con)
            {
                die("connection to this database failed due to" . mysqli_connect_error());
            }
            $query="Select * From `authordata`"; 
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tag -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- Animate CSS Link -->
   <link rel="stylesheet" type="text/css" href="css/animate.css">

   <!-- Hover CSS Link -->
   <link rel="stylesheet" type="text/css" href="css/hover.css">

   <!-- Fontawesome Icons CSS Link -->
   <link rel="stylesheet" type="text/css" href="fa-icon_v6_pro/css/all.css">

   <!-- Site Logo -->
	<link rel="icon" type="image/png" href="images/BGI.png">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://unpkg.com/xlsx@0.15.1/dist/xlsx.full.min.js"></script> 
	<!-- <link rel="stylesheet" href="../css/style.css"> -->
    <title>ICMICPS 2023</title>
    <style>
        body{
    /* background-color: #759ad95c; */
    background-color: #e2f1fddc;
    box-sizing: border-box;
}
*{
    box-sizing: border-box;
    overflow: auto; 
    /* issse showauthor table ka data within the table rehta hai */
}
.header{
    color: white;
    font-family: 'Century';
    font-weight: 500;
    background-color: #3d83eb;
    overflow: auto;
}
/* ye field add ki h */
div.title{  
    text-align:center;
    height: 200px;
}
@media screen and (max-width: 767.20px) {
    div.logo{
    margin-left:70px;
    }
    div.title{
    text-align:center;
    margin-top:-20px;   
    }
}
.navbar{
    background-color: #3d83eb;
}
.navbar a{
    text-decoration: none;
    color: white;
    font-size: 18px;
    font-weight: 500;
}
nav ul li a:hover{
    background-color: rgba(15, 76, 129, 0.541);
    color: rgb(11, 10, 10);
}
.img-responsive{
    max-width: 100%;
    height: auto;
}
.gmorph{
    background-color: #ffffff10;
    backdrop-filter: blur(12px);
    border-radius: 12px;
    text-shadow: 0 0 10px #3268dc;
}
.sidebar .heading{
    color: white;
    
    background: #3268dc url(../images/boxtitle.png) no-repeat left center;
}
.sidebar ul li{
    padding: 2%;
    font-size: 16px;
    /* color:#20d4c8; */
}
.sidebar ul li a{
    color:black;
    text-decoration: none;
}
.sidebar ul li a:hover{
    color:#3268dc;
    background-color: #3d83eb;

}
.sidebar .content p{
    font-size: 15px;
}
.sidebar .content img{
    border: 10px solid #DFDDE2;
}
.sidebar .content i{
    color: #40d0c6;
    color: #3268dc;
    background-color: #3d83eb;

    font-size: 20px;
}
.footer{
    background-color:rgb(0, 0, 0);
}
.style4{
    color: white;
}
.style5{
    color: white;
}
.style6 ul li{
    color: white;
}
.style6 ul li a{
    text-decoration: none;
    color: white;
}
.style6 ul li a:hover{
    color:#3268dc;
}
#copyright{
    color: #3d83eb;
}
#tablediv{
    overflow:auto;
}
#logo{
    background-color: #b9d2ff;
    padding: 0px;
    /* border-radius: 49%; */
    /* border: 4px solid #0d1b55; */
}
.heading{
    color:#0c38af;
}
.justify-content-center{
    width: 100%;
}
.row{
    width: 100%;
}
.content{
    display: block;
}
.btn{
    background-color: #0d1b55;
    border: 2px solid rgb(37, 41, 52);
    color: white;
    font-size:larger;
}
.btn:hover{
    background-color: #0c38af;
    color: #eaecb7;
}
.heading{
    color:#0c38af;
}
.topic{
    display: flex;
    height: 469px;
    flex-wrap: wrap;
    flex-direction: column;
}
@media screen and (max-width: 999.20px) {
   .topic{
    display: block;
    height: 100%;
   }
}
.container{
    margin:auto;
    padding: 0%
}
    </style>
</head>
<body>

	<!-- Header Section -->
	<section class="container-fluid header">
		<div class="row">
			<div class="col-md-2 offset-md-2 text-center pt-3 pb-4">
				<img src="../images/BansalLogo.jpeg" class="img-responsive" alt="logo" width="120" height="100">
			</div>
			<div class="col-md-4 pt-3 pb-3 title">
				<h1>ICMICPS 2023</h1>
				<h5>International Conference on Machine Intelligence and Cyber Physical Systems</h5>	
			</div>
			<div class="col-md-2 text-center pt-3 pb-4">
				<img id="logo" src="../images/icmicps.jpg"  class="img-responsive" alt="logo" width="120">
			</div>
		</div>	
	</section>
	<!-- Header Section End -->

	<!-- Container Section -->
	<div class="container">
		<!-- Nav Bar Section -->
		<section class="mt-3 mb-3">
			<nav class="navbar navbar-expand-lg">
			
				<!-- Toggler/collapsibe Button -->
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
				<span class="navbar-toggler-icon">
					<i class="fa fa-bars" style="color: white;font-size: 30px;"></i>
				</span>
				</button>
			
				<!-- Navbar links -->
				<div class="collapse navbar-collapse" id="collapsibleNavbar">
				<ul class="navbar-nav">
					<li class="nav-item p-2" >
						<a class="nav-link" style="padding: 12px 8px;" id="home" href="../index.php">Home</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" style="padding: 12px 8px;"href="callForPaper.php">Call for papers</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link"style="padding: 12px 8px;" href="committee.php">Committee</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" style="padding: 12px 8px;"href="keyNote.php">Keynote Speakers</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" style="padding: 12px 8px;"href="registrationFee.php">Registration Fee</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" style="padding: 12px 8px;"href="publication.php">Publication</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" style="padding: 12px 8px;"href="organizer.php">Organizers</a>
					</li>
					<li class="nav-item p-2">
						<a class="nav-link" style="padding: 12px 8px;"href="contacts.php">Contact Us</a>
					</li>
				</ul>
				</div>
			</nav>
		</section>
		<!-- Navbar Section End -->
		
	<!-- Header Section End -->
    <!-- Container Section -->
	<div class="container-fluid">
        <section class="p-3 mb-3 mt-3" style="background-color: white; box-sizing: border-box;">
        <div class="row p-3 justify-content-end" style="position:relative;">
            <button type="button" class="btn btn-primary" onclick="location.href='showAuthor.php'" style="background-color:#40d0c6; border:none; position:absolute; left:1.5%;">Refresh</button>
            <br>
            <input class="form-control" type="text" id="myInput" name="" placeholder="Search" onkeyup="searchfun()" style="width:200px;" >
            </div>    
            <table class="table-bordered table-striped" id="authorTable" style="width: 100%;"> 
            <tr> 
                <th colspan="15" class="pl-2 pt-2 pb-2"><h3>Uploaded Author Records</h3></th> 
                </tr>  
                    <!-- Author Details Table -->
                    <th class="pl-2 pt-2 pb-2">Paper Id</th>	
                    <th class="pl-2 pt-2 pb-2">Paper Title</th>	
                    <th class="pl-2 pt-2 pb-2">First Name</th>	
                    <th class="pl-2 pt-2 pb-2">Middle Name</th>	
                    <th class="pl-2 pt-2 pb-2">Last Name</th>	
                    <th class="pl-2 pt-2 pb-2">Affiliation</th>	
                    <th class="pl-2 pt-2 pb-2">Membership Type</th>
                    <th class="pl-2 pt-2 pb-2">Membership ID</th>
                    <th class="pl-2 pt-2 pb-2">Membership Certificate</th>
                    <th class="pl-2 pt-2 pb-2">Registration Class</th>
                    <th class="pl-2 pt-2 pb-2">Author Type</th>
                    <th class="pl-2 pt-2 pb-2">AmountType</th>	
                    <th class="pl-2 pt-2 pb-2">Amount</th>	 
                    <th class="pl-2 pt-2 pb-2">Payment Type</th>	
                    <th class="pl-2 pt-2 pb-2">Tran Date & Time</th>
                    <th class="pl-2 pt-2 pb-2">Payment Proof</th>		
                    <th class="pl-2 pt-2 pb-2">Country</th>	
                    <th class="pl-2 pt-2 pb-2">State</th>	
                    <th class="pl-2 pt-2 pb-2">City</th>
                    <th class="pl-2 pt-2 pb-2">UTR</th>	
                    <th class="pl-2 pt-2 pb-2">Email</th>	
                    <th class="pl-2 pt-2 pb-2">Mobile(WhatsApp No)</th>
                    <th class="pl-2 pt-2 pb-2">Mobile(Contact No)</th>
                    <th class="pl-2 pt-2 pb-2">SubmissionDateTime</th>	
                </tr> 
                <?php 
            if($total != 0 )
            {
                while($rows = mysqli_fetch_assoc($data)) 
                { 
                    ?> 
                        <tr>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['paperid']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['title']; ?></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['fname']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['mname']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['lname']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['affiliation']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['membershipwith']; ?></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['membershipid']; ?></td>
                            <td class="pl-2 pt-2 pb-2"><a href = "<?php echo $rows['certificate'];?>">click</a></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['registrationclass']; ?></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['authortype']; ?></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['amounttype']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['amount']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['paymenttype']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['transationdt'];?></td>
                            <td class="pl-2 pt-2 pb-2"><a href = "<?php echo $rows['PaymentProof'];?>">click</a></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['country'];?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['state']; ?></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['city']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['utr']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['email'];?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['mobile(whatsUp)']; ?></td>	
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['mobile(Contact)']; ?></td>
                            <td class="pl-2 pt-2 pb-2"><?php echo $rows['currdatetime']; ?></td>
                        </tr> 
                    <?php 
                } 
            }
            ?> 
            <script>
            function showPaymentProof(x)
            {
                file
            }
            function searchfun() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("authorTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
            }
            </script>
	    </table>
        <br>
        <button class="btn btn-primary" style="background-color:#40d0c6; border:none;" onclick="ExportToExcel('xlsx')">
            Download Table
        </button>
        <div class="row justify-content-center">
				<form method="post">
					<input type="hidden" name="logout" value="1"/>
					<button type="submit" class="btn btn-primary" style="background-color:#40d0c6; border:none;">Logout</button>
				</form>
            </div>
    </section>
</div> 
<script>
    function ExportToExcel(type, fn, dl) {
       var elt = document.getElementById('authorTable');
       var wb = XLSX.utils.table_to_book(elt, { sheet: "sheet1" });
       return dl ?
         XLSX.write(wb, { bookType: type, bookSST: true, type: 'base64' }):
         XLSX.writeFile(wb, fn || ('Author_Details.' + (type || 'xlsx')));
    }
</script> 
</body> 
</html>