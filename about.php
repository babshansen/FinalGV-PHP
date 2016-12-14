<?php
	include 'dbConnection.php'

?>

<html>

<head>
	<title>About</title>
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

			<div class="sidebar space">
			</div>


			<div class="main-view">

				<div class="breadcrumbs"><a href="index.html">Home/</a><a>About</a></div>

				<div class="section how">
					<p>Anyone with a great idea for change in the neighborhood can find volunteers and promote their project.</p>
					
					<div class="about-number-wrapper">

						<div class="1 acontainer">
							<div class="anumber-header">
								<div class="circle">
									<h2>1</h2>
								</div>
								<div class="aline"></div>
							</div>
							<p>Local organizations or individuals reach out for volunteers by posting project.</p>
						</div>

						<div class="2 acontainer">
							<div class="anumber-header">
								<div class="circle">
									<h2>2</h2>
								</div>
								<div class="aline"></div>
							</div>
							<p>Volunteers browse projects and signing up for what interests them most.</p>
						</div>

						<div class="3 acontainer">
							<div class="anumber-header">
								<div class="circle">
									<h2>3</h2>
								</div>
								<div class="aline"></div>
							</div>
							<p>The organizer receives contact information for volunteers who are interested.</p>
						</div>

					</div>
				</div>
			
				<div class="aboutheader"><h2>Guidelines</h2></div>

				<div class="section about-headerp">
					<p>To be post a project, you must:</p>
	 				<ul>
	  				<li> Have primarily public benefit, rather than private benefit.</li>
	  				<li>Benefit your neighborhood's community, local environment or both.</li>
	  				<li>Produce tangible results. These should be immediately apparent to one or more of our five senses.</li>
	  				<li>Be local to the project site.</li>
	  				</ul>

					<p>When you post your project on Germantown Volunteers, you can instantly find new volunteers: All you need to do is share your idea: Just tell us a little more about yourself and your awesome idea.</p>
					<p>Questions? Sent an email to <a href=mailto:babs@germantownvolunteers.org?Subject="Hello" target="_top">babs@germantownvolunteers.org.</a> She always has time for those taking time to make their neighborhood better.</p>
				</div>	

				<div class="aboutheader"><h2>Contact Us</h2></div>

				<div class="section about-headerp">
					<p>We love to hear from you! Drop us a line:</p>
					<p>MODERATOR:</p>
					<a href=mailto:babs@germantownvolunteers.org?
					Subject="Hello" target="_top"> babs@germantownvolunteers.org</a>	
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






