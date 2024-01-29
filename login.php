<html>
    <head>
        <title> Login Form</title>
    </head>
    <body>
        <center>
        <form method="post" action=" ">
            Enter username : <br>
            <input type="text" name="username" placeholder="username"><br>
            Enter password : <br>
            <input type="password" name="password" placeholder="password"><br>
            <input type="submit" name="submit" value="Login">
            <input type="reset" name="reset">
            <br><br>
            <a href="loginreg.php">Not A Teacher? Register</a>
        </form>
        </center>
    </body>
</html>


<?php
include 'conn.php';
if($_POST)
{
  if(isset($_POST["username"]))
  {
    $username= $_POST["username"];
    $password= $_POST["password"];
    $s = "SELECT * FROM login WHERE user='$username' AND pass='$password';";
    $q = mysqli_query($conn,$s);
    if(mysqli_num_rows($q)==1)
    {
        header("Location: homeframes.php");
    }
    else{
        echo "<br>Login Failed";
    }
    
  }
  else{
      echo "No username received";
  }
}
else{
    echo "No data received";
}
?>