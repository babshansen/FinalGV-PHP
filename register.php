<?php

include 'dbConnection.php';

// Typeface Query for Related data dropdown

//Check if a (organizer) ID was supplied in the URL Query Parameter
if (isset($_GET['ID'])) {

	$ID = $_GET['ID'];

	//Query DB for details on that style
	$organizerSQL = "SELECT * FROM Organizer WHERE (ID = $ID)";

	$organizer = $conn->query($organizerSQL)->fetch_assoc();


}
?>

<html>

<head>
	<title>Register</title>
	<script src="https://use.typekit.net/vuu1cgo.js"></script>
	<script>try{Typekit.load({ async: true });}catch(e){}</script>
	<script src="js/scripts.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/style.css"></link>
</head>

<body>
	
	<div class="main-container">
		
<!-- Navigation -->

	<?php include 'nav.php';
	?>

<!-- Start of Content -->
		<div class="main-content">
		
			<div class="sidebar">
				
				<?php include 'sidebar.php';
				?>

			</div>

			<div class="main-view">

			  	<form action="registerThanks.php" method="post" name="register">	
			  		<?php if (isset($ID)) echo "<input type= 'hidden' name='ID' value=" . $ID . " >"; ?>

			        <div class="double form">

			        	<fieldset id="create">
				        	<legend>REGISTER</legend>				          

							<div class="field-wrap">
								<label for="userNameO">
								Username<span class="req">*</span>
								</label>
								<input name="userNameO" type="text" <?php if (isset($organizerSQL['userNameO'])) echo "value='" . $organizerSQL['userNameO'] . "'"; ?> />
							</div>

							<div class="field-wrap">
								<label for="passwordO">
								Set A Password<span class="req">*</span>
								</label>
								<input name="passwordO" type="text"/>
							</div>

							<div class="field-wrap">
								<label for="passwordConfO">
								Confirm Your Password<span class="req">*</span>
								</label>
								<input name="passwordConfO" type="text"/>
							</div>
						</fieldset>

						<fieldset id="aboutyou">
				        	<legend>PROFILE INFORMATION</legend>				          
							<div class="double-row">
								<div class="field-wrap">
								<label>
								First Name<span class="req">*</span>
								</label>
								<input name="firstName" type="text" autocomplete="off" />
								</div>

								<div class="field-wrap">
								<label>
								Last Name<span class="req">*</span>
								</label>
								<input name="lastName" type="text" autocomplete="off"/>
								</div>
							</div>


					        <div class="field-wrap">
								<label>
								Organization
								</label>
								<input name="organization" type="text" autocomplete="off"/>
							</div>
							
							<div class="field-wrap">
								<label>
								Title
								</label>
								<input name="title" type="text" autocomplete="off"/>
							</div>

							<div class="field-wrap">
								<label>
								Email Address<span class="req">*</span>
								</label>
								<input name="email" type="email"  autocomplete="off"/>
							</div>						

							<div class="field-wrap">
								<label>
								Phone Number<span class="req">*</span>
								</label>
								<input name="phoneNumber" type="tel" autocomplete="off"/>
							</div>
				          
							<div class="field-wrap">
								<label>
								Address1<span class="req">*</span>
								</label>
								<input name="address1" type="text" autocomplete="on"/>
							</div>

							<div class="field-wrap">
								<label>
								Address2
								</label>
								<input name="address2" type="text" autocomplete="off"/>
							</div>

							<div class="double-row">
								<div class="field-wrap">
								<label>
								City<span class="req">*</span>
								</label>
								<input name="city" type="text" autocomplete="off" />
								</div>

								<div class="field-wrap">
								<label>
								State<span class="req">*</span>
								</label>
								<form action="./" method="GET">
								<select name="state" class="st-options">
									<option value="PA">PA</option>
									<option value="AL">AL</option>
									<option value="AK">AK</option>
									<option value="AZ">AZ</option>
									<option value="AR">AR</option>
									<option value="CA">CA</option>
									<option value="CO">CO</option>
									<option value="CT">CT</option>
									<option value="DE">DE</option>
									<option value="DC">DC</option>
									<option value="FL">FL</option>
									<option value="GA">GA</option>
									<option value="HI">HI</option>
									<option value="ID">ID</option>
									<option value="IL">IL</option>
									<option value="IN">IN</option>
									<option value="IA">IA</option>
									<option value="KS">KS</option>
									<option value="KY">KY</option>
									<option value="LA">LA</option>
									<option value="ME">ME</option>
									<option value="MD">MD</option>
									<option value="MA">MA</option>
									<option value="MI">MI</option>
									<option value="MN">MN</option>
									<option value="MS">MS</option>
									<option value="MO">MO</option>
									<option value="MT">MT</option>
									<option value="NE">NE</option>
									<option value="NV">NV</option>
									<option value="NH">NH</option>
									<option value="NJ">NJ</option>
									<option value="NM">NM</option>
									<option value="NY">NY</option>
									<option value="NC">NC</option>
									<option value="ND">ND</option>
									<option value="OH">OH</option>
									<option value="OK">OK</option>
									<option value="OR">OR</option>
									<option value="RI">RI</option>
									<option value="SC">SC</option>
									<option value="SD">SD</option>
									<option value="TN">TN</option>
									<option value="TX">TX</option>
									<option value="UT">UT</option>
									<option value="VT">VT</option>
									<option value="VA">VA</option>
									<option value="WA">WA</option>
									<option value="WV">WV</option>
									<option value="WI">WI</option>
									<option value="WY">WY</option>
								</select>
								</div>

								<div class="field-wrap">
								<label>
								Zip<span class="req">*</span>
								</label>
								<input name="zip" type="text" autocomplete="off"/>
								</div>
							</div>
						</fieldset>
						
						<button class="f-buttons" type="submit">CREATE YOUR ACCOUNT</button>

<!-- 						<div class="f-buttons">
						<button class="main-button" type="submit">CREATE YOUR ACCOUNT</button>
						</div> -->
			          
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






