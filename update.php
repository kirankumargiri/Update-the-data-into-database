<?php
$username="root";
$servername="localhost";
$password="";
$database="ob";
$conn=new mysqli($servername, $username, $password,$database );
if($conn->connect_error){
    die("connection failed");
}
echo "connection sucess";
 $sql="UPDATE news SET Summary='kiran' WHERE Id=5";
 $result=$conn->query($sql);
 if($result===TRUE){
    echo "sucessfully added a record";
 }
 else{
    echo "No not added ";
 }
 $conn->close();
?>