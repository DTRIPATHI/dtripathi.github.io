<html lang="en">
<title>Contact</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3 Css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Font Css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<!-- My Css -->
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style type="text/css">
	/*use in navbar*/
	.w3-bar,h1 {font-family: "Montserrat", sans-serif}
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

<!-- Footer -->
<?php include 'footer.htm';?>