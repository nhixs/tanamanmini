<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tanaman Mini</title>
  <link rel="icon" href="./gambar/sistem/logo.png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="assets/plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
  <link rel="stylesheet" href="admin/css/admin.css" />
</head>

<body class=" bg-primary">
  <div class="container">
    <div class="login-box">

      <center>


        <img class="adminLogo" src="gambar/sistem/WhatsApp Image 2021-03-21 at 10.17.14.jpeg" />

        <?php
        if (isset($_GET['alert'])) {
          if ($_GET['alert'] == "gagal") {
            echo "<div class='alert alert-danger'>Login gagal! username dan password salah!</div>";
          } else if ($_GET['alert'] == "logout") {
            echo "<div class='alert alert-success'>Anda telah berhasil logout</div>";
          } else if ($_GET['alert'] == "belum_login") {
            echo "<div class='alert alert-warning'>Anda harus login untuk mengakses halaman admin</div>";
          }
        }
        ?>
      </center>

      <div class="login-box-body">
        <form action="periksa_login.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control email" placeholder="E-mail" name="username" required="required" autocomplete="off">
            <span class="glyphicon glyphicon-envelope form-control-feedback" style="right: 5em;"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control password" placeholder="Password" name="password" required="required" autocomplete="off">
            <span class="glyphicon glyphicon-lock form-control-feedback email-icon" style="right: 5em;"></span>
          </div>
          <div class="row">
            <div class="col-xs-offset-8 col-xs-4">
              <button type="submit" class="btn-login">LOGIN</button>
            </div>
          </div>
        </form>

        <br>
      </div>
    </div>
  </div>


  <script src="assets/bower_components/jquery/dist/jquery.min.js"></script>
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

</body>

</html>