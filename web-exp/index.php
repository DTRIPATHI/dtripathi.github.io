<html lang="en">
<title>System Fire Protection</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- W3 Css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<!-- Font Css -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- My Css -->
<link rel="stylesheet" type="text/css" href="mystyle.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}

/*use in navbar*/
.w3-bar,h1 {font-family: "Montserrat", sans-serif}

/*used to increase size of font awesome icons*/
.fa-anchor,.fa-coffee {font-size:200px}

/*Header sliding animation*/
.slider-wrap{
  font-size: 40px;
    text-transform: uppercase;
    display: flex;
    align-items: center;
    justify-content: center;
}
.slider{
  height: 63px;
  overflow: hidden;
}
.slider-text1 {
  animation: slide 5s linear infinite;
}
.slider div {
  height: 50px;
  margin-bottom: 50px;
  padding: 2px 10px;
  text-align: left;
  box-sizing: border-box;
}
@keyframes slide {
  0% {margin-top:-300px;}
  5% {margin-top:-200px;}  
  33% {margin-top:-200px;}
  38% {margin-top:-100px;} 
  66% {margin-top:-100px;}
  71% {margin-top:0px;} 
  100% {margin-top:0px;}
}
</style>
<body>

<!-- Navbar -->
<?php include 'nav-bar.htm';?>

<!-- Header -->
<header class="w3-container w3-red w3-center" style="padding:160px 16px">
  <h1 class="w3-margin w3-jumbo">SYSTEM FIRE PROTECTION</h1>
  <div class="slider-wrap">
    Securing |
    <div class="slider">
      <div class="slider-text1">Hospitals</div>
      <div class="slider-text2">Offices</div>
      <div class="slider-text3">Colleges</div>
    </div>
  </div>
  <p class="w3-xlarge">Fire Alarm | Access Control | CCTV | Public Address</p>
  <!-- <button class="w3-button w3-black w3-padding-large w3-large w3-margin-top">Get Started</button> -->
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>About Us</h1>
      <h5 class="w3-padding-16">System Fire Protection (SFP) was established in April 2015. The company has been established with proven management team that has over 25 years of experience in the fire protection Industry.</h5>

      <p class="w3-text-grey">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid molestias, modi veniam dolor adipisci totam quibusdam nesciunt sint ab quas perferendis, velit amet itaque et, inventore recusandae! Recusandae, architecto, assumenda! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Error soluta doloremque, cumque eligendi esse nesciunt enim ea optio possimus. Velit maxime tempora, inventore facilis obcaecati ipsa expedita ipsum accusamus veritatis!
        <a href="about.php">Read More⮟</a></p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>


<!-- Footer -->
<?php include 'footer.htm';?>

</body>
</html>
