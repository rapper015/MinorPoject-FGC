<?php
include "include/header.php";
include 'database.php';
$obj = new Database();
?>  
<?php
    $table='register';
        if(isset($_POST['submit']))
        {   
            $email=$_POST['email'];
            $phone=$_POST['phone'];
            $fullname=$_POST['fullname'];
            $password=$_POST['password'];
            $member=$_POST['member'];
        
            $obj -> insert($table,['email'=>$email,'phone'=>$phone,'fullname'=>$fullname,'password'=>$password,'member'=>$member]);
        }
    ?>
    <form action="apply_online.php" method="POST">
    <div class="apply_online">
        <div class="overlay">
            <div class="center">
                <h3>REGISTRATION FORM</h3>
                <div class="input-group_applyonline">
                    <input type="email" id="name" name="email" required>
                    <label for="name">Email</label>
                </div>
                <div class="input-group_applyonline">
                    <input type="number" id="name" name="phone"required>
                    <label for="name">Contact Number</label>
                </div>
                <div class="input-group_applyonline">
                    <input type="text" id="name" name="fullname" required>
                    <label for="name">Full name</label>
                </div>
                <div class="input-group_applyonline">
                    <input type="password" id="name" name="password" required>
                    <label for="name">Password</label>
                </div>
                <p><strong>REGISTER AS ?</strong><br><br></p><br>
                    <div id="member">
                        <div id="mem">
                        <p>Writer</p><input type="radio" name="member" value="writer">
                    </div>
                        <div id="mem">
                        <p>Producer</p><input type="radio" name="member" value="producer">
                    </div>
            </div>
                <div class="input_field_terms">

                     <div class="input_field_checkbox">   
                    <p>I hereby, declare that all the above mentioned information is correct</p>
                    <span class="checkmark"></span>
                    <input type="checkbox" required>
                    </span><br>
                </div>
                </div>
                <div class="input_field_terms_submit">
                <a href="#"><input type="submit" name="submit" value="REGISTER" class="btn"></a>
                </div>
                
            </div>
        </div>
    </div>
    </form>
    <?php
    include "include/footer.php";
    ?>