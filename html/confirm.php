<!DOCTYPE html>
<html>
  <head>
    <title>Confirmation Page</title>
    <link href="../css/confirm.css" rel="stylesheet" type="text/css">
    <link href="../css/index.css" rel="stylesheet" type="text/css">
  </head>
  <body>

	<ul>
	  <li><a href="about.php">About</a></li>
	  <li><a class="active" href="HomePage.php">Store</a></li>
	  <li><a>Kati Tran 33574122</a></li>
	</ul>

	<div class="about-section">
		<h1>Kais"R"Us</h1>
	</div>

<?php
    $servername= "localhost"; $username = "root"; $password = ""; 
      try { $conn = new PDO("mysql:host=$servername;dbname=proj2database", $username, $password); 
        // set the PDO error mode to exception 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
      } 
      catch(PDOException$e) { 
        echo "Connection failed: " . $e->getMessage(); 
    } 
    try{
			$sql = "INSERT INTO confirm (itemname, amount, first, last, phone, street, city, state, zipcode, speed, credit, expire, ccv) VALUES (:item_name, :amount, :first_name, :last_name, :phone, :address, :city, :state, :zip, :shipping, :cardnum, :expire, :security)"; 

			$stmt = $conn->prepare($sql); 
			$stmt->execute(array( 
				':item_name' => $_POST['item_name'], 
				':amount' => $_POST['amount'], 
				':first_name' => $_POST['first_name'], 
				':last_name' => $_POST['last_name'],
				':phone' => $_POST['phone'],
				':address' => $_POST['address'],
				':city' => $_POST['city'],
				':state' => $_POST['state'],
				':zip' => $_POST['zip'],
				':shipping' => $_POST['shipping'],
				':cardnum' => $_POST['cardnum'],
				':expire' => $_POST['expire'],
				':security' => $_POST['security']
			));
	}
	catch(PDOException $e){
		die("ERROR: Could not able to execute $sql. " . $e->getMessage());
	}


	echo '<div class="main">';
	echo '<div class="confirm">';
	echo '<h2>Order Confirmation</h2>';
	echo '<h3>Shipping Details</h3>';
	echo '<h4>Shipping to:</h4>';
	echo '<p>'. $_POST['first_name'] . ' '. $_POST['last_name'] . '</p>';
	echo '<p>'. $_POST['address'] . '</p>';
	echo '<p>'. $_POST['city'] . ', '. $_POST['state'] . ' '. $_POST['zip'] . '</p>';
	echo '<p>'. $_POST['phone'] . '</p>';
	echo '<h4>Shipping Via:</h4>';
	echo '<p>'. $_POST['shipping'] . '</p>';
	echo '<h3>Item Details</h3>';
	echo '<h4>Items</h4>';
	echo '<p>'. $_POST['item_name'] . ': '. $_POST['amount'] . '</p>';
	echo '<h3>Payment Information</h3>';
	echo '<h4>Card Information</h4>';
	echo '<p><b>Card No.: </b> '. $_POST['cardnum'] . '</p>';
	echo '<p><b>Valid: </b> '. $_POST['expire'] . ' <b>CVV:</b> '. $_POST['security'] . '</p>';
	echo '</div>';
	echo '</div>';

	$conn = null;



?>

</body>
</html>