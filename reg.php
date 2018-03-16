<?php
    include "cnct.php";
    include "header.php";
    if(isset($_POST['sub'])){
        $em=$_POST['email'];
        $usr=$_POST['usr'];
        $pwd=$_POST['pwd'];
        $qry="INSERT INTO `reg`(`email`, `user`, `password`) VALUES ('$em','$usr','$pwd')";
        $res=mysqli_query($conn,$qry) or die("connecion failed");
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
    <body>
        <form method="post">
            Email:<input type="email" name="email"><br>
            Username:<input type="text" name="usr"><br>
            Password:<input type="password" name="pwd"><br>
            <input type="submit" name="sub" value="Submit">
        </form>
    </body>
</html>