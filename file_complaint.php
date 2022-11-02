<?php
include "include/header.php";
include "include/databaseConnection.php";
?>
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <h1 class="text-center mt-5 mb-5">Register Your Complaint</h1>
            <form  action="#" method="post" enctype="multipart/form-data">         
                <div class="form-group mb-3">
                    <!-- <label for="exampleInputPassword1">Name </label> -->
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Enter Name">
                </div>
                <div class="form-group mb-3">
                    <!-- <label for="exampleInputEmail1">Email address</label> -->
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">     
                </div>
                <div class="form-group mb-3">
                    <!-- <label for="exampleInputPassword1">Phone Number</label> -->
                    <input type="number" class="form-control" id="exampleInputPassword1" placeholder="Enter Phone Number">
                </div>
                <div class="form-group mb-3">
                    
                     <textarea class="from-check-input " name="" id="" cols="50" rows="5" placeholder="Enter Message"></textarea>
                    
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <?php
include "include/footer.php";
?>