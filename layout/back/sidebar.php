      <!-- Left side column. contains the sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?=base_url() ?>/<?php echo $data_user['foto']; ?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $data_user['nama']; ?></p>

              <a href=""><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
            <li>
              <a href="<?=base_url() ?>/gis-admin">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>              
            </li>            
            <li class="treeview">
              <a href="">
                <i class="fa fa-files-o"></i> <span>Data Aset</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="?p=dataGedung"><i class="fa fa-edit"></i> Data Gedung</a></li>
                <li><a href="?p=dataJurusan"><i class="fa fa-edit"></i> Data Jurusan</a></li>
                <li><a href="?p=dataProdi"><i class="fa fa-edit"></i> Data Program Studi</a></li>
                <li><a href="?p=dataLab"><i class="fa fa-edit"></i> Data Laboratorium</a></li>
              </ul>
            </li>
            <li class="header">USERS</li>
            <li>
              <a href="?p=dataUser">
                <i class="fa fa-users"></i> <span> Data User</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>