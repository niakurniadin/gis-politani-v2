<?php

	$id = $_GET['id'];

	$koneksi->query("delete from user where id_user='$id'")

?>

<script type="text/javascript">
	window.location.href="?p=dataUser";
</script>