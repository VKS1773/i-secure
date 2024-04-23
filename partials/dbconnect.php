

<?php 
$servername="localhost";
$username="root";
$password="";
$database="";

$conn=mysqli_connect($servername,$username,$password,$database);

if(!$conn)
{
    die("we are failed to connect".mysqli_connect_error());

}
else{
    echo "successfully connected";
}
?>