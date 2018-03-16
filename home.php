<!DOCTYPE html>
<html>
    <body>
        <h1>FEEDIN</h1>
        <h2>The PRODUCT FEEDBACK PORTAL</h2>
        <?php 
        include "header.php";
        ?>
        <h2>Products<h2>
                <?php
                include "cnct.php";
                $qry ="SELECT * FROM `upload` WHERE 1;";
                $sql = mysqli_query($conn,$qry) or die('cfailed');
                if(mysqli_num_rows($sql)>0){
                    while($row = mysqli_fetch_assoc($sql)){
                        $img="uploads/".$row['file'];
                        echo "<img src=".'"'.$img.'"'."/>"."<br>";
                        echo "NAME:".$row['name']."<br>";
                        echo "DESCRIPTION:".$row['des']."<br>";
                    }
                }
                ?>
    </body>
</html>