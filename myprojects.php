<?php
	include 'dbConnection.php';

$sql = "SELECT Organizer.ID, Organizer.firstName, Organizer.lastName, Organizer.organization, Organizer.title, Organizer.email, Organizer.phoneNumber, Organizer.address1, Organizer.address2, Organizer.city, Organizer.state, Organizer.zip,

Projects.projectID, Projects.organizerID, Projects.projTitle, Projects.projDescript, Projects.projDate,Projects.projStime, Projects.projEtime, Projects.projLocation, Projects.organizerName
    
  FROM Organizer
  JOIN Projects 
  ON Organizer.ID = Projects.organizerID
";
   
$result = $conn->query($sql);

?>

<html>

<head>
	<title>My Projects</title>
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

					<h4>Congratulations!</h4>
					<p>You have created an account and are ready to start creating projects!<p>

	                <?php

					if ($result->num_rows > 0) {
                	// output data of each row
                	while($row = $result->fetch_assoc()) {

	                    echo "<h3>" . "<b>" . $row['firstName'] . " " . $row['lastName'] . "</b>" . " , " . $row['organization'] . " | " . $row['title'] . "</h3>" . "<br>" . $row['email'] . "<br>" . $row['phoneNumber'] . "<br>" .  $row['address1'] . "<br>" . $row['address2'] . "<br>" . $row['city'] . ", " . $row['state'] . " " . $row['zip'] . "<br>" . " <a href=register.php?ID=" . $row['ID'] ."> Update</a>" . "<br>" . "</p>" . "<br>" . "<h3>" . "<b>" . $row['projTitle'] . " " . $row['organizerName'] . "</b>" . " , " . $row['projDescript'] . " | " . $row['projDate'] . "</h3>" . "<br>" . $row['projStime'] . "<br>" . $row['projEtime'] . "<br>" .  $row['projLocation'] . "<br>" . " <a href=project.php?projectID=" . $row['projectID'] ."> Update</a>" . "<br>" . "</p>";

	               	 }
					}

					$conn->close();

	              	?>

				</div>


			</div>

		</div>	

		<div class="bottom-img">
				<img src="media/bottom-image.jpg">
		</div>

	</div>

</body>

</html>






