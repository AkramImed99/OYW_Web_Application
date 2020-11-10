<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Page statique Admin</title>
  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
  <link rel="shortcut icon" href="image/logo.svg">


</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">OYW</a>
    <img class="navbar-brand mr-1" href="index.html" SRC="image/logo.svg" ALT="some text" WIDTH=60 HEIGHT=40>
    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <div class="input-group">
      <!--  <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2"> -->
        <a href="#" class="myButton form-control">Visiter le site en tant qu'un utilisateur</a>
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">
            <i class="fas fa-users"></i>         </button>
        </div>
      </div>
    </form>

    <!-- Navbar -->


  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Statistique Admin</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-fw fa-table"></i>
          <span>Gestion des utilisateurs</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-money-check-alt"></i>
          <span>Gestion du facturation</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-user-circle"></i>
          <span>Gestion du compte</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tables.php">
          <i class="fas fa-sign-out-alt"></i>
          <span>Déconnexion</span></a>
      </li>

    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Tableau</li>
        </ol>

        <!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header" style="font-weight: bold">
            <i class="fas fa-table"></i>
            Tableau des utilisateurs</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Benifices</th>
                    <th>Premium</th>
                    <th>Supprimer</th>


                </tr>
                </thead>
                <tfoot>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Email</th>
                    <th>Benifices</th>
                    <th>Premium</th>
                    <th>Supprimer</th>

                </tr>
                </tfoot>
                <tbody>
                <tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>

        </div>



      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

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
          <a class="btn btn-primary" href="login.html">Logout</a>
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
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>


  <!-- Demo scripts for this page-->
 <!-- <script src="js/demo/datatables-demo.js"></script> -->
      <script>
      $(document).ready(function(){
            fetch_data();
            function fetch_data() {
                var dataTable=$('#dataTable').DataTable({
                    "processing": true,
                    "serverSide":true,
                    "ajax":{
                        url:"tablesBack.php",
                        type:"POST"
                    }

                });

            }

          $(document).on('click', '.deleteUser',   function(){

            if (!confirm(" Voulez vous Supprimer ")) return;



             var id = $(this).data("id");
            $.ajax({
                  url:"delete.php",
                  method:"POST",
                  data:{id:id},
                  success:function(data){
                    $('#dataTable').DataTable().destroy();
                    fetch_data();
                  }
               });

        });
      });
</script>


</body>
<script>
    $(document).on('click','.confirm-btn', function () {
        var id=$(this).data("id");
        $.ajax({
            url:"confirmation.php",
            method:"POST",
            data:{id:id}
        });
    });

</script>
</html>