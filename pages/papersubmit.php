<?php
        if(isset($_POST['submit'])){
            
            $file_name = $_FILES['file']['name'];
            $file_type = $_FILES['file']['type'];
            $file_size = $_FILES['file']['size'];
            $file_tem = $_FILES['file']['tmp_name'];

            move_uploaded_file($file_tem,"upfiles/".$file_name);

            // Set connection variables
            //$server = "sql204.unaux.com";
            //$username = "unaux_31272816";
            //$password = "unauxSanket";

            // Set connection variables
             $server = "prod-db.cacq0mswkkas.ap-south-1.rds.amazonaws.com";
                     $username = "root";
                     $password = "CKBGEh7h2d4BGEh7h";

            // Create a database connection
            $con = mysqli_connect($server, $username, $password);

            // Check for connection success
            if(!$con){
                die("connection to this database failed due to" . mysqli_connect_error());
            }

            // Collect post variables
            $title = $_POST['title'];

            $sql1 = "INSERT INTO `icmmt`.`files`(`PaperTitle`,`File`) VALUES ('$title','$file_name')";
            
            // Execute the query
            if(mysqli_query($con, $sql1)){
                // Flag for successful insertion
                // Collect post variables
                // $title = $_POST['title'];
                $name = $_POST['name'];
                $email = $_POST['email'];
                $mobile = $_POST['mobile'];
               
                
                foreach($name as $key => $value){
                    $sql2 = "INSERT INTO `icmmt`.`paper`(`PaperTitle`,`AuthorName`, `Email`, `Mobile`) VALUES ('".$title."','".$name[$key]."','".$email[$key]."','".$mobile[$key]."')";
                    $insert = mysqli_query($con,$sql2);
                }
                // echo $sql;

                // Execute the query
                if($insert == true){
                    echo '<script>alert("Thankyou For Submission!");</script>';
                    echo '<script>window.location="papersubmit.php"</script>';
                }
                else{
                    echo "ERROR: $sql <br> $con->error";
                }
            }
            else{
                echo "ERROR: $sql <br> $con->error";
            }

            // Close the database connection
            $con->close();
        }
?>

<!-- http://icmmt.unaux.com/pages/papersubmit.html -->
<?php
    include('import/head.php');
?>
		<!-- Navbar Section End -->

        <!-- Body Section  -->
        <section class="container mt-3 mb-3 pt-4 pb-4"  style="background-color:white; ">
            <div>
                <label for="text" class="heading" style="font-size: 25px; font-weight: bold;">Authors Information</label>
                <h6>&nbsp;</h6>
            </div>
			<form method="post" enctype="multipart/form-data">
                                        <div class="row">
                                                <label class="col-md-2" for="text" style="font-size: 17px; font-weight: bold;">Paper Title</label>
                                                <div class="col-md-10">
                                                    <input class="form-control" type="text" name="title" placeholder="Paper Title*" required>
                                                </div>
                                            </div><h6>&nbsp;</h6>
                                        <div class="form-group table-responsive">
                                            <table class="table-bordered" style="width: 100%;" id="table_field">
                                                <tr style="background-color: rgba(0,0,0,.05);">
                                                    <th class="p-3">Author Name</th>
                                                    <th class="p-3">Email</th>
                                                    <th class="p-3">Mobile</th>
                                                    <th class="p-3">Add/Remove</th>
                                                </tr>
                                                <tr>
                                                    <td class="p-3"><input class="form-control" type="text" name="name[]" placeholder="Name*"required></td>
                                                    <td class="p-3"><input class="form-control" type="email" name="email[]" placeholder="Email*" required></td>
                                                    <td class="p-3"><input class="form-control" type="number" name="mobile[]" placeholder="Mobile*" required></td>
                                                    <td class="p-3"><button class="btn" type="button" id="add" name="add" style="color: white; font-weight: bold;">Add Author</button></td>
                                                </tr>
                                            </table>
                                        </div>    
                                        <div class="row">
                                            <label class="col-md-2" for="text" style="font-size: 17px; font-weight: bold;">Upload File</label>
                                            <div class="col-md-10">
                                                <input type="file" name="file" required>
                                            </div>
                                        </div>    
                                        <h6>&nbsp;</h6>
                                        <div class="row justify-content-center">
                                            <button class="btn" type="submit" name="submit" style="color: white; font-weight: bold;">SUBMIT</button>
                                        </div>
                                    </form>		
            <h6>&nbsp;</h6>
            <div class="row justify-content-center">
                <a href="/pages/registrationFee.html" style="text-decoration: none; font-weight: bolder;"> Go Back</a>
            </div>
        </section>
		
    </div>
    <!-- Container Section End -->
<script type="text/javascript">
    $(document).ready(function(){
        var html = '<tr><td class="p-3"><input class="form-control" type="text" name="name[]" placeholder="Name*" required></td><td class="p-3"><input class="form-control" type="email" name="email[]" placeholder="Email"></td><td class="p-3"><input class="form-control" type="number" name="mobile[]" placeholder="Mobile"></td><td class="p-3"><button class="btn btn-danger" type="submit" name="remove" id="remove" style="color: white; font-weight: bold;">Remove Author</button></td></tr>';
        
        var max =3;
        var x= 1;

        $("#add").click(function(){
            if(x <= max){
                $("#table_field").append(html);
                x++;
            }
        });
        $("#table_field").on('click','#remove',function(){
                $(this).closest('tr').remove();
                x--;
        });

    });
</script>
<script src="js/wow.js"></script>
<script>
   wow = new WOW({}).init();
</script>	
</body>
</html>