<?php include "navbar.php";?>
<?php include "navbar.php";?>
<?php include "sidebar.php";

ob_start();
error_reporting(E_ERROR | E_PARSE);
?>
<div id="admin-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="admin-heading">Add User</h1>
            </div>
            <div class="container col-md-offset-3 col-md-6">
                <!-- Form Start -->
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label> F_Name</label>
                        <input type="text" name="f_name" class="form-control" placeholder=" Name" required>
                    </div>
                    <div class="form-group">
                        <label> Username</label>
                        <input type="text" name="username" class="form-control" placeholder=" username" required>
                    </div>
                    <div class="form-group">
                        <label> Password</label>
                        <input type="text" name="password" class="form-control" placeholder=" password" required>
                    </div>
                    <div class="form-group">
                        <label> Phone</label>
                        <input type="text" name="phone" class="form-control" placeholder=" phone" required>
                    </div>
                    <div class="form-group">
                        <label> Address</label>
                        <input type="text" name="address" class="form-control" placeholder=" address" required>
                    </div>
                    <div class="form-group">
                        <label>User Role</label>
                        <select class="form-control" name="role">
                            <option value="0">Normal User</option>
                            <option value="1">Admin</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>city</label>
                        <input type="text" name="city" class="form-control" placeholder="city" required>
                    </div>
                    <div class="form-group">
                        <label>email</label>
                        <input type="text" name="email" class="form-control" placeholder="email" required>
                    </div>
                    <input type="submit" name="save" class="btn btn-danger" value="Save" required />
                </form>
                <br>
                <!-- Form End-->
            </div>
        </div>
    </div>
</div>
<?php
if(isset($_POST["save"])) {



    $user_f_name = $_POST["f_name"];
    $user_name = $_POST["username"];
    $user_password = $_POST["password"];
    $user_phone = $_POST["phone"];
    $user_address = $_POST["address"];
    $user_role = $_POST["role"];
    $user_city = $_POST["city"];
    $user_email = $_POST["email"];


    include "config.php";
    $query = "SELECT * FROM users WHERE `username` =  '{$user_name}'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        echo "<script> 
      
      alert('user already exist')
      </script>";
    } else {
        echo $query1 = "INSERT INTO `users`( `f_name`, `username`, `password`, `phone`, `address`, `role`, `city`, `email`) VALUES ('{$user_f_name}','{$user_name}','{$user_password}','{$user_phone}','{$user_address}','{$user_role}','{$user_city}','{$user_email}')";
        mysqli_query($conn, $query1);
        header("Location:users.php");

    }
}
?>
<br><br><br>
<?php include "footer.php"; ?>