<?php

include 'sidebar.php';


// // echo $_SESSION['admin'];
// if (isset($_SESSION['admin'])){

//   if(isset($_POST['logout'])){
//     session_destroy();
//     header("Location:../index.php");
//   }
// }else{

// echo 'You have log out';
// header("Location:../index.php");
// }


?>

  <div class="wrapper">





    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">

            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->



      <!-- content body  -->

      <div class="container">
        <div class="row">
          <div class="col-lg-6">

            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label"></label>
              <input type="text" class="form-control" name="Title" id="formGroupExampleInput"
                placeholder="Example input placeholder">
            </div>


          </div>

          <div class="col-lg-6">

            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Another label</label>
              <input type="text" class="form-control" name="" id="formGroupExampleInput2"
                placeholder="Another input placeholder">
            </div>

          </div>
        </div>





        <div class="row">
          <div class="col-lg-6">

            <div class="mb-3">
              <label for="formGroupExampleInput" class="form-label">Blog Title</label>
              <input type="text" class="form-control" name="Title" id="formGroupExampleInput"
                placeholder="Example input placeholder">
            </div>


          </div>

          <div class="col-lg-6">

            <div class="mb-3">
              <label for="formGroupExampleInput2" class="form-label">Another label</label>
              <input type="text" class="form-control" name="" id="formGroupExampleInput2"
                placeholder="Another input placeholder">
            </div>

          </div>
        </div>
      </div>


    </div>
    <!-- /.content-wrapper -->

    <!-- <footer class="main-footer">
    <strong>Copyright &copy; 2023 Pelzon</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      
    </div>
  </footer> -->

  </div>
  <!-- ./wrapper -->

  <?php
  include 'footer.php';
  ?>
