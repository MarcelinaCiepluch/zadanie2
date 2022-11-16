<?php
session_start();
$conn=mysqli_connect('localhost','root','','baza1');
$zap=mysqli_query($conn,"SELECT id from uzytkownik where ulogin = '".$_SESSION['zalogowany']."';");
$result = mysqli_fetch_array($zap);
$zapy="INSERT INTO yn (id, yn) values ('".$result['id']."', 'y');";
mysqli_query($conn,$zapy);
$iley=mysqli_query(mysqli_connect('localhost','root','','baza1'), "SELECT COUNT(yn) from yn where yn = 'y';");
$ktoy=mysqli_query(mysqli_connect('localhost','root','','baza1'), "SELECT u.ulogin from uzytkownik u join yn on u.id=yn.id where yn.yn = 'y' order by yn.ynid desc limit 3;");
$resultiley= mysqli_fetch_array($iley); 
$_SESSION['ilenatak']=$resultiley['0'];
$kto =  array();
for ($i=0; $i<3; $i++)
{
    $resultktoy= mysqli_fetch_array($ktoy);
    $kto[$i]=$resultktoy['ulogin'];
}
$_SESSION['osoby']=$kto;
header('location:index.php');
?>
