<!-- header link -->
<?php  include('header.php') ?>
  <body>

        <?php include('nav.php') ?>

        <div class="container">

            <h3 class="text-center p-3">GREEHO.com Survey List</h3>
            <?php
              $query ="SELECT * FROM survey  ORDER BY id asc";
              $run = mysqli_query($con, $query);
              if(mysqli_num_rows($run) > 0){


             ?>
            <!-- Table start-->
            <table class="table">
              <thead class="thead-dark">
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Mobile</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  while($row = mysqli_fetch_array($run)){
                    $id = $row['id'];
                    $name = $row['name'];
                    $email = $row['email'];
                    $phone = $row['phone'];
                    $address = $row['address'];
                    $comment = $row['comment'];

                 ?>
                <tr>
                  <th scope="row"><?php echo $id; ?></th>
                  <td><?php echo $name; ?></td>
                  <td><?php echo $phone; ?></td>
                  <td>
                    <a href="" data-toggle="modal" data-target="#view<?php echo $id; ?>">view</a>
                  </td>
                </tr>
                <?php } ?>
              </tbody>
            </table>

              <!-- Modal -->
              <div class="modal fade" id="view<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h3 class="modal-title text-center" >Details</h3>
                  </div>
                  <div class="modal-body">
                    <h4>Name: <?php echo $name; ?></h4>
                    <h4>Email: <?php echo $email; ?></h4>
                    <h4>Phone: <?php echo $phone; ?></h4>
                    <h4>Address: <?php echo $address; ?></h4>
                    <h4>Comment: <?php echo $comment; ?></h4>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  </div>
                </div>
              </div>
              </div>






            <?php
               }
               else {
                 echo "<center> <h2 class='text-info'> No Users Availabe Now</h2></center>";
               }
            ?>

            <!-- Table end -->

        </div>

<!-- footer link -->
<?php  include('footer.php') ?>
