<?php
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
    $check=true;
}
?> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Ginny Corporation</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link rel="shortcut icon" href="images/logo.png" type="image/x-icon">
		<script src="https://kit.fontawesome.com/0ef8057b2b.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <nav class="navbar">
        <div class="nav_button">
            <span class="bar1" ></span>
            <span class="bar2" ></span>
        </div>
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" width="90" height="90" ALT="align box" ALIGN=CENTER></a>
        </div>
        <div class="menu">
            <ul>  
                <li><div class="apply_ani"><a href="apply_online.php">Register</a></div></li>
                <li><div class="contact_ani"><a href="contact_us.php">Contact Us</a></div></li>
                <li><div class="about_ani"><a href="our_mission.php" id="aboutus">About Us</a></div>
                <?php
                if($check=true){
                    ?>
                    <li><div class="about_ani"><a href="<?php echo $_SESSION['pagelink'];?>" id="dashboard">Dashboard</a></div></li>
                    <?php
                }
                ?>
            </ul>
        </div>
        <?php
            if(!$check){
                ?>
                <ul>
        <li><div class="login"><a href="login.php">Login</a></div></li>
        </ul>
        <?php
            }
        ?>
        
        <?php
            if($check=true){
                ?>
                <ul>
        <li><div class="login"><a href="logout.php">Logout</a></div></li>
        </ul>
        <?php
            }
        ?>
    </nav>