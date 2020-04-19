<?php include 'connection.php';?>
 
<?php
 
// create a variable
$name=$_POST['username'];
$pass=$_POST['pass'];
$confpass=$_POST['confpass'];
$email=$_POST['emailid'];
 

$query = "SELECT * FROM userdata WHERE emailid = '{$email}'";
$result = mysqli_query($conn,$query);
if (mysqli_num_rows($result) == 0){
    mysqli_query($conn,"INSERT INTO userdata VALUES('$email','$name','$pass')");
}
else{
    

    echo '<script>alert("Email Id already registered.Check your details.")</script>';
    echo '<script>window.location.replace("index.php")</script>';
}

echo '<script>window.location.href = "index.html"</script>';

?>