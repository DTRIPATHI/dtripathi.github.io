<html lang="en">
<title>Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3 Css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Font Css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<!-- My Css -->
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
	/*use in navbar*/
	.w3-bar,h1,label,.office-address {font-family: "Montserrat", sans-serif}
	/*used in address*/
	.address-head {font-size: 20px;}
	/*used in forms*/
	label {font-size: 17px;}
	/*used in footer*/
	.lato-font {font-family: "Lato", sans-serif}

</style>

<!-- Navbar -->
<?php include 'nav-bar.htm';?>
<script>
	//removing white from home
	document.getElementById("home").classList.remove("w3-white");
	//adding hover effects on home
	document.getElementById("home").classList.add("w3-hover-white");
	//adding white class to project 
	document.getElementById("ctc").classList.add("w3-white");
	//removing hover effects from project
	document.getElementById("ctc").classList.remove("w3-hover-white");
</script>

<div class="w3-row-padding w3-padding-64 w3-container">
	<div class="w3-content">
		<div style="padding:0px 30px 10px 30px;">
			<h1>Contact Us</h1>
			<div style="margin-bottom: 10px;">
				For a faster turnaround, please fill in this simple form and submit.<br> <br>

				We will contact you at the earliest.<br> <br>

				<div class="w3-col m6" style="padding: 0px 20px 0px 0px;">


					<form action="action_page.php" method="POST">
						
						<p>
					        <label>Name</label>
							<input name="sender" class="w3-input w3-border" type="text" required>
						</p>

						<p>
					        <label>Company</label>
							<input name="company" class="w3-input w3-border" type="text" required>
						</p>

						<p>
					        <label>Phone</label>
							<input name="phone" class="w3-input w3-border" type="text" required>
						</p>

						<p>
					        <label>Email</label>
							<input name="email" class="w3-input w3-border" type="text" required>
						</p>

						<p>
					        <label>Message</label>
					        <textarea name="message" class="w3-input w3-border" style="height: 100px;" required></textarea>
						</p>

						<br>

				        <button class="w3-button w3-black" type="submit" name="submit">
				          <i class="fa fa-paper-plane"></i> SEND MESSAGE
				        </button>
				      </p>
				    </form>

				</div>

				<div class="w3-col m6" style="padding: 5px 0px 0px 20px;">

					<!-- Address -->
					<div class="office-address">
						<span class="address-head">Project Office:</span><br>
						house address,<br>
						street address<br>
						Tel: phone number<br>
						Email: email id<br><br>
	
						<span class="address-head">Head Office:</span><br>
						house address, street address<br>
						city address<br>
						country<br>
					</div>

					<!-- Image of location/map -->
    				<img src="img/maps.png" class="w3-image" style="width:100%;margin-top:48px">
				</div>

			</div>
		</div>
	</div>
</div>

<!-- Footer -->
<?php include 'footer.htm';?>