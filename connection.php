<?php  
    //    $servername = "localhost";  
    //    $username = "root";  
	//    $password = '';  
	// //    $dbname = ";
	//    $conn = mysqli_connect($servername , $username , $password, 'meradatabase') or die("unable to connect to host"); 
	// $conn=mysqli_connect('localhost','root','','meradatabase');
	// $dbhost = "localhost";
	// $dbuser = "root";
	// $dbpass = '2912';
	// $db = "ForEx";
	// $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$db) or die("Connect failed");
	// $conn = pg_connect(getenv("DATABASE_URL"));
	$dbopts = parse_url(getenv('DATABASE_URL'));
$app->register(new Csanquer\Silex\PdoServiceProvider\Provider\PDOServiceProvider('pdo'),
               array(
                'pdo.server' => array(
                   'driver'   => 'pgsql',
                   'user' => $dbopts["user"],
                   'password' => $dbopts["pass"],
                   'host' => $dbopts["host"],
                   'port' => $dbopts["port"],
                   'dbname' => ltrim($dbopts["path"],'/')
                   )
               )
);
	
echo "Connection Ho gaya"; 
