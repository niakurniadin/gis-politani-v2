<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Gedung
            
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
                        <th>Kode Gedung</th>
                        <th>Keterangan(s)</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;                      
                        $sql = $koneksi->query("select * from data_gedung order by kode_gedung asc");            
                        while ($data=$sql->fetch_assoc()) {                         
                        
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['kode_gedung']; ?></td>
                        <td><?php echo $data['nama_gedung']; ?></td>
                        <td>
                          <a href="?p=dataGedung&aksi=detail&kode=<?php echo $data['kode_gedung']; ?>" class="btn-sm btn-info"><i class="fa fa-eye"></i> Detail</a>
                        </td>
                      </tr>
                      <?php } ?>
                    </tbody>
                    
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->