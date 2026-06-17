<?php
require_once 'conn.php';

$email = $_POST["email"];
$pass = $_POST["password"];
$q = "SELECT email FROM passwords
      WHERE email = '$email' AND password = '$pass'";

$res = $con->query($q);
if($res->num_rows>0)
   {
    while($row = $res->fetch_assoc())
        {
            echo "hello". " " . $row["email"];
        }
   }
   else{
    echo "results not found";
   }
?>