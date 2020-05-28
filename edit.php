<html>
<head>
<title>Edit Buku Tamu</title>
</head>
<body>
<?php
$koneksi=mysql_connect("localhost","root","") or die (mysql_error());
mysql_select_db("db_berita");
$tampil="SELECT * FROM buku_tamu WHERE id='".$_GET['id']."'";
$query=mysql_query($tampil)or die ("gagal".mysql_error());
$row=mysql_fetch_array($query);
$a=$row['id'];
$b=$row['nama'];
$c=$row['email'];
$d=$row['pesan'];
?>
<form id="form1" name="form1" method="post" action="update.php">
<table width="64%" border="0" align="center">
<tr>
<td colspan="2" align="center" bgcolor="#ffff99"><h2 style="font:'Courier New', Courier, monospace; color:#f36">EDIT BUKU TAMU</h2></td>
</tr>
<tr>
<td>Id Buku Tamu</td>
<td><input type="text" name="id" id="id" readonly value="<?php echo $a; ?>"/><td>
</tr>
<tr>
<td>Nama</td>
<td><input type="text" name="nama" id="nama" value="<?php echo $b; ?>"/><td>
</tr>
<tr>
<td>Email</td>
<td><input type="text" name="email" id="email" value="<?php echo $c; ?>"/><td>
</tr>
<tr>
<td>Pesan</td>
<td><textarea name="pesan" id="pesan" cols="45" rows="5%"><?php echo $d; ?></textarea><td>
</tr>
<tr>
<td>&nbsp;</td>
<td><input type="submit" name="update" id="update" value="UPDATE"/>
<input type="reset" name="cancel" id="cancel" value="CANCEL"/></td>
</tr>
</table>
</form>
</body>
</html>
