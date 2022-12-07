


<?php include "navbar.php"; ?>
<?php include "sidebar.php"; ?>


  <div id="admin-content">
      <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <h1 class="admin-heading">Add New Book</h1>
             </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form -->
                  <form  action="save book.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                          <label for="books_title">Title</label>
                          <input type="text" name="books_title" class="form-control" autocomplete="off" required>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1"> Description</label>
                          <textarea name="booksdesc" class="form-control" rows="5"  required></textarea>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Category</label>
                          <select name="category" class="form-control">
                              <option value="" selected> Select Category</option>
                              <option value="" selected> Books</option>

                           <?php

                               include "config.php";
                               $query = "INSERT INTO `post`(`title`, `description`, `category`, `post_date`, `author`, `post_image`) VALUES ('{$post_title}','{$post_description}','{$post_category}','{$post_date}','{$post_author}','{$post_image}')";
                               $result = mysqli_query($conn,$query);
                               if(mysqli_num_rows($result) > 0)
                               {
                                  while ($row = mysqli_fetch_assoc($result))
                                  {
                                    echo "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
                                  }
                                 
                                }
                                
                         ?>
                          </select>
                      </div>
                      <div class="form-group">
                          <label for="exampleInputPassword1">Book image</label>
                          <input type="file" name="fileToUpload" required>
                      </div>
                      <input type="submit" name="submit" class="btn btn-danger" value="Save" required />
                  </form>
                  <!--/Form -->
              </div>
          </div>
      </div>
  </div>
<?php include "footer.php"; ?>
