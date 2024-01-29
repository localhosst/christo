<?php
 include 'connn.php';
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <form method=POST action="">
    <center><table border=1px>
        <tr>
            <td>username </td> 
            <td> <input type="text" name="username"></td>
</tr>
<tr>
    <td>password</td>
    <td><input type="password" name="password"></td>
</tr>
<tr>
    <td colspan=2px><center><input type="submit" name="submit" value="submit"></center></td>
</tr>
</table>
<div>
			Don't have an account? <a href="register.php">Register</a>
		</div></center>
</form>
    
</body>
</html>
<?php
if(isset($_POST['submit'])){
$username=$_POST['username'];
$password=$_POST['password'];
$q="SELECT * FROM login where username='$username' and password='$password'";
$s=mysqli_query($conn,$q);
if(mysqli_num_rows($s)){
    header("location: frame.php");
    // echo "login success";
}else{
    echo "login failed";
}
}
?>
