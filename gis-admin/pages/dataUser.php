<div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Data User
            
          </h1>
          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data User</h3>
                  <div class="box-tools pull-right">
                    <a href="?p=dataUser&aksi=tambah" class="btn btn-success"><i class="fa fa-plus"></i> Tambah Data</a>
                  </div>
                </div>
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Username(s)</th>
                        <th>Level</th>
                        <th>Tugas</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $no = 1;
                        
                        if ($_SESSION['superadmin']) {
                          $sql = $koneksi->query("select * from user where level = 'superadmin' || level = 'admin'");
                        }elseif ($_SESSION['admin']) {
                          $user_terlogin = @$_SESSION['admin'];
                          $sql_user = $koneksi->query("select * from user where id_user = '$user_terlogin'") or die(mysql_error());
                          $data_user = $sql_user->fetch_assoc();
                          $sql = $koneksi->query("select * from user where level='admin'");
                        }
                        
                        while ($data=$sql->fetch_assoc()) {
                          
                        
                      ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['username']; ?></td>
                        <td><?php echo $data['level']; ?></td>
                        <td><?php echo $data['tugas']; ?></td>
                        <td>
                          <?php
                            if ($data_user['id_user']!==$data['id_user']) {
                              ?>
                              <a href="?p=dataUser&aksi=edit&id=<?php echo $data['id_user']; ?>" class="btn-sm btn-info"><i class="fa fa-edit"></i> Edit</a>
                              <a onclick="return confirm('Anda Yakin Akan Melakukan Reset Password User Ini menjadi politani123 ??? ')" href="?p=dataUser&aksi=resetpwd&id=<?php echo $data['id_user']; ?>" class="btn-sm btn-warning"><i class="fa fa-key"></i> Reset Password</a>
                              <a onclick="return confirm('Anda Yakin Akan Menghapus User Ini ...??? ')" href="?p=dataUser&aksi=hapus&id=<?php echo $data['id_user']; ?>" class="btn-sm btn-danger"><i class="fa fa-trash"></i> Hapus</a>
                              <?php
                            }
                            
                          ?>              
                          
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