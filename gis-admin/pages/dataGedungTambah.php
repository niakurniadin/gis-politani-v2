<div class="content-wrapper">
  <!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Tambah Data Gedung
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
          <h3 class="box-title">Form Tambah Data Gedung</h3>
        </div>
        <div class="box-body">
          <form role="form" method="POST">
            <!-- text input -->
            <div class="form-group">
              <label>Nama Gedung</label>
              <input type="text" class="form-control" name="keterangan" placeholder="Nama Gedung ...."/>
            </div>
            <div class="form-group">
              <label>Kode Gedung</label>
              <input type="text" class="form-control" name="kode_gedung" placeholder="Kode Gedung ...."/>
            </div>
            <div class="form-group">
              <label>Data Koordinat GeoJSOn</label>
              <textarea class="form-control" name="koordinat" placeholder="Koordinat GeoJSON ...."></textarea>
            </div>            
            <div>
              <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
              <input type="reset" value="Reset" class="btn btn-warning">
              <a href="?p=dataGedung" class="btn btn-danger">Batal</a>
            </div>
        </form>
        </div><!-- /.box-body -->
        
      </div><!-- /.box -->
    </div>
  </div>

</section><!-- /.content -->
</div><!-- /.content-wrapper -->

<?php
	$kode_gedung = $_POST['kode_gedung'];
	$koordinat = $_POST['koordinat'];
	$keterangan = $_POST['keterangan'];	
	$simpan = $_POST['simpan'];

	if ($simpan) {
		if ($kode_gedung == "" || $koordinat == "" || $keterangan == "") {
			?>
				<script type="text/javascript">
					alert ("Inputan Tidak Boleh Kosong");
				</script>
			<?php
		}else{
			$sql = $koneksi->query("insert into data_gedung (kode_gedung, koordinat, keterangan) value('$kode_gedung', '$koordinat','$keterangan')");

			if ($sql) {
				?>
					<script type="text/javascript">
						alert ("Data Berhasil Disimpan");
						window.location.href="?p=dataGedung";
					</script>
				<?php
			}
		}
	}
?>