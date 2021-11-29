<div class="content-wrapper">
  <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Admin
    <small>Control Panel</small>
  </h1>
  
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-5">
  <!-- Default box -->
      <div class="box ">
        <div class="box-header with-border">
          <h3 class="box-title">Form Tambah Data Admin</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST">
            <!-- text input -->
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" placeholder="Nama ...."/>
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" placeholder="Username ...."/>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="text" class="form-control" name="password" placeholder="Password ...."/>
            </div>
            <div class="form-group">
              <label>Tugas</label>
              <input type="text" class="form-control" name="tugas" placeholder="Tugas ...."/>
            </div>            
            <div>
              <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
              <input type="reset" value="Reset" class="btn btn-warning">
              <a href="?p=dataUser" class="btn btn-danger">Batal</a>
            </div>
        </form>
        </div><!-- /.box-body -->
        
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php
	$nama = $_POST['nama'];
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$tugas = $_POST['tugas'];	
	$simpan = $_POST['simpan'];

	if ($simpan) {
		if ($nama == "" || $username == "" || $password == "" || $tugas =="") {
			?>
				<script type="text/javascript">
					alert ("Inputan Tidak Boleh Kosong");
				</script>
			<?php
		}else{
			$sql = $koneksi->query("insert into user (username, password, nama, level, tugas, foto) value('$username', '$password','$nama', 'admin', '$tugas', 'assets/dist/img/users.jpg')");

			if ($sql) {
				?>
					<script type="text/javascript">
						alert ("Data Berhasil Disimpan");
						window.location.href="?p=dataUser";
					</script>
				<?php
			}
		}
	}
?>