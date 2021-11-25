<?php

session_start();

$koneksi = new mysqli("localhost", "root", "", "gis-politani");
if (mysqli_connect_errno()) {
  echo mysqli_connect_errno();
}

//fungsi base_url
function base_url($url = null){
  $base_url = "http://gis-politani-v2.test";
  if ($url != null) {
    return $base_url."/".$url;
  }else{
    return $base_url;
  }
}
?>