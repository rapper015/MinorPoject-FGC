<?php
include "include/header.php";
?>
<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "fgc";

$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);
if (!$conn) {
    die("Sorry we failed to connect : " . mysqli_connect_error());
}
?>
<div class="dashboard">
    <div class="dash_title">
        <H3>PRODUCER'S DASHBOARD</H3>
        <H3>WELCOME USER</H3>
    </div>
</div>
</div>
<?php
include "include/footer.php";
?>