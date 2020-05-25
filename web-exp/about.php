<title>About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3 Css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Font Css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<!-- My Css -->
<link rel="stylesheet" type="text/css" href="mystyle.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	/*use in navbar*/
	.w3-bar,h1 {font-family: "Montserrat", sans-serif}

	/*used to increase size of font awesome icons*/
	.fa-anchor {font-size:200px}

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
	document.getElementById("about").classList.add("w3-white");
	//removing hover effects from project
	document.getElementById("about").classList.remove("w3-hover-white");
</script>

<!-- About Section -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
	    <h1>About Us</h1>
	    <h5 class="w3-padding-32">System Fire Protection (SFP) was established in April 2015. The company has been established with proven management team that has over 25 years of experience in the fire protection Industry.</h5>

	    <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
      </p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>




<!-- Footer -->
<?php include 'footer.htm';?>