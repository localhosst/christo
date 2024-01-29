<?php
    include 'conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center><h1>UPDATE BOOK DETAILS</h1></center>
    <form method="POST" action="">
        <center><table border=2px>
            <tr>
                <td>Book ID</td>
                <td><select name="bid">
                    <option>Select option</option>
                    <?php
                    $q="SELECT bookid FROM book";
                    $s = mysqli_query($conn, $q);
                    if($s){
                        if(mysqli_num_rows($s)>0){
                            while($row=mysqli_fetch_assoc($s)){
                                echo "<option>".$row[bookid]."</option>";
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
    $bid = $_POST['bid'];
    $sq = "SELECT * FROM book where bookid='$bid'";
    $q = mysqli_query($conn, $sq);
    if($q)
    {
        if(mysqli_num_rows($q))
        {
            echo "<html><body><form method='POST' action='book_up.php'>";
            while($row=mysqli_fetch_assoc($q))
            {
                echo "<center>Book ID <input type='text' name='bid' value=".$row['bookid']." readonly><br><br></center>";
                echo "<center>Book <input type='text' name='bname' value=".$row['bookname']." readonly><br><br></center>";
                echo "<center>Author <input type='text' name='auth' value=".$row['author']." readonly><br><br></center>";
                echo "<center>Copies <input type='text' name='copy' value=".$row['copies']."><br><br><center>";
            }
            echo "<center><input type='submit' name='submit' value='submit'></center>";
            echo "</form></body></html>";
        }
    }
    <?php
include 'conn.php';
$bid = $_POST['bid'];
$copy = $_POST['copy'];

$q = "UPDATE book set copies='$copy' where bookid='$bid'";
$s = mysqli_query($conn, $q);
if($s){
    echo "<script>alert('DATA UPDATED SUCESSFULLY')</script>";
}
else{
    echo "<script>alert('DATA UPDATION FAILED')</script>";
}
?>
}
?>