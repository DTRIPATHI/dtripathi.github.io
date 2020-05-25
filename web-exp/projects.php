<html lang="en">
<title>Projects</title>
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
	.w3-bar,h1 {font-family: "Montserrat", sans-serif}
	/*used in table*/
	table {max-height: 300px;}
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
	document.getElementById("proj").classList.add("w3-white");
	//removing hover effects from project
	document.getElementById("proj").classList.remove("w3-hover-white");
</script>


<div class="w3-row-padding w3-padding-64 w3-container">
	<div class="w3-content">
		<div style="padding:0px 30px 10px 30px;">
			<h1>Projects</h1>
			<div style="margin-bottom: 10px;">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione deserunt a saepe consectetur labore ipsum dignissimos doloremque aut corrupti quis reiciendis, eveniet numquam molestiae quisquam, quo, sed facere deleniti! Reprehenderit? <br> <br>

				These include the following:
			</div>
		
			
			<div style="width:270px; height:100px; float:left; line-height:25px;">
				<span>
					Fortune 500 Companies <br> National Defense Installation <br> Real Estate Companies <br> Sports Complexes
				</span>
			</div>
			<div style="width:220px; height:100px; float:left; line-height:25px;">
				<span>
					Hotels <br> Power Plants <br> Museums <br> Data Centres
				</span>
			</div>
			<div style="width:220px; height:100px; float:left; line-height:25px;"> 
				<span>
					Hospitals <br> Refineries <br> Stadiums <br> Schools
				</span> 
			</div>
			<div style="width:165px; height:100px; float:left; line-height:25px; margin-bottom: 20px;">
				<span>
					Airports <br> Universities <br> Courts <br> Shopping Malls
				</span>
			</div>
			
		</div>

		<div style="width:auto; height:auto; float:left; padding:8px; background:#eeeeee; margin:0px 0px 30px 30px; white-space:nowrap;"><img src="img/Fortune-500-Logos.jpg"></div>
		<div style="width:auto; height:auto; float:left; padding:8px; background:#eeeeee; margin:0px 0px 30px 30px; white-space:nowrap;"><img src="img/govt-buildings-logo.jpg"></div>
		<div style="width:auto; height:auto; float:left; padding:8px; background:#eeeeee; margin:0px 0px 30px 30px; white-space:nowrap;"><img src="img/hotels-n-hospitals-logos.jpg"></div>
		<div style="width:auto; height:auto; float:left; padding:8px; background:#eeeeee; margin:0px 0px 30px 30px; white-space:nowrap;"><img src="img/school-logos.jpg"></div>
		<div style="width:auto; height:auto; float:left; padding:8px; background:#eeeeee; margin:0px 0px 30px 30px; white-space:nowrap;"><img src="img/residential-logos.jpg"></div>
		<div style="width:auto; height:auto; float:left; padding:8px; background:#eeeeee; margin:0px 0px 30px 30px; white-space:nowrap;"><img src="img/other-logos.jpg"></div>

		Government companies:
		IOCL - Registered Vendor
		DMRC
		Rashtrapati Bhavan
		Vigyan Bhawan

		Private companies:
		L&T
		Indian Oil
		Simens
		Electroquip

	</div>
</div>




<!-- Footer -->
<?php include 'footer.htm';?>