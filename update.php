<?php
    include 'connn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>UPDATE student DETAILS</h1></center>
    <form method="POST" action="">
        <center><table border=2px>
            <tr>
                <td>rollno</td>
                <td><select name="rollno">
                    <option>Select option</option>
                    <?php
                    $q="SELECT rollno FROM studss";
                    $s = mysqli_query($conn, $q);
                    if($s){
                        if(mysqli_num_rows($s)>0){
                            while($row=mysqli_fetch_assoc($s)){
                                echo "<option>".$row['rollno']."</option>";
                            }
                        }
                    }
                    ?>
                    </select>
                </td>
            </tr>
            <tr>
            <td colspan=2><center><input type="submit" name="submit" value="submit"><center></td>
            </tr>
        </table></center>
    </form>
    <center><a href="login.php">LOGOUT</a></center>
    <br><br>
    <center><a href="links.php">PREVIOUS</a></center>
    <br><br>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $bid = $_POST['rollno'];
    $sq = "SELECT * FROM studss where rollno='$bid'";
    $q = mysqli_query($conn, $sq);
    if($q)
    {
        if(mysqli_num_rows($q))
        {
            echo "<html><body><form method='POST' action=''>";
            while($row=mysqli_fetch_assoc($q))
            {
                echo "<center>ktu ID <input type='text' name='bi' value=".$row['ktu']." ><br><br></center>";
                echo "<center>rollno<input type='text' name='bn' value=".$row['rollno']." ><br><br></center>";
                echo "<center>name <input type='text' name='a' value=".$row['name']." ><br><br></center>";
                // echo "<center>Copies <input type='text' name='copy' value=".$row['copies']."><br><br><center>";
            }
            echo "<center><input type='submit' name='submit1' value='submit'></center>";
            echo "</form></body></html>";
        }
    }
}


include 'connn.php';
$bid = $_POST['bi'];
$rollno = $_POST['bn'];
$au=$_POST['a'];

$q = "UPDATE `studss` SET `ktu` = '$bid', `name` = '$au' WHERE `studss`.`rollno` = '$rollno'; ";
$s = mysqli_query($conn, $q);
if($s){
    echo "<script>alert('DATA UPDATED SUCESSFULLY')</script>";
}
else{
    echo "<script>alert('DATA UPDATION FAILED')</script>";
}
?>