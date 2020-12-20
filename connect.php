  
<?php



  
  $Account Number = filter_input(INPUT_POST,'Account Number');
  $E-mail = filter_input(INPUT_POST,'E-mail');
  $Amount = filter_input(INPUT_POST,'Amount');
  
$host="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname="banking system";
  
  
  <input type="submit" name="submit" value="Submit">  
</form>


$host="localhost";
$dbusername ="root";
$dbpassword ="";
$dbname="banking system";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if (mysqli_connect_error()){
	die('Connect error ('.mysqli_connect_errno().')'
	.mysqli_connect_error());
}
else{
	$sql = "INSERT INTO Details(Account Number,E-mail,Amount)
	values ('$Account Number, $E-mail,$Amount)";
	if($conn->query($sql)){
		echo "NEW RECORD IS INSERTED SUCCESSFULLY";
	}
	else{
		echo "Error:".$sql."<br>".$conn->error;
	}
	$conn->close();
}
?>

