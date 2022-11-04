<?php
include "include/header.php";
?>

    <div class="contactus">
        <div class="contact-box">
            <div class="contact-left">
                <h3>SEND YOUR FEEDBACK</h3>
                <form method="POST" action="#">
                    <div class="row">
                    <div class="input-group">
                        <input type="text" id="name"required>
                        <label for="name"><i class="fa-solid fa-user"></i>Your Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="number"required>
                        <label for="number"><i class="fa-solid fa-phone-square-alt"></i>Phone No.</label>
                    </div>
                </div>
                <div class="input-group">
                    <input type="text" id="email"required>
                    <label for="email"><i class="fa-solid fa-envelope"></i>Email Id</label>
                </div>
                <div class="input-group">
                    <textarea id="message" rows="8" required></textarea>
                    <label for="message"><i class="fa-solid fa-comments"></i>Your Message</label>
                </div>
                <button type="submit" name="submit"><i class="fa-solid fa-paper-plane"></i>Submit</button>
            </form>
            </div>
            <div class="contact-right">
                <h3>CONTACT US</h3>
                    <div class="reachuscointainer">
                    <div class="reachusitem">
                        <i class="fa-solid fa-location-pin"></i>
                        <strong>Address: </strong>
                        Your Address Here
                    </div>
                    <div class="reachusitem">
                        <i class="fa-solid fa-phone"></i>
                        <strong>Phone: </strong>
                        91+ 1234567890
                    </div>
                    <div class="reachusitem">
                        <i class="fa-solid fa-envelope"></i>
                        <strong>Email: </strong>
                        <a href="mailto:contactus@example.com">contactus@example.com</a>
                    </div>
                    <div class="reachusitem">
                        <i class="fa-solid fa-earth-oceania"></i>
                        <strong>Website: </strong>
                       <a href="www.filmginnycorporation.com">www.FilmGinnyCorporation.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "include/footer.php";
?>