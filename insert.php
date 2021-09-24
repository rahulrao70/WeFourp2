<?php
$name = $_POST['name'];
$phonenumber = $_POST['phno'];
$email = $_POST['email'];
$description = $_POST['message'];

/*if(!empty($name)||!empty($phonenumber)||!empty($email)||!empty($description))*/

    $host = "localhost";
    
    $dbpassword = "";
    $dbname = "spharmasql";
    
$conn = new mysqli('localhost','root','','spharmasql');
if($conn->connect_error)
{
die('conncection failed : '.$conn->connect_error);
}
else
{
$stmt = $conn->prepare("insert into submit(name,phno,email,message)
      values(?,?,?,?)");
	  $stmt->bind_param("siss",$name,$phno,$email,$message);
	  $stmt->execute();
	  echo "you will be contacted shortly...";
	  $stmt->close();
	  $conn->close();
   
}
?>
    
		
		
		
		
		