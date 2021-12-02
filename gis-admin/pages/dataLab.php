<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Laboratorium
            
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Gedung</h3>
                  <div class="box-tools pull-right">
                    <a href="?p=dataGedung&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                  </div>
                </div>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Lab</th>
                        <th>Jurusan(s)</th>
                        <th>Prodi</th>
                        <th>Kode Gedung</th>
                        <th>Nama Gedung</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $no = 1;
                        $query = "SELECT * FROM data_laboratorium
                                INNER JOIN data_gedung ON data_laboratorium.gedung COLLATE utf8mb4_unicode_ci = data_gedung.kode_gedung
                        ";
                        $sql_lab = mysqli_query($koneksi, $query) or die (mysqli_error($koneksi));                        
                        while ($dlab = mysqli_fetch_array($sql_lab)) { ?>                        
                          
                      <tr>
                        <td><?=$no++?></td>
                        <td><?=$dlab['nama_lab']?></td>
                        <td><?=$dlab['jurusan']?></td>
                        <td><?=$dlab['prodi']?></td>
                        <td><?=$dlab['kode_gedung']?></td>
                        <td><?=$dlab['nama_gedung']?></td>
                        
                      </tr>
                      <?php
                        }
                        ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->