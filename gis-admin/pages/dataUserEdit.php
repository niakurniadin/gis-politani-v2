<?php
	$id = $_GET['id'];
	$sql = $koneksi->query("select * from user where id_user='$id'");
	$tampil = $sql->fetch_assoc();	
?>

<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Edit User
    <small>Control Panel</small>
  </h1>
</section>

<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-5">
      <!-- Default box -->
      <div class="box">
        
        <div class="box-header with-border">
          <h3 class="box-title">Form Edit Data Admin</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST">
            <!-- text input -->
            <div class="form-group">
              <label>Nama</label>
              <input type="text" class="form-control" name="nama" value="<?php echo $tampil['nama']; ?>" />
            </div>
            <div class="form-group">
              <label>Username</label>
              <input type="text" class="form-control" name="username" value="<?php echo $tampil['username']; ?>"/>
            </div>        
            <div class="form-group">
              <label>Tugas</label>
              <input type="text" class="form-control" name="tugas" value="<?php echo $tampil['tugas']; ?>"/>
            </div>        
            
            <div>
              <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
              <a href="?p=dataUser" class="btn btn-danger">Batal</a>
            </div>
        </form>
        </div><!-- /.box-body -->
        
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->
</div>

<?php
	$id = $tampil['id_user'];
	$nama = $_POST['nama'];
	$username = $_POST['username'];	
	$tugas = $_POST['tugas'];	
	$simpan = $_POST['simpan'];

	if ($simpan) {
		$sql = $koneksi->query("update user set username='$username', nama='$nama', tugas='$tugas' where id_user='$id'");

		if ($sql) {
			?>
				<script type="text/javascript">
					alert ("Data Berhasil Diupdate");
					window.location.href="?p=dataUser";
				</script>
			<?php
		}
	}
?>