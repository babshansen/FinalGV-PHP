<?php
	include 'dbConnection.php';

$organizerID = $_POST["organizerID"];
$projTitle = $_POST["projTitle"];
$projDescript = $_POST["projDescript"];
$projDate = $_POST["projDate"];
$projStime = $_POST["projStime"];
$projEtime = $_POST["projEtime"];
$projLocation = $_POST["projLocation"];
$organizerName = $_POST["organizerName"];
$projImage = $_POST["projImage"];


$sql = "INSERT INTO Projects (organizerID, projTitle, projDescript, projDate, projStime, projEtime, projLocation, organizerName, projImage)
	VALUES ('$organizerID', '$projTitle', '$projDescript', '$projDate', '$projStime', '$projEtime', '$projLocation', '$organizerName', '$projImage')";

?>

<html>

<head>
	<title>Projects Thanks</title>
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
						echo "<h3>THANKS!</h3><p>You have posted a project. Watch your inbox for volunteer messages.<p>";
					} else {
						echo "Error: " . $sql . "<br>" . $conn->error;
					}

					$conn->close();

					?>
					
					
				</div>

				<div class="">
					<div class="f-buttons" id="post">
					<a href="project.php">POST ANOTHER PROJECT</a>
					</div>

					<div class="f-buttons" id="view">
					<a href="myprojects.php" id="create-your-account">GO TO MY PROJECTS</a>
					</div>
				</div>

			</div>

		</div>	

		<div class="bottom-img">
				<img src="media/bottom-image.jpg">
		</div>

	</div>

</body>

</html>






