<?php 
session_start();
?>

<?php 

include('dbconnect.php');
if ( $_POST){
	$Username = $_POST['Username'];
	$Password = $_POST['Password'];

	$query1 = "SELECT * FROM [User] U LEFT JOIN UserDetail UD ON U.UserName=UD.UserName WHERE U.UserName = '$Username'";
	$sql = sqlsrv_query($conn, $query1);

		if( !$sql ){
			echo "sql query failed\n";		
		}
		else{
			$obj = sqlsrv_fetch( $sql );
			$dbName = sqlsrv_get_field($sql, 0);
			$dbPass = sqlsrv_get_field($sql, 1);
			
			//$query2 = "UPDATE [User] SET Password = '$newpassword' WHERE UserName = '$username'";
			//$param2 = array($newpassword);
			//$sql2 = sqlsrv_query($conn, $query2);
		}

if (isCorrectLogin($Username, $Password))	{
	echo "welcome to sanguine.".$Username;
	$_SESSION["isAuthenticated"] = true;
	$_SESSION["DisplayName"] = sqlsrv_get_field($sql, 3);
	 header("Location: http://localhost/Sanguine-Web/jsonGenerator.php");

}
else {
	echo "wrong credentials.";
	$_SESSION["isAuthenticated"] = false;

	}
}


function isCorrectLogin($username, $password){
	global $dbName;
	global $dbPass;
	if ($username == $dbName && $password == $dbPass)
		return true;
	else 	
		return false;
		
    }


?>