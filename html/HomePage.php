<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">

</head>
<div id="poll">
<link href="../css/store.css" rel="stylesheet" type="text/css">
<link href="../css/index.css" rel="stylesheet" type="text/css">
<body>

	<ul>
	  <li><a href="about.php">About</a></li>
	  <li><a class="active" href="HomePage.php">Store</a></li>
	  <li><a>Kati Tran 33574122</a></li>
	</ul>

    <div class="about-section">
	  <h1>Kais"R"Us</h1>
	</div>

	<div class="main">

	<!-- Portfolio Gallery Grid -->
		<div class="row">

			<?php 
			$servername= "localhost"; $username = "root"; $password = ""; 
			try { $conn = new PDO("mysql:host=$servername;dbname=proj2database", $username, $password); 
				// set the PDO error mode to exception 
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			} 
			catch(PDOException$e) { 
				echo "Connection failed: " . $e->getMessage(); 
			} 

			$stmt = $conn->query("SELECT * FROM items"); 
			while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) { 
				echo '<div class="column">';
				echo '<div class="content" id="'.$row['id'] .'" onclick="sendData(\''.$row['id'] .'\')">';
				echo '<img src="'. $row['picture'] . '" style="width:100%">';
				echo '<h4>'. $row['name'] . '</h4>';
				echo '<p><b>$'. $row['price']. '</b></p>';
				echo '<div class="texts">';
				echo '<p><b>Type: </b>'. $row['type'] . '&nbsp&nbsp&nbsp<b>Color: </b>'. $row['color'] .'</p>';
				echo '</div>';
				echo '</div>';
				echo '</div>';
			} 
			$conn = null;
			?>

		<script type="text/javascript">
			function sendData(id_name) {
				var xhr= new XMLHttpRequest(); 
				xhr.onreadystatechange= function () {
					if (xhr.readyState== 4 && xhr.status== 200){
						document.getElementById("poll").innerHTML=this.responseText;
						//location.href = "desc.php"
					}
				} 
				  xhr.open("POST","desc.php?",true);
				  xhr.setRequestHeader("content-type", "application/x-www-form-urlencoded"); 
				  xhr.send("zip=" +id_name);
			}

		    function replaceIMG(elem){
		      document.getElementById("image").src = elem;
		    }

		function zipPredict(str) {
			var ci = document.getElementById("cityname").value;
			var str = document.getElementById("statename").value;

		  if (str.length == 0 && ci.length == 0) { 
		    document.getElementById("zippie").innerHTML = "";
		    return;
		  } else {
		    var xmlhttp = new XMLHttpRequest();
		    xmlhttp.onreadystatechange = function() {
		      if (this.readyState == 4 && this.status == 200) {
		        document.getElementById("zippie").innerHTML = this.responseText;
		      }
		    };
		    xmlhttp.open("GET", "readzip.php?state=" + str +"&city=" + ci, true);
		    xmlhttp.send();
		  }
		}

		</script>
	
	</div>

	<!-- END GRID -->
	</div>
</div>


</body>
</html>