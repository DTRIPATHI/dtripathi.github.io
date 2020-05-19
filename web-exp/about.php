<title>About</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3 Css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Font Css -->
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
      <h1>Heading / Question?</h1>
      <h5 class="w3-padding-32">System Fire Protection (SFP) was established in April 2015. The company has been established with proven management team that has over 25 years of experience in the fire protection Industry.</h5>

      <p class="w3-text-grey">As the name suggests FPS specialises in design, install, commission and services of fire protection systems. It is our intent to supply the best possible service in ensuring our projects are completed on budget and on time. Our specialised team from management, designers to tradespeople ensures the project runs with minimum of fuss. Our ability to deliver a complete package in fire protection and prevention including fire alarms, fire extinguishers, hose reels, fire doors and other services sets us apart from other companies. The minor works and contracts arm of FPS ensures no project is too small or too large.

      FPS has completed minor and major projects in large shopping centres, high rise residential and commercial buildings, nursing homes and major distribution warehouses. (see completed projects). FPS has branched out into many regional parts of NSW. Our projects have ranged from Coffs Harbour to Wagga Wagga. From Orange to Canberra. FPS has covered these major regional centres as well as quite remote areas as well. FPS has completed projects in other states namely Queensland and Victoria. FPS has carried out and completed numerous projects in parts of Brisbane and regional Queensland. FPS has s strong presence in all parts of Queensland.

      Our committed team will ensure projects will be achieved on time, on budget and with quality that will not be surpassed.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>




<!-- Footer -->
<?php include 'footer.htm';?>