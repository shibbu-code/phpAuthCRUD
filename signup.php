
<?php
$mess = "";
if($_SERVER["REQUEST_METHOD"]=='POST')
    {
require 'conn.php';
$email = $_POST["email"];
$pass = $_POST["password"];
$q = "INSERT INTO passwords values('$email' , '$pass')";
$res = $con->query($q);
if($res)
    {
        $mess= "account created succesfully";
    }
    else
        {
           $mess=  "something went wrong";
        }
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>signUp</title>
</head>
<body>
    <h1>please SignUp</h1>
    <br><br>
    <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
        <label for="email">Email</label>
 <input type="text" placeholder="enter your email" name="email"> <br><br>
 <label for="password">password</label>
 <input  type="password" placeholder="enter password" name="password"><br><br>
 <input type="submit" >
    </form>
    <br>
    <a href="login.html">
        <button>Login</button>
    </a>
</body>
</html>
<?php
if($_SERVER["REQUEST_METHOD"]=='POST'){
    echo "<p>$mess</p>";}
?>

