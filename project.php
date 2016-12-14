<?php

include 'dbConnection.php';
// include 'errorReport'; 

// Organizer Query for Related data dropdown
$sql = "SELECT ID, firstName FROM Organizer ORDER BY ID DESC LIMIT 1";
$firstName = $conn->query($sql);

//Check if a projectID was supplied in the URL Query Parameter
if (isset($_GET['projectID'])) {

	$projectID = $_GET['projectID'];

	//Query DB for details on that style
	$projectSQL = "SELECT * FROM Projects where ID = $projectID";

	$project = $conn->query($projectSQL)->fetch_assoc();

}


?>


<html>

<head>
	<title>Start a Project</title>
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
					<h3>POSTING A PROJECT</h3>
					<p>You are almost there! The second step is filling out information about your project to share with the awesome people who want to help you.</p>
				</div>
			    

			  	<form action="projectThanks.php" method="post" name="project">
			  	<?php if (isset($projectID)) echo "<input type= 'hidden' name='projectID' value=" . $projectID . " >"; ?>	
				      
			        <div class="double form">
					      
				        <fieldset id="aboutproject">
				        	<legend>ABOUT YOUR PROJECT</legend>	

				        	<div class="field-wrap">
								<label for="organizerID"></label>
								<select name="organizerID">
									<?php
									if ($firstName->num_rows > 0) {
									//output data of each row
									while($row = $firstName->fetch_assoc()) {
										echo "<option value='" . $row["ID"] ."'";
									if (isset ($project) and $project[organizerID] == $row["ID"]) echo "selected";
									echo ">" . $row["firstName"] . "</option>";
									}
									}
									?>
								</select>
							</div>

					        <div class="field-wrap">
								<label for="projTitle">
								Title of Your Project<span class="req">*</span>
								</label>
								<input name="projTitle" type="text"/>
							</div>
							
							<div class="field-wrap">
								<label for="projDescript">
								Description of Your Project<span class="req">*</span>
								</label>
								<textarea name="projDescript" autocomplete="off" cols"20" rows"4"/>Be specific by including who will this help, what your goal for the project is, and most important, what your are asking volunteers to do. </textarea>
							</div>

							<div class="double-row">
								<div class="field-wrap">
								<label for="projDate">
								Date<span class="req">*</span>
								</label>
								<input name="projDate" type="text"/>
								</div>

								<div class="field-wrap">
								<label for="projStime">
								Start Time<span class="req">*</span>
								</label>
								<input name="projStime" type="time"/>
								</div>

								<div class="field-wrap">
								<label for="projEtime">
								End Time<span class="req">*</span>
								</label>
								<input name="projEtime" type="time"/>
								</div>
							</div>

							<div class="field-wrap">
								<label for="projLocation">
								Location of Project<span class="req">*</span>
								</label>
								<input name="projLocation" type="text"/>
							</div>						

							<div class="field-wrap">
								<label for="organizerName">
								Organizer Name<span class="req">*</span>
								</label>
								<input name="organizerName" type="text"/>

							<div class="double-row">
								<div class="field-wrap">
								<label>
								Upload an image
								</label>
								<input name="projImage" type="file"/>
								</div>
								
<!-- 								<button class="field-wrap">
								<input type="submit" value="Upload" id="submit"/>
								</button> -->
							</div>

						</fieldset>

						<button class="f-buttons" type="submit" value="submit">CREATE YOUR ACCOUNT</button>

				          
				       <!--  <button type="submit" class="button button-block"/>Create Your Account</button> -->

					</div>

				</form>
			</div>
		</div>	

		<div class="bottom-img">
				<img src="media/bottom-image.jpg">
		</div>

	</div>

</body>

</html>






