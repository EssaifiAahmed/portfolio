<?php
    include 'insertProjects.php';
?>
<!DOCTYPE html>
 <html>
     <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">
    
      <title>Add-Project</title>
    
      <!-- Custom fonts for this template-->
      <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    
      <!-- Custom styles for this template-->
      <link href="./css/sb-admin.css" rel="stylesheet">

      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

      <link rel="stylesheet" href="./css/formProduct.css">

     </head>
     <body>
      <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

        <a class="navbar-brand mr-1" href="index.php">Dashboard</a>
    
        <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
          <i class="fas fa-bars"></i>
        </button>
    
        <!-- Navbar Search -->
        <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        </form>
    
          <!-- Navbar -->
          <a data-toggle="modal" data-target="#exampleModal">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">x</span>
                  </button>
                </div>
                <div class="modal-body">
                  Select "Logout" below if you are ready to end your current session.
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <a class="btn btn-primary" href="../login/logout.php">Logout</a>
                </div>
              </div>
            </div>
          </div>
    
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
              <li class="breadcrumb-item active">Add Project</li>
            </ol>
          </div>

          <!--Form adding project--->
          <form action="" method="post">
            <div class="form-row">
              <div class="form-group col-md-4">
                <label for="productname" id="labelproduct">Project ID</label>
                <input type="text" class="form-control" id="productid" name="Prj_ID" placeholder="Product ID">
              </div>
              <div class="form-group col-md-4">
                <label for="productname" id="labelname">Product Name</label>
                <input type="text" class="form-control" id="productname" name="name" placeholder="Product Name">
              </div>
            </div>
            <div class="form-group">
              <label for="descriptionioninput" id="Descript">Description</label>
              <textarea type="textarea" class="form-control" name="description" id="description"></textarea>
            </div>
              <div class="form-group col-md-4">
                <label for="Categorie" id="labelcat">Categorie</label>
                <select id="Categorie" class="form-control" name="categorie">
                  <option selected>Choose a categorie</option>
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                  <option>6</option>
                  <option>7</option>
                </select>
              </div>
              <div class="form-group">
              <label for="descriptionioninput" id="Descript">Link</label>
              <textarea type="textarea" class="form-control" name="linkgithub" id="description"></textarea>
            </div>
            <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="file" id="filechose" name="pics">
                  </div>
            </div>
            <button type="submit" class="btn btn-primary" id="addProduct">Add project</button>
            <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="file" id="filechose2" name="picsmodals">
                  </div>
            </div>
          </form>
        </div>
         
        <!-- Bootstrap core JavaScript-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

        <!-- Core plugin JavaScript-->
        <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

        <!-- Custom scripts for all pages-->
        <script src="js/sb-admin.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
     </body>
</html>