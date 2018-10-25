<html>
<head>
 <title>PESANAN</title>
</head>
<body>
 <form action="page02.php" method="post">
 <div align= "center"><h2>FORM PEMESANAN TIKET KERETA API</h2>
 <table border=2>
  <tr align=left>
   <td>No. Pemesanan</td>
   <td>:</td>
   <td><input type="text" name="no" /></td>
  </tr>


  <tr align=left>
   <td>Nama Pemesan</td>
   <td>:</td>
   <td><input type="text" name="nama" /></td>
  </tr>
  <tr align=left>
   <td>Nama Kereta</td>
   <td>:</td>
   <td><input type="radio" name="nk" value="argobromo" />
   Argobromo<br />
    <input type="radio" name="nk" value="taksaka" />
    Taksaka<br />
    <input type="radio" name="nk" value="kamandanu" />
    Kamandanu<br />
    </td>
  </tr>
  <tr align=left>
   <td>Jumlah Beli</td>
   <td>:</td>
   <td><input type="text" name="jumbel" /></td>
  </tr>
  <tr align=center>
   <td colspan=3><input type="submit" value="proses" />
   <input type="reset" value="batal" /></td>
  </tr>
  </table>
  </div>
  </form>
  </body>
  </html>

