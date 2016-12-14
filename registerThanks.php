<?php
	include 'dbConnection.php';

$userNameO = $_POST["userNameO"];
$passwordO = $_POST["passwordO"];
$passwordConfO = $_POST["passwordConfO"];
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$organization = $_POST["organization"];
$title = $_POST["title"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$address1 = $_POST["address1"];
$address2 = $_POST["address2"];
$city = $_POST["city"];
$state = $_POST["state"];
$zip = $_POST["zip"];


$sql = "INSERT INTO Organizer (userNameO, passwordO, passwordConfO, firstName, lastName, organization, title, email, phoneNumber, address1, address2, city, state, zip)
	VALUES ('$userNameO', '$passwordO', '$passwordConfO', '$firstName', '$lastName', '$organization', '$title', '$email', '$phoneNumber', '$address1', '$address2' , '$city' , '$state', '$zip')";



?>

<html>

<head>
	<title>Thank you for Registering</title>
	<script src="https://use.typekit.net/vuu1cgo.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script src="js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/style.css"></link>
</head>

<body>
	
	<div class="main-container">
		
<!-- Navigation -->

	<?php include 'navLoggedIn.php';
	?>

<!-- Start of Content -->
		<div class="main-content">
						
			<div class="sidebar">
				
				<?php include 'sidebar.php';
				?>

			</div>

			<div class="main-view">


				<div class="section">
					<?php
					if ($conn->query($sql) === TRUE) {
						echo "<h4>Congratulations!</h4><p>You have created an account and are ready to start posting your projects!<p>";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();

					?>
					
					
				</div>

              <div class="spacer1"></div>

				<div class="">
					<div class="f-buttons" id="post">
					<a href="project.php">POST A PROJECT</a>
					</div>

					<div class="f-buttons" id="view">
					<a href="myprojects.php" id="create-your-account">GO TO MY PROJECTS</a>
					</div>
				</div>

				<div class="spacer2"></div>
		
			</div>	

<!-- 		<div class="bottom-img">
				<img src="media/bottom-image.jpg">
		</div> -->

	</div>

</body>

</html>






