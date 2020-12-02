<!-- header link -->
<?php  include('header.php') ?>
  <body>

        <?php include('nav.php') ?>

        <div class="container">

            <h3 class="text-center p-3">Welcome to GREEHO.com Survey </h3>

            <!-- form start-->
              <div class="row">
                <div class="col-md-3">

                </div>
                <div class="col-md-6">
                  <div class="card p-5 bg-info">
                    <?php

                         if(isset($_POST['submit'])){

                           $name = mysqli_real_escape_string($con,trim($_POST['name']));
                           $email = mysqli_real_escape_string($con,trim($_POST['email']));
                           $phone = mysqli_real_escape_string($con,trim($_POST['phone']));
                           $address = mysqli_real_escape_string($con,trim($_POST['address']));
                           $comment = mysqli_real_escape_string($con,trim($_POST['comment']));


                            $insert_query = "INSERT INTO survey(name, email, phone, address, comment)
                             VALUES('$name','$email','$phone','$address','$comment')";
                             if(mysqli_query($con, $insert_query)){
                               $msg = "Data Up Successfully";
                             }
                             else {
                               $error ="Data Up Has Not Been Success!";
                             }
                           }


                     ?>
                     <div class="text-center">
                      <?php
                        if(isset($error)){
                          echo "<span class='pull-right text-danger'>$error</span>";
                        }
                        elseif(isset(($msg)))  {
                          echo "<span class='pull-right text-light'>$msg</span>";
                        }
                       ?>
                    </div>

                <form method="post" action="">
                <div class="form-group">
                  <label >Name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Your Full Name" data-validation="required">
                </div>
                <div class="form-group">
                  <label >Email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="Enter Your Email" data-validation="required email">
                </div>
                <div class="form-group">
                  <label >Phone</label>
                  <input type="text" class="form-control" id="phone" name="phone" placeholder="Your Mobile Number" data-validation="required number">
                </div>

                <div class="form-group">
                  <label>Address</label>
                  <textarea class="form-control" id="address" name="address" rows="3" data-validation="required" placeholder="Enter Your Current Address Here....."></textarea>
                </div>

                <div class="form-group">
                  <label> Your Comment</label>
                  <textarea class="form-control" id="comment" name="comment" rows="3" data-validation="required" placeholder="Write Your Valuable Comment ...."></textarea>
                </div>
                <div class="form-group">
                  <input type="submit" class="form-control btn btn-outline-warning font-weight-bold"  name="submit"  value="Submit" >
                </div>
                </div>
                <div class="col-md-3">

                </div>
              </div>
              </form>
              </div>

            <!-- form end -->

        </div>

<!-- footer link -->
<?php  include('footer.php') ?>
