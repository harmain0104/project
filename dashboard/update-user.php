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
                  <h1 class="admin-heading">Update User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action="" method ="POST">
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value="1" placeholder="" >
                      </div>
                          <div class="form-group">
                          <label> Name</label>
                          <input type="text" name="f_name" class="form-control" value="<?php echo $row['f_name'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label> username</label>
                          <input type="text" name="username" class="form-control" value="<?php echo $row['username'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label> Password</label>
                          <input type="text" name="password" class="form-control" value="<?php echo $row['password'] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Phone</label>
                          <input type="text" name="phone" class="form-control" value="<?php echo $row["phone"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Address</label>
                          <input type="text" name="address" class="form-control" value="<?php echo $row["address"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>city</label>
                          <input type="text" name="city" class="form-control" value="<?php echo $row["city"] ?>" placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="<?php echo $row['role']; ?>">
                              <option value="0">normal User</option>
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>

                  <!-- /Form -->
                  <?php

                    if(isset($_POST["submit"]))
                    {
                        $u_id = $_GET["id"];
                        $user_name = $_POST["name"];
                        $user_name = $_POST["username"];
                        $user_name = $_POST["password"];
                        $user_phone = $_POST["phone"];
                        $user_address = $_POST["address"];
                        $user_city = $_POST["city"];
                        $user_role = $_POST["role"];

                        $query1 = "UPDATE `users` SET `f_name`='{$user_f_name}',`username`='{$user_name}',`password`='{$user_password}',`phone`='{$user_phone}',`address`='{$user_address}',`role`='{$user_role}',`city`='{$user_city}',`email`='{$user_email}'";

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