<html>
<head>
<title>Hapus Buku Tamu</title>
</head>
<body>
<?php


$koneksi=mysql_connect("localhost","root","");
mysql_select_db("db_berita", $koneksi);
mysql_query("delete from buku_tamu where id='$_GET[id]'",$koneksi);
echo "<script>alert('Data dengan ID $_GET[id] telah dihapus ');document.location.href='tampil.php?'</script>";

?>
</body>
</html>
