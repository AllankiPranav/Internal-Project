<?php
    include "cnct.php";
    include "header.php";
    if(isset($_POST['sub'])){
            $val=$_POST['sel'];
            $ran=$_POST['rng'];
            $qry ="INSERT INTO `fb`(`pname`, `pfb`) VALUES ('$val','$val')";
            $res=mysqli_query($conn,$qry) or die("connecion failed");
            header('location:home.php');
        }
?>
<!DOCTYPE html>
<html>
    <body>
        <h2>GIVE THE FEEDBACK</h2>
        <h2>Products<h2>
            <form method="POST">
                <select name="sel">
                <?php
                    $qry ="SELECT `name` FROM `upload` WHERE 1;";
                    $sql = mysqli_query($conn,$qry) or die('cfailed');
                    if(mysqli_num_rows($sql)>0){
                        while($row = mysqli_fetch_assoc($sql)){
                            echo "<option value=".'"'.$row['name'].'"'.">";
                            echo $row['name'];
                        }
                    }
                ?>
                </select>
                <input type="range" name="rng" min="0" max="10"><br>
                <input type="submit" value="POST" name="sub">
            </form>
    </body>
</html>