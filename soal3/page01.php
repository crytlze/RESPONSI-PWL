<html>
<head><title>Menghitung gaji</title></head>

<body>
<form methode="GET">
<table>
<tr>
<td>Nama</td>
<td> : </td>
<td><input type=text name=nama size=27></td>
</tr>
<tr>
<td>Golongan</td>
<td> : </td>
<td> <select name="golongan">
    <option value="1" selected="selected"> - </option>
    <option value="2"> A </option>
    <option value="3"> B </option>
    <option value="4"> C </option>
    <option value="5"> D </option> 
    </td>
</tr>
<td>Jenis Kelamin</td>
<td> : </td>
<td>
    <select name=kelamin>
    <option value="1" selected="selected"> - </option>
        <option value="l"> Laki-Laki </option>
        <option value="p"> Perempuan </option></select></td>
</tr>
<td>Status Perkawinan</td>
<td> : </td>
<td>
    <select name=status>
    <option value="1" selected="selected"> - </option>
        <option value="s"> Sudah Menikah </option>
        <option value="b"> Belum Menikah </option></select></td>
</tr>
<tr>
    <td colspan="3"><input type=Submit name="submit" value=Hitung><input type=reset name="reset" value=Hapus></td>
</tr>

</table>
</form>
</body>
</html>

<?php
$nama=isset($_GET['nama'])?$_GET['nama']:'';
$gol=isset($_GET['golongan'])?$_GET['golongan']:'';
$kelamin=isset($_GET['kelamin'])?$_GET['kelamin']:'';
$status=isset($_GET['status'])?$_GET['status']:'';

if(!empty($nama) and !empty($gol) and !empty($kelamin) and !empty($status))
{
    ?>
<table border="1">
<tr>
    <td> Nama </td>
    <td> : </td>
    <td>
        <?php 
        if (!empty($nama))
            {
                echo $nama ;
            }
        else 
            {    
            echo"<script>alert('Masukkan Nama')</script>";
            }
        ?> </td>
</tr>
<tr>
    <td> Gaji Pokok </td>
    <td> : </td>
    <td> <?php 
        if ($gol=="2")
        {
            echo "1.000.000";
        }
        elseif ($gol=="3")
        {
            echo "2.000.000";
        }        
        elseif ($gol=="4")
        {
            echo "3.000.000";
        }
        elseif ($gol=="5")
        {
            echo "4.000.000";
        } ?></td>
</tr>
<tr>
    <td> 
        <?php echo "Tunjangan"; ?></td>
    <td> : </td>
    <td> <?php 
        if ($kelamin=="l" && $status=="s")
        {
            echo "500.000";
        }
        elseif ($kelamin=="l" && $status=="b")
        {
            echo "Tidak ada";
        }        
        elseif ($kelamin=="p"&& $status=="s")
        {
            echo "250.000";
        }
        elseif ($kelamin=="l" && $status=="b")
        {
            echo "Tidak ada";
        } ?></td>
</tr>
<tr>
<td> Jumlah Gaji </td>
 <td> : </td>
    <td> <?php 
        if ($gol==2 && $kelamin=="l" && $status=="s")
        {
            echo "1.500.000";
        }
        elseif ($gol==2 && $kelamin=="l" && $status=="b")
        {
            echo "1.000.000";
        }        
        elseif ($gol==2 && $kelamin=="p"&& $status=="s")
        {
            echo "1.250.000";
        }
        elseif ($gol==2 && $kelamin=="l" && $status=="b")
        {
            echo "1.000.000";
        }
        if ($gol==3 && $kelamin=="l" && $status=="s")
        {
            echo "2.500.000";
        }
        elseif ($gol==3 && $kelamin=="l" && $status=="b")
        {
            echo "2.000.000";
        }        
        elseif ($gol==3 && $kelamin=="p"&& $status=="s")
        {
            echo "2.250.000";
        }
        elseif ($gol==3 && $kelamin=="l" && $status=="b")
        {
            echo "2.000.000";
        }
        if ($gol==4 && $kelamin=="l" && $status=="s")
        {
            echo "3.500.000";
        }
        elseif ($gol==4 && $kelamin=="l" && $status=="b")
        {
            echo "3.000.000";
        }        
        elseif ($gol==4 && $kelamin=="p"&& $status=="s")
        {
            echo "3.250.000";
        }
        elseif ($gol==4 && $kelamin=="l" && $status=="b")
        {
            echo "3.000.000";
        }
        if ($gol==5 && $kelamin=="l" && $status=="s")
        {
            echo "4.500.000";
        }
        elseif ($gol==5 && $kelamin=="l" && $status=="b")
        {
            echo "4.000.000";
        }        
        elseif ($gol==5 && $kelamin=="p"&& $status=="s")
        {
            echo "4.250.000";
        }
        elseif ($gol==5 && $kelamin=="l" && $status=="b")
        {
            echo "4.000.000";
        } ?></td>
</tr>
</table>
