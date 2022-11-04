<?php
include "include/header.php";
?>
    <div class="apply_online">
        <div class="overlay">
            <div class="center">
                <h3>REGISTRATION FORM</h3>
                <div class="input-group_applyonline">
                    <input type="text" id="name" required>
                    <label for="name">Email</label>
                </div>
                <div class="input-group_applyonline">
                    <input type="number" id="name" required>
                    <label for="name">Contact Number</label>
                </div>
                <div class="input-group_applyonline">
                    <input type="number" id="name" required>
                    <label for="name">Full name</label>
                </div>
                <!-- <div class="input-group_applyonline">
                    <input type="number" id="name" required>
                    <label for="name">Screen Name</label>
                </div> -->
                <div class="input-group_applyonline">
                    <input type="number" id="name" required>
                    <label for="name">User Name</label>
                </div>
                <div class="input-group_applyonline">
                    <input type="password" id="name" required>
                    <label for="name">Password</label>
                </div>
                <div class="input-group_applyonline">
                    <input type="password" id="name" required>
                    <label for="name"> Re-Enter Password</label>
                </div>
                <p><strong>REGISTER AS ?</strong><br><br></p><br>
                    <div id="member">
                        <!-- <div id="mem">
                       <p>Writer</p><input type="radio" name="member" value="Life Member">
                    </div> -->
                        <div id="mem">
                        <p>Writer</p><input type="radio" name="member" value="Regular Member">
                    </div>
                        <!-- <div id="mem">
                        <p>Associate Member</p><input type="radio" name="member" value="Associate Member">
                    </div> -->
                        <div id="mem">
                        <p>Producer</p><input type="radio" name="member" value="Fellow Member">
                    </div>
            </div>
                <!-- <strong>PERMANENT ADDRESS</strong> <br>
                <textarea class="textarea" name="Address" id="" cols="20" rows="5"></textarea><br><br>

                <div class="upload">
                    <strong> UPLOAD YOUR PHOTO</strong>
                     <p>Front facing, clearly visible picture with flat background and focus on the face</p><br>
                     Upload File
                    <input type="file"><br><br>
                </div>



                <div class="upload">
                    <strong><u>Photo ID PROOF</u></strong>
                    <p>Any ONE of these: PAN Card/ Voter ID/Driving License /Passport /Aadhar Card</p><br>
                        Upload File
                        <input type="file"><br><br>
                </div>



                <div class="upload">
                   <strong>PERMANENT ADDRESS PROOF</strong>
                    <p>Any ONE of these: Electricity Bill/Ration Card/Aadhar Card/Driving License/Passport/Leave &
                        License Agreement</p><br>
                        Upload File
                        <input type="file"><br><br>
                </div>


                <div class="upload">
                    <strong>AFFIDAVIT FOR PEN/SCREEN NAME</strong>
                    <p>You will require to submit and additional Affidavit on INR 100 Stamp Paper if you wish to add a
                        Pen/Screen Name which is different from your name as per your Photo ID Proof.</p><br>
                        Upload File
                        <input type="file"><br><br>
                </div> -->
                <div class="input_field_terms">
                    <!-- <h4> <strong> SELF DECLARATION</strong></h4>
                    <p>I shall be solely responsible for managing and operating my SWA Account. By
                        submitting the online application form, I solemnly declare that I have never been a SWA
                        member in the past and the particulars mentioned in the online form are true and correct
                        and I have not concealed any material facts and if it is found otherwise SWA may cancel
                        my SWA membership and/or take other disciplinary and/or legal action. By submitting the
                        online application form I declare that I have read, understood and agreed to SWAs Constitution
                        and
                        Byelaws made under the same. I am aware and shall agree to abide by the existing rules and
                        regulations
                        under the Constitution of SWA as amended time to time. I have downloaded and read the soft copy
                        of
                        SWA Constitution from the link
                        before applying for membership. I declare that I have fully understood all the content of this
                        Declaration By the Applicant.</p><br><br> -->

                     <div class="input_field_checkbox">   
                    <p>I hereby, declare that all the above mentioned information is correct</p>
                    <span class="checkmark"></span>
                    <input type="checkbox">
                    </span><br>
                </div>
                </div>
                <div class="input_field_terms_submit">
                    <input type="submit" value="REGISTER" class="btn">
                </div>
            </div>
        </div>
    </div>
    <?php
    include "include/footer.php";
    ?>