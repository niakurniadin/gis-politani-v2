<?php

	$id = $_GET['id'];

	$koneksi->query("update user set password=md5('politani123') where id_user='$id'")

?>

<script type="text/javascript">
	window.location.href="?p=dataUser";
</script>