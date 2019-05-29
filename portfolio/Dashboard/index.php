<?php
  include '../cnx.php';
  include '../inc/session.php';
  Session::start();
  $select = $conn->query('SELECT id_AD,about,nom,adresse,phone,email FROM admin_user');
  $infos = $select->fetchAll();
  $select_prj = $conn->query('SELECT w.id_works,w.name_prj,w.descr_prj,w.src_img,w.src_img_modals,w.link,c.libelle FROM works w, categorie c WHERE w.id_works=c.id_cat');
  $projects = $select_prj->fetchAll();
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Admin - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <link rel="stylesheet" href="css/css_styles.css">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.php">Dashboard</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
    </form>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="Add project.php">
          <i class="fas fa-ad"></i>
          <span>Add projects</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="Delete_Project.php">
        <i class="fas fa-trash-alt"></i>
          <span>Delete projects</span></a>
      </li>
    </ul>

    <div id="content-wrapper">
      <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="index.php">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Overview</li>
        </ol>
      </div>
    
      <table class="table" style="margin-top: 0px; width: 97%; margin-left: 4px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">img_src</th>
                <th scope="col">img_src_modals</th>
                <th scope="col">categorie</th>
                <th scope="col" >Link</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($projects as $project):?>
            <tr >
                <td><?=$project['name_prj'];?></td>
                <td><?=$project['descr_prj'];?></td>
                <td><img src="../images/portfolio/<?=$project['src_img'];?>" id="image1"></td>
                <td><img src="../images/portfolio/modals/<?=$project['src_img_modals'];?>" id="image2"></td>
                <td><?=$project['libelle'];?></td>
                <td><?=$project['link'];?></td>
                <td><a href="updateproject.php?id_works=<?=$project['id_works'];?>" class="btn btn-primary">Update</td>
            </tr>
        </tbody>
        <?php endforeach;?>
      </table>

      <table class="table tbls" style="margin-top: 0px; width: 97%; margin-left: 14px;">
        <thead class="thead-dark">
            <tr>
                <th scope="col">About</th>
                <th scope="col">Name</th>
                <th scope="col">Adress</th>
                <th scope="col">Phone</th>
                <th scope="col">Email</th>
                <th scope="col">Update</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($infos as $info):?>
            <tr >
                <td><?=$info['about'];?></td>
                <td><?=$info['nom'];?></td>
                <td><?=$info['adresse'];?></td>
                <td><?=$info['phone'];?></td>
                <td><?=$info['email'];?></td>
                <td><a href="updateinfo.php?id_AD=<?=$info['id_AD'];?>" class="btn btn-primary">Update</td>
            </tr>
        </tbody>
        <?php endforeach;?>
      </table>

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

  </div>
  <!-- /#wrapper -->

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="../login/logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>
</html>