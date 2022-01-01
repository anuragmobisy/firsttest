<?php
$con=new mysqli('localhost','root','root','testdb');
if($con->connect_error)
{
    echo "Connection error:".$con->connect_error;
}
else
{
    echo "Connection Successful";
}

// $sql="create table tableone 
// (
//   id int(8) PRIMARY KEY AUTO_INCREMENT,
//   name varchar(20)
// );
// ";
$sql="insert into tableone(name) values('a')";

if($con->query($sql) === TRUE)
{
    $last_id = $con->insert_id;
    echo "Entry Successfull and the last id is:".$last_id;
    $con->close();
}
// else
// {
//     echo $con->error;
// }
// $con->close();
?>