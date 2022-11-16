    <?php
    session_start();
    if (isset($_POST['ulogin']) && isset($_POST['uhaslo']))
    {
        $ulogin=$_POST['ulogin'];
        $uhaslo=$_POST['uhaslo'];
        $conn=mysqli_connect('localhost','root','','baza1');
        $z1=mysqli_query($conn, 'select * from uzytkownik');
        while ($z2=mysqli_fetch_array($z1))
        {
            if ($ulogin==$z2['ulogin'] && $uhaslo==$z2['uhaslo'])
            {
                $_SESSION['zalogowany']=$z2['ulogin'];
                header('location:index.php');
            }
            else
            {
                $_SESSION['zalogowany']=0;
                header('location:signup.php');
            }
        }
    }
    ?>
