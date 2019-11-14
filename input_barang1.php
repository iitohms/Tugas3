<?php
include("koneksi1.php"); //fungsi untuk gabunngg file
if (isset($_POST['simpan'])){ //post  isinya pakai harga barang dan simpan bawah submit & isset=simpan masuk ke table
	$query_tambah_data="insert into barang(merek,harga) values
	('".$_POST['merek']."',
	'".$_POST['harga']."')";
	$proses_data=mysql_query($query_tambah_data);
if($proses_data){
	echo'tambah data berhasil';
}else{
	echo mysql_error();
}

}
?>


<form method="post"><!---form untuk kirim data ke database--->
<table>
	<tr>
		<td> Nama Barang </td>
		<td><input name="merk" type="text"></td>
	</tr>
	<tr>
		<td> Harga </td>
		<td><input name="harga" type="number"></td>
	</tr>
	<tr>
		<td><input name="simpan" type="submit"></td>
	</tr>
</table>
</form>