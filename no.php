<?php
session_start();
$conn=mysqli_connect('localhost','root','','baza1');
$zap=mysqli_query($conn,"SELECT id from uzytkownik where ulogin = '".$_SESSION['zalogowany']."';");
$result = mysqli_fetch_array($zap);
$zapn="INSERT INTO yn (id, yn) values ('".$result['id']."', 'n');";
mysqli_query($conn,$zapn);
$ilen=mysqli_query(mysqli_connect('localhost','root','','baza1'), "SELECT COUNT(yn) from yn where yn = 'n';");
$kton=mysqli_query(mysqli_connect('localhost','root','','baza1'), "SELECT u.ulogin from uzytkownik u join yn on u.id=yn.id where yn.yn = 'n' order by yn.ynid desc limit 3;");
$resultilen= mysqli_fetch_array($ilen); 
$_SESSION['ilenanie']=$resultilen['0'];
$kto2 =  array();
for ($j=0; $j<3; $j++)
{
    $resultkton= mysqli_fetch_array($kton);
    $kto2[$j]=$resultkton['ulogin'];
}
$_SESSION['osobyn']=$kto2;
header('location:index.php');
?>
