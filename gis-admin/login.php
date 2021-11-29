<?php 

	ob_start();
	session_start();
	error_reporting (E_ALL ^ E_NOTICE);
	// include "koneksi.php";
  require_once('../config/config.php');

	if ($_SESSION['superadmin'] || $_SESSION['admin']) {
		header("location:index.php");
	}else{

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>SIPETA | Login</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="<?=base_url() ?>/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="<?=base_url() ?>/assets/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="<?=base_url() ?>/assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="login-page">
    <div class="login-box">      
      <div class="login-box-body">
        <div class="login-logo">
        	<a><b>Login</b>WebGIS</a>
      	</div><!-- /.login-logo -->
        <form role="form" method="POST">
          <div class="form-group has-feedback">
            <input type="text" name="username" class="form-control" placeholder="Username" autofocus/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" name="password" class="form-control" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">            
            <div class="col-xs-12">
              <input type="submit" name="login" Value="Login" class="btn btn-success btn-block btn-flat">
            </div><!-- /.col -->
          </div>
        </form>        


      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
    

    <!-- jQuery 2.1.3 -->
    <script src="<?=base_url() ?>/assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="<?=base_url() ?>/assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="<?=base_url() ?>/assets/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>

<?php
	if (isset($_POST['login'])) {
		$username = $_POST['username'];
		$password = md5($_POST['password']);

		$sql = $koneksi->query("select * from user where username='$username' and password='$password'");

		$data = $sql->fetch_assoc();
		$ketemu = $sql->num_rows;

		if ($ketemu >=1) {
			session_start();
			if ($data['level'] == "superadmin") {
				$_SESSION['superadmin'] = $data['id_user'];
				header("location:index.php");
			}elseif ($data['level'] == "admin") {
				$_SESSION['admin'] = $data['id_user'];
				header("location:index.php");
			}
		}else{
			?>
				<script type="text/javascript">
					alert("Login Gagal, Username atau Password yang Anda Masukkan SALAH.... Silahkan Ulangi Lagi")
				</script>
			<?php
		}
	}

	}

?>