<form action="" method="POST">
<label>Total Belanja : </label>
<input type="text" name="total" placeholder="Masukan Nominal Uang"><br/>
<label>Bayar : </label>
<input type="text" name="bayar" placeholder="Masukan Nominal Uang"><br/>  
<br>
<input type="submit" name="hitung" value="HITUNG PECAHAN UANG">
</form>
<?php
error_reporting(0);
if(isset($_POST["hitung"])){
$Bayar=$_POST["kembali"];
$TotalBelanja=$_POST["total"];
$Uang = $TotalBelanja - $Bayar;

$Pecahan2=$Uang/50000;
$Sisa2=$Uang%50000;

$Pecahan3=$Sisa2/20000;
$Sisa3=$Sisa2%20000;

$Pecahan4=$Sisa3/10000;
$Sisa4=$Sisa3%10000;

$Pecahan5=$Sisa4/5000;
$Sisa5=$Sisa4%5000;

$Pecahan6=$Sisa5/2000;
$Sisa6=$Sisa5%2000;

$Pecahan7=$Sisa6/1000;
$Sisa7=$Sisa6%1000;

$Pecahan8=$Sisa7/500;
$Sisa8=$Sisa7%500;

$Pecahan9=$Sisa8/200;
$Sisa9=$Sisa8%200;

$Pecahan10=$Sisa9/100;
$Sisa10=$Sisa9%100;

$Pecahan11=$Sisa10/50;
$Sisa11=$Sisa10%50;


$Pecahan12=$Sisa11/25;
$Sisa12=$Sisa11%25;

$Pecahan13=$Sisa12/1;
$Sisa13=$Sisa12%1;

echo 'Jumlah Kembali :Rp.'.number_format($Uang),'<br/>';
echo '<br/>';
echo 'Rincian Nominal Kembalian :';
echo '<br/>';
echo 'Pecahan Rp.50000 = '.(int) $Pecahan2.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.20000 = '.(int) $Pecahan3.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.10000 = '.(int) $Pecahan4.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.5000 = '.(int) $Pecahan5.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.2000 = '.(int) $Pecahan6.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.1000 = '.(int) $Pecahan7.' Lembar';
echo '<br/>';
echo 'Pecahan Rp.500 = '.(int) $Pecahan8.' Koin';
}
?>