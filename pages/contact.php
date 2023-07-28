<?php
    if(isset($_POST['login']))
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "collegeconference";

        $conn = mysqli_connect($servername,$username,$password,$database);
        if(!$conn)
        {
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        $name1 = $_POST['name'];
        $email1 = $_POST['email'];
        $mobile1 = $_POST['mobile'];
        $message1 = $_POST['message'];

        $query = "INSERT INTO `contacts`(`name`,`email`,`mobile`,`message`) VALUES ('$name1','$email1','$mobile1','$message1')";
        $query_run = mysqli_query($conn,$query);
        if($query_run)
        {
            if($insert = true){
                echo '<script>alert("Thankyou For Submission!");</script>';
                echo '<script>window.location="contacts.php"</script>';
                //this line is for redirecting to the home page
            }
        }
        else{
            echo "ERROR: $sql <br> $con->error";
        }
        
        // Close the database connection
        $conn->close();
    }