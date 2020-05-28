<!DOCTYPE html>
<html>
<head>
	<title>Tambah Buku Tamu</title>
</head>
<body>
	<form action="simpan.php" method="post" method="get">
		<table width="40%" align="left">
			<tr>
				<td colspan="3" align="center"><h2 style="font: Tamoha, Genava, sans-serif; color: #FF7F50;">BUKU TAMU</h2></td>
			</tr>
		<tr>
			<td width="16%">Nama</td>
			<td width="4%">:</td>
			<td width="80%"><input type="text" name="nama" id="nama"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><input type="text" name="email" id="email"></td>
		</tr>
		<tr>
			<td>Pesan</td>
			<td>:</td>
			<td><textarea name="pesan" id="pesan"></textarea></td>
		</tr>
		<tr>
			<pre>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
            <td><input type="submit" name="kirim" id="kirim" value="KIRIM"><input type="reset" id="batal" value="Batal"></td>
                 <td><a href="tampil.php">[Lihat Buku Tamu]</a></td>
             </pre>
		</tr>
</table>
</form>
</body>
</html>
