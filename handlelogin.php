<?php include 'connection.php';?>
<?php include 'index.html';?>
 
<?php

// create a variable

$loginpass=$_POST['pswd'];

$usr=$_POST['usernm'];
 

$query = "SELECT * FROM userdata WHERE username = :usernm AND passwd=:pass";
  $st =  $pdo->prepare($query);
  $st->bindValue(':usernm', $usr);
  $st->bindValue(':pass', $loginpass);
  $st->execute();

  $cnt = $st->rowCount();
  if ($cnt > 1){

    echo '<script>alert("Successfully Logged In.")</script>';
    // "<script>error = '" . json_encode($error)  . "'</script>"
    echo  '<script> document.getElementById("UNAME").innerHTML = '{$usr}';</script>'

    echo '<script>window.location.href = "index.html"</script>';
  }
  else{
    echo '<script>alert("No such Email registered.SignUp instead?.")</script>';
    echo '<script>window.location.replace("LoginPage.html")</script>';
  }