<?php include "navbar.php"?>
<?php include "sidebar.php"?>


<?php 
    
    include "config.php";

    $query = "SELECT * FROM `users` WHERE `role` = 0";

    $result = mysqli_query($conn,$query);

    if(mysqli_num_rows($result)>0)
    {
 
?>
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
                            <h3 class="box-title">Users</h3>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                            <th>u_id</th>
                                            <th>F_Name</th>
                                            <th>username</th>
                                            <th>Password</th>
                                            <th>Address</th>
                                            <th>Role</th>
                                            <th>city</th>
                                            <th>Email</th>
                                            <th>Update</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php while($row = mysqli_fetch_assoc($result)) 
                                     {
                                    ?>
                                      
                           <tr>
                              <td class='id'><?php echo $row["u_id"];  ?></td>
                              <td><?php echo $row["f_name"]; ?></td>
                              <td><?php echo $row["username"]; ?></td>
                              <td><?php echo $row["password"]; ?></td>
                              <td><?php echo $row["address"]; ?></td>
                              <td><?php echo $row["city"]; ?></td>
                              <td><?php echo $row["email"]; ?></td>
                              <td>
                              <?php

                              if($row["role"]=="1")
                              {
                                echo "admin";
                              } 
                              else{
                                echo " normal user";
                              }

                              ?>
                             </td>
                               <td><?php echo $row["city"]; ?></td>
                               <td class='edit'><a href='update-user.php?id=<?php echo $row["u_id"];  ?>'><i class='fa fa-edit'></i></a></td>
                              <td class='delete'><a href='delete-user.php?id=<?php echo $row["u_id"];  ?>'><i class='fa fa-trash-o'></i></a></td>
                          </tr>
                          <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

            <?php } ?>
           <?php include "footer.php" ?>;