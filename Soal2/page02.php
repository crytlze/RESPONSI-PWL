<html>
<head>

<title>FORM SWITCH CASE</title>
</head>

<body>
<?PHP
$no = $_POST["no"];
$nm = $_POST["nama"];
$nk = $_POST["nk"];
$jb = $_POST["jumbel"];

switch ($nk) {
case "argobromo" :
 {$hg = 125000;
 $jur = "jakarta - solo";}
 break;
case "taksaka" :
 {$hg = 100000;
 $jur = "jakarta - jogja";}
 break;
case "kamandanu" :
 {$hg = 75000;
 $jur = "jakarta - surabaya";}
 break;
 }

echo "<div align= 'center'><h2>FORM PEMESANAN TIKET KERETA API</h2>";
echo "<table border=0>
	<tr align = left>
	
	<br>
	 <td>No. Pemesan</td>
 	<td> : </td>
 	<td>$no</td>
	</tr>
	<tr align = left>
 	<td>Nama Pemesan</td>
 	<td> : </td>
 	<td>$nm</td>
	</tr>
	<tr align = left>
 	<td>Nama Kereta</td>
 	<td> : </td>
 	<td>$nk</td>
	</tr>
	<tr align = left>
 	<td>Jurusan</td>
 	<td> : </td>
 	<td>$jur</td>
	</tr>
	<tr align = left>
 	<td>Harga Tiket</td>
 	<td> : </td>
 	<td>$hg</td>
	</tr>
	<tr align = left>
 	<td>Jumlah Beli</td>
 	<td> : </td>
 	<td>$jb</td>";
	$to = $hg * $jb;
echo "<tr align = left>
 	<td>Total Bayar</td>
 	<td> : </td>
 	<td>$to</td></tr></table>";
echo "<hr>";
echo "<h1>Terima Kasih</h1></div>";
?>
</body>
</html>