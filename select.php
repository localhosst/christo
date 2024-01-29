<?php
include 'connn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        th, td {
      padding: 10px;
      border: 1px solid #ddd; /* Optional: Add border for better visibility */
      text-align: left;
    }
    </style>
</head>
<body>
    <center><h1>student details</h1></center>
    <form method="POST" action="">
        <center><input type="submit" name="submit" value="SHOW AVAILIABEL STUDENT DETAILS"></center>
    </form>
    <center><a href="loggin.php">LOGOUT</a></center>
    <br><br>
    <center><a href="links.php">PREVIOUS</a></center>
</body>
</html>
<?php
if(isset($_POST['submit'])){
    $sq = "SELECT * FROM studss";
    $s = mysqli_query($conn, $sq);
    if($s){
        echo "<br><br>";
        if(mysqli_num_rows($s)){
            echo "<html><body><form><center><table border=2px>";
            echo "<tr><td>KTUID</td><td>rollno</td><td>name</td></tr>";
            while($row=mysqli_fetch_assoc($s)){
                echo "<tr>";
                echo "<td>".$row['ktu']."</td>";
                echo "<td>".$row['rollno']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "</tr>";
            }
            echo "</table></center></form></body></html>";
        }
    }
}
?>