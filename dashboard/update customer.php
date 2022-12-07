<?php include "navbar.php"?>
<?php include "sidebar.php"?>

<?php 

include "config.php";

$u_id = $_GET["id"];


$query  = "SELECT * FROM `users` WHERE `u_id` = '{$u_id}'";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result))
{

$row  = mysqli_fetch_assoc($result);
?>
  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Update customers Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="" method ="POST">
                  <div class="form-group">
                          <input type="hidden" name="c_id"  class="form-control" value="1" placeholder="" >
                      </div>
                      <div class="form-group">
                          <label>Name</label>
                          <input type="text" name="Name" class="form-control" value="<?php echo $row["Name"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Phone</label>
                          <input type="text" name="phone" class="form-control" value="<?php echo $row["phone"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>email</label>
                          <input type="text" name="email" class="form-control" value="<?php echo $row["email"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="address" class="form-control" value="<?php echo $row["address"] ?>" placeholder="" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>

                  <!-- /Form -->
                  <?php

                    if(isset($_POST["submit"]))
                    {
                        $c_id = $_GET["id"];
                        $user_name = $_POST["Name"];
                        $user_phone = $_POST["phone"];
                        $user_name = $_POST["email"];
                        $user_address = $_POST["address"];

                        $query1 = "UPDATE `customer` SET `Name`='{$customer_name}',`phone`='{$customer_phone}',`email`='{$customer_email}',`address`='{$customers_address}'";

                        mysqli_query($conn,$query1);
                        
                    }
                  ?>
              </div>
          </div>
      </div>
  </div>
  <?php  } ?>
  <br><br><br>
<?php include "footer.php"; ?>