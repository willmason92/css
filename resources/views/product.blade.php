<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">


<style>
body {
    font-family: "Open Sans", sans-serif;
}
.sidenav h1, p {
  color:white;
}


.sidenav {
    height: 100%;
    width: 430px;
    position: fixed;
    z-index: 1;
    top: 0;
    left: -430px;
    background-color: #414141;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}
a {
  color:white;
}
.sidenav>a {
    text-decoration: none;
    font-size: 11pt;
    color: #fff;
    display: block;
    transition: 0.3s;
    padding: 10px;
    margin: 0 0 4px!important;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    font-size: 11pt;
    display: block;
    text-transform: none;
    font-weight: bold;
}
ul li a {
      line-height: 240%;
    font-size: 9pt;
    padding-left: 10px;
    padding-right: 10px;
    list-style: none;
    font-weight:bold; 
}
.sidenav a:hover {
    color: #f1f1f1;
    background-color:#303030;
    text-decoration: underline;
}
.sidenav a.active {
    color: #1EA0F5;
    background-color:#303030;
    text-decoration: underline;
}


.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

/* Top nav for bigger screens */

.topnav {
  position: relative;
  overflow: hidden;
  background-color: #fff;
}
.fixed {
    height: 61px !important;
    border-bottom: solid 1px #E7E6E6;
    width: 100%;
        position: fixed;
    top: 0px !important;
    z-index: 2;
}
.nav-img-orig {
  margin:-15px 0 0 15px; 
  height:69px;
}
.nav-image-fixed {
  position:fixed;
  height:50px;
  padding-top:10px;
}
.topnav a {
  float: left;
  color: #000;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav-centered>a:hover {
  border-bottom: 2px solid #8EAEB2 ;
  color: black;
}
.dropdown>a:hover {
  border-bottom: 2px solid #8EAEB2 ;
  color: black;
}

.topnav a.active {
  color: #000;
}

.topnav-centered a {
  float: none;
  position: relative;
  top: 50px;
  left: 20%;
  transform: translate(-50%, -50%);
  font-weight: bold;
}
.topnav-centered-fixed a {
  float: none;
  position: relative;
  top: 15px;
  left: 20%;
  transform: translate(-50%, -50%);
  font-weight: bold;
}
.topnav-right {
  float: right;
}

.dropdown {
    position: relative;
    display: inline-block;
    left:20%;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}


.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}
.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}




#main {
    transition: margin-left .5s;
    padding: 16px;
}

.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    text-align:center;
}
a.no-decoration:hover {
  text-decoration: none !important;
}


@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
</style>
</head>
<body>


<!-- Top navigation -->
<div id="nav-top" class="topnav">

  <!-- Centered link -->
  <div id="centered-topnav" class="topnav-centered">
    <a href="#home" class="active">Home</a>
    <div class="dropdown">
      <a href="">For You</a>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <div class="dropdown">
      <a href="">For Business</a>
    </div>
    <div class="dropdown">
      <a href="">Your Council</a>
    </div>
      <div class="dropdown">
      <a href="">News and Events</a>
    </div>
  </div>
  {{$id}}
  <!-- Left-aligned links (default) -->
  <a href="https://www.erewash.gov.uk/index.php">
    <img id="nav-img" src="https://www.erewash.gov.uk/media/EBC/files/Logos/logo.png" class="center nav-img-orig" style="">
  </a>
  
</div>

<div id="mySidenav" class="sidenav">

  <img src="https://www.erewash.gov.uk/media/EBC/files/Logos/logo3.png" class="center" style="margin:0 auto; height:90px;">
  <h1 style="text-align:center;">Erewash Borough Council</h1>
  <hr>
  <a href="https://www.erewash.gov.uk/index.php">Home</a>
  <a id="for-you" class="sub-menu" onclick="ForYou()" href="#">For You</a>
  <ul id="for-you-ul" style="display:none; background-color:#2A2A2A; margin-left:-30px;">
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/benefits.html">Benefits</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/building-control.html">Building Control</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/council-tax-menu.html">Council Tax</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/debt-advice.html">Debt Advice</a></li>
    <li class="sidebar-sub"><a href="http://www.erewashmuseum.co.uk/">Erewash Museum</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/grants.html">Grants</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/housing-menu.html">Housing</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/living-in-the-borough.html">Living in the Borough</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/leisure-facilities.html">Leisure Facilities</a></li>
    <li class="sidebar-sub"><a href="https://myservice.erewash.gov.uk/RevsBens/home.page?keyNumber=2&keyObjectType=Contact">My Erewash</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/neighbourhood-wardens.html">Neighbourhood Wardens</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/planning.html">Planning</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/planning-policy.html">Planning Policy</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/waste-and-recycling.html">Waste and Recycling</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-you/environmental-health.html">Environmental Health</a></li>
  </ul>
  <a id="business" class="sub-menu" onclick="business()" href="#">For Business</a>
  <ul id="business-ul" style="display:none; background-color:#2A2A2A; margin-left:-30px;">
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-business/support-for-businesses.html">Support for Business</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-business/legal-requirements-for-businesses.html">Legal Requirements for Business</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-business/sponsorship-opportunities.html">Sponsorship Opportunities</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-business/tenders-and-contracts-main.html">Tenders and Contracts</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-business/commercial-waste-and-recycling.html">Commercial Waste and Recycling</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/for-business/environmental-health-business.html">Environmental Health - Business</a></li>
  </ul>
  <a id="council" class="sub-menu" onclick="council()" href="#">Your Council</a>
  <ul id="council-ul" style="display:none; background-color:#2A2A2A; margin-left:-30px;">
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/your-council/about-the-council.html">About the Council</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/your-council/services-we-provide.html">Elections</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/your-council/contact-us.html">Contact Us</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/your-council/jobs.html">Jobs</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/your-council/derbyshire-county-council-services.html">Derbyshire County Council Services</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/your-council/mayor-of-erewash.html">Mayor of Erewash</a></li>
    <li class="sidebar-sub"><a href="https://moderngov.erewash.gov.uk/mgMemberIndex.aspx?FN=ALPHA&VW=LIST&PIC=0?">Councillors & Committees</a></li>
  </ul>
  <a id="events" class="sub-menu" onclick="events()" href="#">News and Events</a>
  <ul id="events-ul" style="display:none; background-color:#2A2A2A; margin-left:-30px;">
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/news-and-events/latest-news-mnu.html">Latest News</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/news-and-events/ebc-today.html">EBC Today</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/news-and-events/events-calendar.html">Events Calendar</a></li>
    <li class="sidebar-sub"><a href="https://www.erewash.gov.uk/index.php/news-and-events/events.html" style="color:#2399F5;">Events in Erewash</a></li>
  </ul>
  <hr>
  <div style="padding:0 10px 10px 10px;">
    <h1>Get in touch.</h1>
    <p><i class="fa fa-map-marker" aria-hidden="true" style="color: #9D3453;"></i> Erewash Borough Council, Town Hall, Wharncliffe Road,Ilkeston, Derbyshire. DE7 5RP</p>
    <p><i class="fas fa-phone" style="color: #9D3453;"></i> 0115 907 2244</p>
  </div>
