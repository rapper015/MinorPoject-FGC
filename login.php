<?php
include "include/header.php";
?>
    <div class="login_container">
        <div id="overlay">
            <div class="login_container-main">
                <h1>LOGIN</h1>
            <div class="input-group">
                <input type="text" id="name"required>
                <label for="name"><i class="fa-solid fa-user"></i>User Name/Email</label>
            </div>
            <div class="input-group">
                <input type="text" id="name"required>
                <label for="name"><i class="fa-solid fa-key"></i>Password</label>
            </div>
            <a href="#">Forget Password?</a><br>
            <input type="submit" value="LOGIN" class="login-btn">
            <br> Not a Member?<a href="apply_online.html" style="color:  #ee4242;;"> Sign Up</a>
        </div>
        </div>
    </div>

    <?php
    include "include/footer.php";
    ?>