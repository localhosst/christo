<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    function validate(){
        let  x = document.getElementById("ktuid").value;
        if(/^TVE\d{2}MCA-\d{4}$/.test(x))
        {
            console.log("validated");
            alert('valid KTU ID');
            return true;
        }
        else {
            alert('Invalid KTU ID');
        }   
    }
</script>
<body><center>
    <form method="POST" action="" onsubmit="return validate()">
        <table border=2px>
            <tr>
                <td>KTUID</td>
                <td><input type="text" name= "ktuid" id='ktuid'></td>
            </tr>
            <tr>
                <td>NAME</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>ROLL NO</td>
                <td><input type="text" name="rollno"></td>
            </tr>
            <!-- <tr>    
                <td>No OF COPIES</td>
                <td><select name="copy">
                    <option>1</option>
                    <option>2</option>
                    
                </td>
            </tr> -->
            <tr>
                <td colspan="2"><center><input type="submit" name="submit" value="submit"><center></td>
            </tr>
        </table>
    </center>
    <center><a href="loggin.php">LOGOUT</a></center>
    <br><br>
    <center><a href="links.php">PREVIOUS</a></center>

</body>
</html>
<?php 
include 'connn.php';
if(isset($_POST['submit'])) 
{
$bid = $_POST['ktuid'];
$bname = $_POST['name'];
$au = $_POST['rollno'];

$sql="insert into studss values('$bid','$au','$bname')";
$q=mysqli_query($conn,$sql);
if($q){
    echo"<script>alert('inserted')</script>";
}else{
    echo"not inserted";
}
}
?>



