<!DOCTYPE html>
<html lang="en">
<?php
	include 'database.php';
	$obj = new Database();
?>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>FGC-Download</title>
	<link rel="stylesheet" href="css/payment.css">
</head>
<?php
$table = 'payment';
if (isset($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $city = $_POST['city'];
	$state = $_POST['state'];
	$zipcode = $_POST['zipcode'];


    $obj->insert($table, ['fullname' => $fullname, 'email' => $email, 'address' => $address, 'city' => $city, 'state' => $state, 'zipcode' => $zipcode]);
}
?>
<body>
	<p class="title">FILM GINNY CORPORATION</p>
	<p class="sub-title">PAYMENT SUCCESSFUL</p>
	<div class="download">
		<a href="SCRIPT.pdf">DOWNLOAD FILE<i class="fa-solid fa-file-arrow-down"></i></a>
	</div>
</body>
</html>