</div>

<div id="main">
  <span id="nav-closed" style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <span id="nav-open" style="font-size:30px;cursor:pointer; display:none;" onclick="closeNav()">&#9776;</span>
  <img src="https://www.erewash.gov.uk/media/EBC/files/Logos/logo.png" width="65" style="margin: 10px;">
</div>

<div class="main-content" style="height:3000px">

</div>

<div class="">

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

<script>
$( document ).ready(function() {
  if ($(window).width() > 1020) {
    $('#main').css('display','none');
    $('.topnav').css('display','block');
  }
  else {
    $('#main').css('display','block');
    $('.topnav').css('display','none');
  }
});
$( window ).resize(function() {
  if ($(window).width() > 1020) {
    $('#main').css('display','none');
    $('.topnav').css('display','block');
  }
  else {
    $('#main').css('display','block');
    $('.topnav').css('display','none');
  }
});
$(window).scroll(function() {
  var scrollTop = $(window).scrollTop();
  if ( scrollTop > $('.main-content').offset().top ) { 
    // display add
    $('#nav-top').removeClass('fixed');
    $('#centered-topnav').addClass('fixed');
    $('#centered-topnav').removeClass('topnav-centered');
    $('#centered-topnav').addClass('topnav-centered-fixed');
    $('#nav-img').addClass('nav-image-fixed');
    $('#nav-img').removeClass('nav-image-orig');

  } else {
    $('.topnav').removeClass('fixed');
    $('#centered-topnav').removeClass('fixed');
    $('#centered-topnav').addClass('topnav-centered');
    $('#centered-topnav').removeClass('topnav-centered-fixed');
    $('#nav-img').removeClass('nav-image-fixed');
    $('#nav-img').addClass('nav-image-orig');
  }
});
function openNav() {
    document.getElementById("mySidenav").style.left = "0px";
    document.getElementById("main").style.marginLeft = "430px";
    $('#nav-closed').css('display','none');
    $('#nav-open').css('display','block');
}

function closeNav() {
    document.getElementById("mySidenav").style.left = "-430px";
    document.getElementById("main").style.marginLeft= "0";
    $('#nav-closed').css('display','block');
    $('#nav-open').css('display','none');
}

function ForYou() {
    if ( $('#for-you-ul').css('display') == 'none')
    {
      $('#for-you-ul').css('display','block');
      $('#business-ul').css('display','none');
      $('#council-ul').css('display','none');
      $('#events-ul').css('display','none');
    } else {
      $('#for-you-ul').css('display','none');
    }
}
function business() {
    if ( $('#business-ul').css('display') == 'none')
    {
      $('#for-you-ul').css('display','none');
      $('#business-ul').css('display','block');
      $('#council-ul').css('display','none');
      $('#events-ul').css('display','none');
    } else {
      $('#business-ul').css('display','none');
    }
}
function council() {
    if ( $('#council-ul').css('display') == 'none')
    {
      $('#for-you-ul').css('display','none');
      $('#business-ul').css('display','none');
      $('#council-ul').css('display','block');
      $('#events-ul').css('display','none');
    } else {
      $('#council-ul').css('display','none');
    }
}
function events() {
    if ( $('#events-ul').css('display') == 'none')
    {
      $('#for-you-ul').css('display','none');
      $('#business-ul').css('display','none');
      $('#council-ul').css('display','none');
      $('#events-ul').css('display','block');
    } else {
      $('#events-ul').css('display','none');
    }
}
</script>
     
</body>
</html> 