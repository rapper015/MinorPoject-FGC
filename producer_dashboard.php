
<?php
include "include/header.php";
include 'database.php';
$obj = new Database();
?>
<?php
     if(!isset($_SESSION['loggedin']) || ($_SESSION['loggedin'])!=true){
         header("location: login.php");
         exit;
     }
?>
<div class="dashboard">
    <div class="dash_title">
        <H3>PRODUCER'S DASHBOARD</H3>
        <H3>WELCOME <?php echo $_SESSION['fullname']?></H3>

        
    </div>
</div>
</div>
<?php
include "include/footer.php";
?>