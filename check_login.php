<html>

test
<body>

<?php include("header.php"); ?>

<br></br>

<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "geek_text");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$id = mysqli_real_escape_string($link, $_REQUEST['id']);
$pass = mysqli_real_escape_string($link, $_REQUEST['pw']);

//encrypt password to compare to db
$pass = crypt($pass, 'geek');

//echo "ID: $id  password: $pass\n";

 
// attempt insert query execution
$sql = "SELECT * FROM user WHERE id='$id' and password='$pass'";
$result=mysqli_query($link, $sql);

// Mysql_num_row is counting table row
$count=mysqli_num_rows($result);
var_dump($count);
// If result matched $username and $password, table row must be 1 row
if($count > 0)
{   
   // Register $username, $password and redirect to file "index.php"
   session_start();
   $_SESSION['username'] = $id;
   $_SESSION['password'] = $pass;
   echo "ID: " .$id ." password: " .$pass;
   header("location:home.php");
}
else 
{
   echo "Wrong username or password";
   header("location:sign_in.php");
}
 
// close connection
mysqli_close($link);
?>

</body>
</html>