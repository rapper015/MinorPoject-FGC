<?php
include "include/header.php";
include "include/databaseConnection.php";
?>
    <div class="login_container">
        <div id="overlay">
            <div class="login_container-main">
                <h1>REGISTER YOUR COMPLAINT</h1><br>
            <div class="input-group">
                <input type="text" id="name"required>
                <label for="name"><i class="fa-solid fa-user"></i>Name</label>
            </div>
            <div class="input-group">
                <input type="text" id="name"required>
                <label for="name"><i class="fa-solid fa-user"></i>Email</label>
            </div>
            <div class="input-group">
                <input type="text" id="name"required>
                <label for="name"><i class="fa-solid fa-user"></i>Phone Number</label>
            </div>
            <div class="input-group">
                    <textarea id="message" rows="8" required></textarea>
                    <label for="message"><i class="fa-solid fa-comments"></i>Your Message</label>
                </div>
            <input type="submit" value="SUBMIT" class="login-btn">
        </div>
    </div>

    <?php
include "include/footer.php";
?>