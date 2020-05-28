<html>
<head>
<title>Edit Buku Tamu</title>
</head>
<body>
<?php
$koneksi=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("db_berita");
$a=$_POST['id'];
$b=$_POST['nama'];
$c=$_POST['email'];
$d=$_POST['pesan'];
$ubah="update buku_tamu set nama='$b', email='$c', pesan='$d' where id='$a'";
mysql_query($ubah);
echo "<script>alert('Data dengan ID $_GET[id] telah diupdate ');document.location.href='tampil.php?'</script>";

?>
</body>
</html>
