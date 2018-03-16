<?php
    include "cnct.php";
    include "header.php";
    session_start();
    if (isset($_POST['sub'])) {
        $email = $_POST['email'];
        $pwd = $_POST['pwd'];
        $qry = "SELECT * FROM reg WHERE `email` = '$email' AND `password`='$pwd'";
        $sql = mysqli_query($conn,$qry) or die('cfailed');
        if(mysqli_num_rows($sql)>0) {
                            $row=mysqli_fetch_assoc($sql);
                            $_SESSION['user'] = $row['user'];
                            if($_SESSION['user']=="admin")  header('location:upload.php');
        }
}
?>
<!DOCTYPE html>
<html>
    <body>
        <form method="post">
            Email:<input type="email" name="email"><br>
            Password:<input type="password" name="pwd"><br>
            <input type="submit" name="sub" value="Login">
        </form>
    </body>
</html>