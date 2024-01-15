<?php 
include '../conection.php';


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

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">



  <?php 
  
  $select = "SELECT * FROM category ";

  $query = mysqli_query($conn,$select);


if (isset($_POST['delete_data'])){
  $allId = $_POST['cat_id'];
  $extract_id = implode(',',$allId);

  // echo $extract_id;

  $delete = "DELETE FROM category WHERE id IN( $extract_id)";

  $query = mysqli_query($conn,$delete);

if($query){

  header("Location:category.php");
}else{
  echo '<script>

  alert("Something went wrong")
  </script>';
}

}


  
  ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Category</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->

<div class="container">
<div class="row">
  <div class="col-lg-12">
    <a href="./add-cat.php" class="btn btn-primary m-3">Add New</a>
  </div>
</div>


<form action="" method="POST">
  <div class="row">
    <div class="col-lg-12">
    <table class="table">
 


  <?php   
  
  while ($row = mysqli_fetch_array($query)){

    if($row > 0){
?>

<thead>
    <tr>
      <th scope="col">SR.NO</th>
      
      <th scope="col">Category</th>
      
      
      <th scope="col">Action</th>
      <th scope="col"><button class="btn btn-danger" name="delete_data" >Delete</button></th>
    </tr>
  </thead>
  <tbody>

<tr>
  <td ><?php echo $row['id'] ?></td>
  <td><?php echo $row['cat_name'] ?></td>
  <td><a class="btn btn-success" href="">Edit</a> </td>
  
  <td style="width:10px;"><input type="checkbox" name="cat_id[]" value="<?= $row['id'] ?>" class="single_check"></td>
  
      
    </tr>

<?php
    }else {

      ?>

<!-- <tr>
<td >no Data Found</td>
<td>no Data Found </td>
<td>no Data Found</td>


</tr> -->

<p>No Data </p>
      <?php

    }

     
  }
  
  
  
  ?>
    <!-- <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
  
      
    </tr> -->
  

    
  </tbody>
</table>
    </div>
  </div>
  </form>
</div>

    </div>
    <!-- /.content-header -->

    
  </div>
  <!-- /.content-wrapper -->
  
</div>
<!-- ./wrapper -->
<?php 
include 'footer.php';
?>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<script>

let checkmain = $('#checkmain')
let checkall = $('.single_check')

checkmain.change(function(){


  if (checkmain.checked) {
                console.log("Checkbox is checked");
            } else {
                console.log("Checkbox is unchecked");
            }
  
});

</script>



<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
</body>
</html>
