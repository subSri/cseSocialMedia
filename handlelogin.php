?php include 'connection.php';?>
 
<?php

// create a variable

$loginpass=$_POST['pswd'];

$emailid=$_POST['EmailId'];
 

$query = "SELECT * FROM userdata WHERE emailid = :emaill AND passwd=:pass";
  $st =  $pdo->prepare($query);
  $st->bindValue(':emaill', $emailid);
  $st->bindValue(':pass', $loginpass);
  $st->execute();

  $cnt = $st->rowCount();
  if ($cnt > 1){
    echo '<script>alert("Successfully Logged In.")</script>';
    echo '<script>window.location.href = "index.html"</script>';
  }
  else{
    echo '<script>alert("No such Email registered.SignUp instead?.")</script>';
    echo '<script>window.location.replace("LoginPage.html")</script>';
  }