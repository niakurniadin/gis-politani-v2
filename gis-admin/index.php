<?php
session_start();
error_reporting (E_ALL ^ E_NOTICE);
require_once('../config/config.php');

if (@$_SESSION['superadmin']) {
  $user_terlogin = @$_SESSION['superadmin'];
}elseif (@$_SESSION['admin']) {
  $user_terlogin = @$_SESSION['admin'];
}

$sql_user = $koneksi->query("select * from user where id_user = '$user_terlogin'") or die(mysql_error());
$data_user = $sql_user->fetch_assoc();

if ($_SESSION['superadmin'] || $_SESSION['admin']) {

require_once('../layout/back/wrapper.php');

}else{
  header("location:login.php");
}