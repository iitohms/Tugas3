<?php
include("koneksi1.php"); //fungsi untuk gabunngg file
if (isset($_POST['simpan'])){ //post  isinya pakai harga barang dan simpan bawah submit & isset=simpan masuk ke table
	$query_tambah_data="insert into t_pembayaran(merek,qty,harga) values
	('".$_POST['merek']."','".$_POST['qty']."',
	'".$_POST['harga']."')";
	$proses_data=mysql_query($query_tambah_data);
if($proses_data){
	echo'tambah data berhasil';
}else{
	echo mysql_error();
}

}

?>


	<Form Method="POST" action=""><!---Form untuk kirim data ke DB-->
	<table border="1">
		<tr>
			<td>Nama Barang</td>
			<td><input name="merek" type="text"></td>
		</tr>
		<tr>
			<td>Qty</td>
			<td><input name="qty" type="number"></td>
		</tr>
		<tr>
			<td>Harga</td>
			<td><input name="harga" type="number"></td>
		</tr>
		<tr>
			<td><input name="simpan" type="submit"></td>
		</tr>
	</table>
	</form>