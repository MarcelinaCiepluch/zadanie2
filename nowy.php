<?php
session_start();
$uhaslo=$_POST['uhaslo'];
$ulogin=$_POST['ulogin'];
$uhaslop=$_POST['uhaslop'];
if ($uhaslo == $uhaslop)
{
$conn=mysqli_connect('localhost','root','','baza1');
if (!$conn)
    {
        exit("Błąd połączenia z serwerem");
    }
    else
    {
        $zapytanie="INSERT INTO uzytkownik (ulogin, uhaslo) VALUES ('".$ulogin."', '".$uhaslo."');";
        mysqli_query($conn,$zapytanie);
        header('location:Login.php');
    }
}
else
{
    echo "Podane hasła różnią się od siebie.";
}
?>