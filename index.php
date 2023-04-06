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
 $sql="INSERT INTO news (Id	,Tittle	,Summary,Rating,Category)  VALUES(null,'programmer','hghg',2, 'hgh')";
 $result=$conn->query($sql);
 if($result===TRUE){
    echo "sucessfully added a record";
 }
 else{
    echo "No not added ";
 }
 $conn->close();
?>