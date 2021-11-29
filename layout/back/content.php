            <?php
              error_reporting (E_ALL ^ E_NOTICE);

		          $page = $_GET['p'];
		          $aksi = $_GET['aksi'];

		          if ($page == "dataGedung") {
		            if ($aksi == "") {
		              include "pages/dataGedung.php";
		            }elseif ($aksi == "detail") {
		              include "pages/dataGedungDetail.php";
		            }elseif ($aksi == "tambah") {
		              include "pages/dataGedungTambah.php";
		            }elseif ($aksi == "edit") {
		              include "pages/dataGedungEdit.php";
		            }elseif ($aksi == "hapus") {
		              include "pages/dataGedungHapus.php";
		            }
		          }elseif ($page == "dataJurusan") {
		            if ($aksi == "") {
		              include "pages/dataJurusan.php";
		            }elseif ($aksi == "detail") {
		              include "pages/dataJurusanDetail.php";
		            }elseif ($aksi == "tambah") {
		              include "pages/dataJurusanTambah.php";
		            }elseif ($aksi == "edit") {
		              include "pages/dataJurusanEdit.php";
		            }elseif ($aksi == "hapus") {
		              include "pages/dataJurusanHapus.php";
		            }
		          }elseif ($page == "dataProdi") {
		            if ($aksi == "") {
		              include "pages/dataProdi.php";
		            }elseif ($aksi == "detail") {
		              include "pages/dataProdiDetail.php";
		            }elseif ($aksi == "tambah") {
		              include "pages/dataProdiTambah.php";
		            }elseif ($aksi == "edit") {
		              include "pages/dataProdiEdit.php";
		            }elseif ($aksi == "hapus") {
		              include "pages/dataProdiHapus.php";
		            }
		          }elseif ($page == "dataLab") {
		            if ($aksi == "") {
		              include "pages/dataLab.php";
		            }elseif ($aksi == "detail") {
		              include "pages/dataLabDetail.php";
		            }elseif ($aksi == "tambah") {
		              include "pages/dataLabTambah.php";
		            }elseif ($aksi == "edit") {
		              include "pages/dataLabEdit.php";
		            }elseif ($aksi == "hapus") {
		              include "pages/dataLabHapus.php";
		            }
		          }elseif ($page == "dataUser") {
		            if ($aksi == "") {
		              include "pages/dataUser.php";
		            }elseif ($aksi == "tambah") {
		              include "pages/dataUserTambah.php";
		            }elseif ($aksi == "edit") {
		              include "pages/dataUserEdit.php";
		            }elseif ($aksi == "resetpwd") {
		              include "pages/dataUserResetPwd.php";
		            }elseif ($aksi == "hapus") {
		              include "pages/dataUserHapus.php";
		            }
		          }elseif ($page == "") {
		          	include "pages/dashboard.php";
		          }

		        ?>