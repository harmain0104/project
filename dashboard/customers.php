 
        <?php

session_start();
if(isset($_SESSION["username"]))
{
    // header("location:http://localhost:82/harmain.php-main/login.php");
}
?>


<?php include "navbar.php"?>
<?php include "sidebar.php"?>



<!-- Page Content -->
<!-- ============================================================== -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row bg-title">
            <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                <h3 class="page-title"> <b>_ Admin _</b></h3> </div>
            <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                <a href="add-user.php" target="_blank" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> Add Users

                </a>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box">
                    <h3 class="box-title">customers</h3>
                    <?php  
                        include "config.php";

                        $query = "SELECT * FROM `customer`";

                        $result = mysqli_query($conn,$query);

                        if(mysqli_num_rows($result)>0)
                        {

                        ?>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>c_id</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>

                            <?php while($row = mysqli_fetch_assoc($result)) 
                             {
                            ?>
                              
                  <tr>
                      <td class='id'><?php echo $row["c_id"]; ?></td>
                      <td><?php echo $row["Name"]; ?></td>
                      <td><?php echo $row["phone"]; ?></td>
                      <td><?php echo $row["email"]; ?></td>
                      <td><?php echo $row["address"]; ?></td>
                       <td class='edit'><a href='update customer.php?id=<?php echo $row["c_id"];  ?>'><i class='fa fa-edit'></i></a></td>
                      <td class='delete'><a href='delete customer.php?id=<?php echo $row["c_id"];  ?>'><i class='fa fa-trash-o'></i></a></td>
                  </tr>
                  <?php } ?>
                           

                      

                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </div>
                </div>
    <!-- /.container-fluid -->

    <?php } ?>

    <br>
    <br>
   <?php include "footer.php" ?>;