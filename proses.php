<html>
<head>
<title>Pelanggan</title>
<link rel="stylesheet" type="text/css" href="css.css">	

</head>
<body>
<div id="wrapper">
	<div id="header-wrapper">
		<div id="header">
			<div id="logo">
			<div align="right"><script src="javascript.js"></script>
            <?php echo date(" H:i:s "); ?></div>
				<h2><center>Final Project Pemrograman Web</center></h2>
				<p>Design by Arya Nugraha</p>
			</div>
		</div>
	</div>
<?php 
$nama_barang = $_POST['nama_barang'];
$harga = $_POST['harga'];
$jumlah = $_POST['jumlah'];
$status = $_POST['status'];
$kota = $_POST['kota'];

//menghitung subtotal
$subtotal = $harga * $jumlah ;

//menghitung diskon berdasarkan status (pelanggan atau bukan pelanggan).
//Keterangan :
//jika statusnya pelanggan akan mendapat diskon 10%.
//jika statusnya bukan pelanggan maka tidak mendapat diskon. Jadi:

switch ($status){
 case "Pelanggan": 
  $diskon = $subtotal * 0.1;
 break; 
 default: 
  $diskon = 0; 
 }

//menghitung ongkos kirim berdasarkan kota tujuan
if($kota == "Jakarta" ){
 $ongkos = 20000;
 }
else if($kota == "Bandung" ){
 $ongkos = 10000;
 }
else if($kota == "Surabaya" ){
 $ongkos = 30000;
 }
//menghitung total keseluruhan
$total = $subtotal - $diskon + $ongkos;

// membuat file.txt
// menyimpan data ke file.txt tersebut 
$berkas = fopen("pelanggan.txt","a");
fputs($berkas,"Nama Barang  : " . $nama_barang ."\n");
fputs($berkas,"Harga        : Rp " . $harga ."\n");
fputs($berkas,"Quantity     : " . $jumlah ."\n");
fputs($berkas,"Status       : " . $status ."\n");
fputs($berkas,"Subtotal     : Rp " . $subtotal ."\n");
fputs($berkas,"Diskon       : Rp " . $diskon ."\n");
fputs($berkas,"Ongkos Kirim : Rp " . $ongkos . "(". $kota .")"."\n");
fputs($berkas,"Total        : Rp " . $total ."\n");
fputs($berkas, "******************************\n");
fclose($berkas);
?>

<div align="center">
<table width="297" border="1">
<tr>
<td colspan="2" bgcolor="#000099">
<div align="center" class="putih">
<strong>HASIL KESELURUHAN</strong>
</div>
</td>
</tr>
<tr>
<td width="116" bgcolor="#000099">Nama Barang</td>
<td width="165" bgcolor="#000099">&nbsp;
<?php echo "$nama_barang"; ?></td>
</tr>
<tr>
<td bgcolor="#000099">Harga</td>
<td bgcolor="#000099">&nbsp;
<?php echo "Rp. ".number_format($harga); ?></td>
</tr>
<tr>
<td bgcolor="#000099">Quantity</td>
<td bgcolor="#000099">&nbsp;
<?php echo "$jumlah"; ?></td>
</tr>
<tr>
<td bgcolor="#000099">Subtotal</td>
<td bgcolor="#000099">&nbsp;
<?php echo "Rp. ".number_format($subtotal); ?></td>
</tr>
<tr>
<td bgcolor="#000099">Status</td>
<td bgcolor="#000099">&nbsp;
<?php echo "$status"; ?></td>
</tr>
<tr>
<td bgcolor="#000099">Diskon</td>
<td bgcolor="#000099">&nbsp;
<?php echo "Rp. ".number_format($diskon); ?></td>
</tr>
<tr>
<td bgcolor="#000099">Ongkos Kirim</td>
<td bgcolor="#000099">&nbsp;
<?php echo "Rp. ".number_format($ongkos)?> 
<?php echo " ( $kota )";?></td>
</tr>
<tr>
<td bgcolor="#000099" class="putih">
<strong>Total</strong></td>
<td bgcolor="#000099">&nbsp;
<?php echo "Rp. ".number_format($total); ?></td>
</tr>
</table>

<p><a href="pelanggan.html"> &laquo; Kembali</a><a href="data.php">&nbsp;&nbsp;&nbsp;&nbsp; Lihat &raquo</a>

</p>
</div>
</div>
</body>
</html>