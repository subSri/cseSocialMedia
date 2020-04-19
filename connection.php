<?php  
    //    $servername = "localhost";  
    //    $username = "root";  
	//    $password = '';  
	// //    $dbname = ";
	//    $conn = mysqli_connect($servername , $username , $password, 'meradatabase') or die("unable to connect to host"); 
	// $conn=mysqli_connect('localhost','root','','meradatabase');
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = '2912';
	$db = "ForEx";
	$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed");
	
echo "Connection Ho gaya"; 
