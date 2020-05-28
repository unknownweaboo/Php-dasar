<html>
<head>
<title>Simpan Buku Tamu</title>
</head>
<body>
<?php
$link = mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db ("db_berita");
$b=$_POST['nama'];
$c=$_POST['email'];
$d=$_POST['pesan'];
$perintah="insert into buku_tamu values ('','$b','$c','$d')";
$simpan=mysql_query($perintah,$link);
if($simpan)
echo"<meta http-equiv='refresh' content='0 url=tambahbukutamu.php?Data Telah Tersimpan'>";
else
echo"gagal";
?>
</body>
</html>
