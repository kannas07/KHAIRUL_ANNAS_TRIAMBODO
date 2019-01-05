<html>
<head>
<title>Soal 4</title>
</head>
<body>
<form method="POST">
<label>Banyak orang : </label>
<input type="text" name="orang"/></br>
<input type="submit" name="submit"/>
</form>
</body>
</html>

<?php 
if($_SERVER['REQUEST_METHOD'] == "POST"){
$n_orang = $_POST['orang'];
$jml = $n_orang * ($n_orang - 1)/2;
echo "Banyak orang adalah : " . $n_orang . "</br> Banyak terjadinya jabat tangan adalah : " . $jml . "";
}
?>