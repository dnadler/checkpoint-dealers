<?php
	session_name("Darin");
	session_start();
	// ### Commented out for testing purposes ###
	$_SESSION['password'] = $_POST['pdub'];
	$_SESSION['userID'] = $_POST['user'];

	// ### Not using this line currently ###
	//require ('access.php');
	// ###

	header('Content-Type: text/html');
	header("Cache-Control: no-cache");
	header("Pragma: no-cache");
	
	require_once('../includes/setup-connection.php');

	
	// ### Commented out for testing purposes ###
	$uid = htmlentities($_SESSION['userID'], ENT_QUOTES);
	$prePW = htmlentities($_SESSION['password'], ENT_QUOTES);
	$pw = sha1($prePW);
	
	
	

	$table = "dealers";

	$SQL = "SELECT * FROM $table WHERE UID = '".$uid."' AND PW = '".$pw."'";

	$result = mysqli_query($con,$SQL);
	$num_rows = mysqli_num_rows($result);
	/*echo "<table>";
	while ($row = mysqli_fetch_array($result))	{
		  echo "<tr>";
		  echo "<td class='TableText-BOD'>" . $row['DealerCode'] . "</td>";
		  echo "<td class='TableText-BOD'>" . $row['DealerName'] . "</td>";
		  echo "<td class='TableText-BOD'>" . $row['DealerFirst'] . "</td>";
		  echo "<td class='TableText-BOD'>" . $row['DealerLast'] . "</td>";
		  echo "<td class='TableText-BOD'>" . $row['UID'] . "</td>";
		  echo "<td class='TableText-BOD'>" . $row['PW'] . "</td>";
		}
	echo "</table>";*/

	if ($num_rows == 1) {
		$row = mysqli_fetch_row($result);
		$_SESSION['loggedIn'] = true;
		$_SESSION['dealerCodeSession'] = $row[0];
		mysqli_close($con);
		header('Location: ../controlPanel'); /* Redirect browser */
		
		/* Make sure that code below does not get executed when we redirect. */
		exit;
	} else {
		$_SESSION['loggedIn'] = false;
		$_SESSION['loginMsg'] = "Incorrect";
		header('Location: ../'); /* Redirect browser */

	/*
		echo 'Incorrect User Credentials';
		echo "<pre>";
        var_dump($_SESSION);
        echo "</pre>";
    */
        exit;
	}


	mysqli_close($con);
?>
