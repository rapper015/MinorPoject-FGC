<?php
include "include/header.php";
include 'database.php';
$obj = new Database();
?>
<?php
$table = 'contact';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $message = $_POST['message'];


    $obj->insert($table, ['name' => $name, 'phone' => $phone, 'email' => $email, 'message' => $message]);
}
?>
<div class="contactus">
    <div class="contact-box">
        <div class="contact-left">
            <h3>SEND YOUR FEEDBACK</h3>
            <form method="POST" action="contact_us.php" onsubmit="sendEmail()" reset(); return false;>
                <div class="row">
                    <div class="input-group">
                        <input type="text" id="name" name="name" required>
                        <label for="name"><i class="fa-solid fa-user"></i>Your Name</label>
                    </div>
                    <div class="input-group">
                        <input type="text" id="number" name="phone" required>
                        <label for="number"><i class="fa-solid fa-phone-square-alt"></i>Phone No.</label>
                    </div>
                </div>
                <div class="input-group">
                    <input type="text" id="email" name="email" required>
                    <label for="email"><i class="fa-solid fa-envelope"></i>Email Id</label>
                </div>
                <div class="input-group">
                    <textarea id="message" rows="8" name="message" required></textarea>
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
                    <a href="tel:91+ 1234567890">91+ 1234567890</a>
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
<script src="https://smtpjs.com/v3/smtp.js"></script>
<script>
    function sendEmail() {
        Email.send({
            Host: "smtp.gmail.com",
            Username: "rapper015xd@gmail.com",
            Password: "q=Qmq>C%9#X5WcF?",
            To: "rapper015xd@gmail.com",
            From: document.getElementById('email').Value,
            Subject: "Thank You for Contacting Us",
            Body: "Thank you for getting in touch! We appreciate you contacting us. One of our customer happiness members will be getting back to you shortly.While we do our best to answer your queries quickly, it may take about 10 hours to receive a response from us during peak hours.Thanks in advance for your patience.Have a great day!"
        }).then(
            message => alert(message)
        );
    }
</script>
<?php
include "include/footer.php";
?>