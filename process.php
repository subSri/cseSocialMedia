<?php include 'connection.php';?>
 
<?php

// create a variable
$name=$_POST['username'];
$pass=$_POST['pass'];
$confpass=$_POST['confpass'];
$email=$_POST['emailid'];
 

$query = "SELECT * FROM userdata WHERE emailid = :emaill";
  $st =  $pdo->prepare($query);
  $st->bindValue(':emaill', $email);
  $st->execute();



  $nume = $st->rowCount();
if ($nume == 0){
  if ($confpass == $pass){

  
    // mysqli_query($conn,"INSERT INTO userdata VALUES('$email','$name','$pass')");
    $sql = 'INSERT INTO userdata(emailid,username,passwd) VALUES(:eml,:unm,:pswd)';
        $stmt = $pdo->prepare($sql);
        
        // pass values to the statement
        $stmt->bindValue(':eml', $email);
        $stmt->bindValue(':pswd', $pass);
        $stmt->bindValue(':unm', $name);
        
        // execute the insert statement
        $stmt->execute();
        echo '<script>alert("Successfully Signed In.")</script>';
  }
  else{
    echo '<script>alert("Same password not entered in Confirm Password Field.")</script>';
    echo '<script>window.location.replace("homepage.html")</script>';
  }
}
else{
    

    echo '<script>alert("Email Id already registered.Check your details.")</script>';
    echo '<script>window.location.replace("homepage.html")</script>';
}
//   $names = array();
//   while ($row = $st->fetch(PDO::FETCH_ASSOC)) {
//     $app['monolog']->addDebug('Row ' . $row['name']);
//     $names[] = $row;
//   }

//   return $app['twig']->render('database.twig', array(
//     'names' => $names
//   ));





echo '<script>window.location.href = "LoginPage.html"</script>';

?>