<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data Jurusan
            
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
                        <th>Nama Jurusan</th>
                        <th>Kantor</th>
                        <th>Keterangan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;                      
                      ?>
                      <tr>
                        <td><?$no++?></td>
                        <td></td>
                        <td>Gedung </td>
                        <td></td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->