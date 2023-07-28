<?php
    $fname = '';
    $mname = '';
    $lname = '';
    $country ='';
    $state ='';
    $city ='';
    $email = '';
    $mobilew = '';
    $mobilec ='';
    if(isset($_POST['pidbtn']))
    {
        $pid = $_POST['pprid'];
        $server = "localhost";
        $username = "root";
        $password = "";
        $dbname = "collegeconference";

        // Create a database connection
        $con = mysqli_connect($server, $username, $password,$dbname);

        // Check for connection success
        if(!$con)
        {
            die("connection to this database failed due to" . mysqli_connect_error());
        }
        else
        {
            $query="Select * From `authordata` where paperid = '$pid'"; 
            $data = mysqli_query($con,$query);
            $total = mysqli_num_rows($data);
            if($total == 1 )
            {
                $rows = mysqli_fetch_assoc($data);
                //$papertitle = $_POST['papertitle'];
                $fname = $rows['fname'];
                $mname = $rows['mname'];
                $lname = $rows['lname'];
                //$affiliation = $_POST['affiliation'];
                //$membershiptype = $_POST['mtype'];
                //$membershipid = $_POST['membershipid'];
                //$membershipcertificate = $_POST['mcertificate'];
                //$registrationclass = $_POST['regClass'];
                //$authortype = $_POST['authortype'];
                //$amounttype = $_POST['amounttype'];
                //$amount = $_POST['amount'];
                //$payment = $_POST['payment'];
                //$datetime = $_POST['datetime'];
                $country = $rows['country'];
                $state = $rows['state'];
                $city = $rows['city'];
                //$UTR = $_POST['utr'];
                $email = $rows['email'];
                $mobilew = $rows['mobile(whatsUp)'];
                $mobilec = $rows['mobile(Contact)'];
            }
            else
            {
               echo '<script>alert("Paper id not Found ")</script>';
            }    
        }
    }
    if(isset($_POST['sbtn']))
    {
                // Set connection variables
                // $server = "localhost";
                // $username = "root";
                // $password = "";
                
                // Set connection variables
                     $server = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "collegeconference";

                // Create a database connection
                $con = mysqli_connect($server, $username, $password,$dbname);

                // Check for connection success
                if(!$con)
                {
                    die("connection to this database failed due to" . mysqli_connect_error());
                }
                // echo "Success connecting to the db";

                // Collect post variables
                $paperid = $_POST['paperid'];
                $papertitle = $_POST['papertitle'];
                $fname = $_POST['fname'];
                $mname = $_POST['mname'];
                $lname = $_POST['lname'];
                $affiliation = $_POST['affiliation'];
                $membershiptype = $_POST['mtype'];
                $membershipid = $_POST['membershipid'];
                //$membershipcertificate = $_POST['mcertificate'];
                
                $certificatename = $_FILES["mcertificate"]["name"];
                $tempcername = $_FILES["mcertificate"]["tmp_name"];
                $file_ext = pathinfo($certificatename,PATHINFO_EXTENSION);
                $certificatename = pathinfo($certificatename,PATHINFO_FILENAME); 
                $certificate_folder = "membership_certificate/".$certificatename.".".$paperid.".".$file_ext;
                move_uploaded_file($tempcername,$certificate_folder);

                $registrationclass = $_POST['regClass'];
                $authortype = $_POST['authortype'];
                $amounttype = $_POST['amounttype'];
                $amount = $_POST['amount'];
                $payment = $_POST['payment'];
                // Payment Proof images upload code 
                $filename = $_FILES["paymentproof"]["name"];
                $tempname = $_FILES["paymentproof"]["tmp_name"];
                $file_ext = pathinfo($filename,PATHINFO_EXTENSION);
                $filename = pathinfo($filename,PATHINFO_FILENAME); 
                $folder = "payment_proof/".$filename.".".$paperid.".".$file_ext;
                move_uploaded_file($tempname,$folder);

                $datetime = $_POST['datetime'];
                $country = $_POST['country'];
                $state = $_POST['state'];
                $city = $_POST['city'];
                $UTR = $_POST['utr'];
                $email = $_POST['email'];
                $mobilew = $_POST['mobilew'];
                $mobilec = $_POST['mobilec'];
                $sql = "INSERT INTO `authordata`(`paperid`,`title`,`fname`,`mname`,`lname`,`affiliation`,`membershipwith`,`membershipid`,`certificate`,`registrationclass`,`authortype`,`amounttype`,`amount`,`paymenttype`,`transationdt`,`PaymentProof`,`country`,`state`,`city`,`utr`,`email`,`mobile(whatsUp)`,`mobile(Contact)`) VALUES ('$paperid','$papertitle','$fname','$mname','$lname','$affiliation','$membershiptype','$membershipid','$certificate_folder','$registrationclass','$authortype','$amounttype','$amount','$payment','$datetime','$folder','$country','$state','$city','$UTR','$email','$mobilew','$mobilec')";
                // Execute the query
                if(mysqli_query($con, $sql))
                {
                    // echo "Successfully inserted";

                    // Flag for successful insertion
                        if($insert = true)
                        {
                            echo '<script>alert("Thankyou For Submission!");</script>';
                            echo '<script>window.location="authorform.php"</script>';
                        }
                    }
                else
                {
                    echo "ERROR: $sql <br> $con->error";
                }
                                
                // Close the database connection
                $con->close();
                }
        ?>
        <?php
            include('import/head.php');
        ?>
        <!-- Navbar Section End -->

        <!-- Body Section  -->
        <section class="container mt-3 mb-3 pt-4 pb-4" style="background-color:white; ">
            <div>
                <h4 class="style1 heading">
                    <font font-weight:bold>Author Information</font>
                </h4>
                <h4>&nbsp;</h4>
            </div>
            <div id="askFeild" class="">
                <p>Is it your first paper?</p>
                <select name="" id="paperNo" onchange="enableInput(this)" onfocus="this.selectedIndex = -1">
                    <option value="" selected disabled>please select</option>
                    <option value="1" onclick ="cleanAllFields()">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <div id="pprId" class="d-none">
                <form action="#" method="post">
                    <label for="pprId">Please Enter Your First Paper Id!</label>
                    <input type="text" name="pprid">
                    <button type="submit" onclick="showForm()" name = "pidbtn">Submit</button>
                </form>
            </div>
            <p id="newpprHeading"class="d-none">Enter Your new paper details!</p>
            <form method="post" id="firstForm" action = "authorForm.php" enctype = "multipart/form-data">
                <div class="form-group"><label for="text">Paper ID</label>
                    <input class="form-control" type="number" name="paperid" placeholder="Paper ID" notrequired>
                </div>
                <div class="form-group"><label for="text">Paper Title</label>
                    <textarea class="form-control" type="text" name="papertitle" placeholder="Paper Title"
                        notrequired></textarea>
                </div>
                <div class="form-group"><label for="text">Participant's Name</label>
                    <div class="row">
                        <div class="col">
                            <input class="form-control hide" type="text" name="fname" placeholder="First Name" notrequired value= "<?php echo $fname ?>">
                        </div>
                        <div class="col">
                            <input class="form-control hide" type="text" name="mname" placeholder="Middle Name" value= "<?php echo $mname ?>">
                        </div>
                        <div class="col">
                            <input class="form-control hide" type="text" name="lname" placeholder="Last Name"  value= "<?php echo $lname ?>">
                        </div>
                    </div>
                </div>
                <div class="form-group"><label for="text">Affiliation (University/College/Industry etc.)</label>
                    <input class="form-control" type="text" name="affiliation"
                        placeholder="Affiliation (University/College/Industry etc.)" notrequired>
                </div>
                <div class="form-group"><label for="radio">Do you have membership with professional bodies?</label>
                    yes <input type="radio" name="member" onclick = "hideShowMembership(0)" checked >
                    No <input type="radio" name="member" onclick = "hideShowMembership(1)">
                </div>
                <div id="membership">
                    <div class="form-group"><label for="text">Enter the type of membership</label>
                        <input class="form-control" type="text" name="mtype"
                            placeholder="Memebership type">
                    </div>
                    <div class="form-group"><label for="text">Enter the membership id</label>
                        <input class="form-control" type="text" name="membershipid"
                            placeholder="Membership id">
                    </div>
                    <div><label for="text">Please upload your membership certificate (in jpg only maximum size 5 MB)</label>
                        <input id="fileUpload" type="file" name = "mcertificate">
                    </div>
                </div>
                <div class="form-group"><label for="text">Registration Class</label>
                        <select name="regClass" class="form-control" id="slctReg">
                            <option value="Journal of Physics">Journal of Physics</option>
                            <option value="ISBN Proceeding">ISBN Proceeding</option>
                        </select>
                </div>
                <div class="form-group"><label for="text">Author Type</label>
                    <select class="form-control" name="authortype" id="">
                        <option value = "" disabled >--select---</option>
                        <option value="Regular Research Scholars and Students">Regular Research Scholars and Students</option>
                        <option value="Academician">Academician</option>
                        <option value="Delegates">Delegates (R&D centers and Industry)</option>
                    </select>
                </div>
                <div class="form-group"><label>Amount Type</label>
                    <select class="form-control" name="amounttype" id="">
                        <option value="national">National</option>
                        <option value="internation">International</option>
                    </select>
                </div>
                <div class="form-group"><label for="number">Amount</label>
                    <input class="form-control" type="number" name="amount" placeholder="Amount" notrequired>
                </div>
                <div class="form-group"><label for="text">Payment Mode</label>
                    <select class="form-control" name="payment" id="">
                        <option value="patym">Patym</option>
                        <option value="phonepe">Phonepe</option>
                        <option value="gpay">Gpay</option>
                        <option value="amazonpay">Amazon Pay</option>
                        <option value="bhim">BHIM</option>
                        <option value="neft">NEFT</option>
                        <option value="dedraft">Demanf Draft</option>
                        <option value="otherpay">Others</option>
                    </select>
                </div>
                <div class="form-group"><label for="number">Transition Date & Transition Time</label>
                    <input class="form-control" type="datetime-local" name="datetime" placeholder="Date and Time"
                        notrequired>
                </div>
                <div>
                    Please upload Payment Proof(in jpg only maximum size 5 MB)
                            <input  type="file" name = "paymentproof">
                            <!-- <input type = "submit" name = "submit" value = "Upload"> -->
                </div> 
                <div class="form-group"><label for="text">Country</label>
                    <select class="form-control" name="country" id="" value= "<?php echo $country ?>">
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                        <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                    </select>
                </div>
                <div class="form-group "><label for="text">State</label>
                    <input class="form-control hide" type="text" name="state" placeholder="State" notrequired value= "<?php echo $state ?>">
                </div>
                <div class="form-group "><label for="text">City</label>
                    <input class="form-control hide" type="text" name="city" placeholder="City" notrequired value= "<?php echo $city ?>">
                </div>
                <div class="form-group"><label for="text">UTR/Transaction Number</label>
                    <input class="form-control" type="text" name="utr" placeholder="UTR/Transaction No." notrequired>
                </div>
                <div class="form-group"><label for="email">E-mail</label>
                    <input class="form-control hide" type="email" name="email" placeholder="E-mail" notrequired value= "<?php echo $email ?>">
                </div>
                <div class="form-group"><label for="text">Mobile No (WhatsApp)</label>
                    <input class="form-control hide" type="number" name="mobilew" placeholder="Mobile No." notrequired value= "<?php echo $mobilew ?>">
                </div>
                <div class="form-group"><label for="text">Mobile No (Contact No)</label>
                    <input class="form-control hide" type="number" name="mobilec" placeholder="Mobile No." notrequired value= "<?php echo $mobilec ?>">
                </div>
                <div class="row justify-content-center">
                    <button class="btn" type="submit" name = "sbtn">SUBMIT</button>
                </div>
            </form>
            <h6>&nbsp;</h6>
            <div class="row justify-content-center">
                <a href="ptype.php" style="text-decoration: none; font-weight: bolder;"> Go Back</a>
            </div>
        </section>

    </div>
    <!-- Container Section End -->
    <script src="js/wow.js"></script>
    <script>
        wow = new WOW({}).init();
        function enableInput(answer){
            if(answer.value == 0){
                document.getElementById('pprId').classList.remove('d-none');
                document.getElementById('firstForm').classList.add('d-none');
                // document.getElementById('newpprHeading').classList.remove('d-none');
            }
            else{
                // document.getElementById('pprId').classList.add('d-none');
                document.getElementById('firstForm').classList.remove('d-none');
                // document.getElementById('askFeild').classList.add('d-none');
                var elements = document.getElementByClassName('hide');
                for(var i = 0 ; i< elements.length; i++){
                    var e = elements[i];
                    e.innerHTML = ' ';
                }
            }
        };
        function showForm(){
            document.getElementById('firstForm').classList.remove('d-none');
        };
        function hideShowMembership(x)
        {
            if(x == 0)
            {
                document.getElementById('membership').style.display = "block";
            }
            else
            {
                document.getElementById('membership').style.display = "none";
            }
            return ;
        };
        function cleanAllFields()
        {
            
        };
    </script>
</body>
</html>