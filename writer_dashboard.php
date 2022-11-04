<?php
include "include/header.php";
?>
<?php
    $db_host = "localhost";
    $db_user = "root";
    $db_pass = "";
    $db_name = "fgc";

    $conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);
    if(!$conn){
        die("Sorry we failed to connect : " . mysqli_connect_error());
    }
?>
    <div class="dashboard writer">
        <div class="overlay">
        <div class="dash_title">
            <H3>WRITER'S DASHBOARD</H3>
            <H3>WELCOME USER</H3>
        </div>
        <h3 style="color: white;">UPLOAD YOUR SCRIPT</h3>
        <div class="scpt_upload">
        <form action="">
        <div class="input-group">
                        <input type="text" id="scpt_title" required>
                        <label for="scpt_title">Title</label>
        </div>
        <div class="input-group">
                        <textarea  id="scpt_summary" rows="10" cols="70" required></textarea>
                        <label for="scpt_summary">Summary</label>
        </div>
        <div class="upload">
        <p><strong>UPLOAD YOUR SCRIPT PDF HERE</strong></p>
                    <input type="file" required><br><br>
                </div>
                <div class="input_field_terms_submit">
                <a href="#"><input type="submit" value="Upload" class="btn"></a>
                </div>
        </form>
    </div>
    </div>
    </div>
<?php
    include "include/footer.php";
?>