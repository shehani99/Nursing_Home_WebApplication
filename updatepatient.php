<!DOCTYPE html>
<html>
<head>
<title>contact us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>



body {

           font-family: sans-serif;
            font-size: 12px;
            margin: 0px auto;
            padding:0px;
}

* {
  box-sizing: border-box;
}

  #nav {
            list-style: none inside;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        #nav li {
            display: block;
            position: relative;
            float: left;
            background: DarkCyan;
           
            /* menu background color */
        }

        #nav li a {
            display: block;
            padding-top: 3px;
            text-decoration: none;
            width: 189px;
            /* this is the width of the menu items */
            line-height: 35px;
            /* this is the hieght of the menu items */
            color: #ffffff;
            /* list item font color */
        }

        #nav li li a {
            font-size: 85%;
        }

        /* smaller font size for sub menu items */

        #nav li:hover {
            background: gray;
        }

        /* highlights current hovered list item and the parent list items when hovering over sub menues */

        #nav ul {
            position: absolute;
            padding: 0;
            left: 0;
            display: none;
            /* hides sublists */
        }

        #nav li:hover ul ul {
            display: none;
        }

        /* hides sub-sublists */

        #nav li:hover ul {
            display: block;
        }

        /* shows sublist on hover */

        #nav li li:hover ul {
            display: block;
            /* shows sub-sublist on hover */
            margin-left: 500px;
            /* this should be the same width as the parent list item */
            margin-top: -35px;
            /* aligns top of sub menu with top of list item */
        }


h1{
  margin: 60px;
  border: 1px solid black;
  background-image:url( "banner8.jpg");
  padding: 60px;
  font-size: 28px;
  color: blue;
}


/* Create two equal columns that floats next to each other */
.column {
  float: left;
  width: 50%;
  padding: 40px;
  height: 1040px; /* Should be removed. Only for demonstration */
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


input[type=number], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=email], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #2e8b57;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #86C5DA;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}




address{

 font-size:14px;
 font-weight:2px;
}

p{

 font-size:14.7px;
 
}

email{

 font-size:14px;
 font-weight:2px;
}



/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}












@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);

* {
  font-family: Roboto;
}

.footer-distributed{
	background: PowderBlue;
	box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
	box-sizing: border-box;
	width: 100%;
	font: bold 16px sans-serif;
	text-align: left;
	padding: 50px 60px 40px;
	overflow: hidden;
}

section {
  width: 100%;
  display: inline-block;
  background: #ccc;
  height: 60vh;
  text-align: center;
  font-size: 22px;
  font-weight: 700;
  text-decoration: underline;
}


/* Footer left */

.footer-distributed .footer-left{
	float: left;
}

/* The company logo */

.footer-distributed h3{
	color:  black;
	font: normal 36px 'Roboto', cursive;
	margin: 0 0 10px;
}

.footer-distributed h3 span{
	color:  #5383d3;
}

/* Footer links */

.footer-distributed .footer-links{
	color:  black;
	margin: 0 0 10px;
	padding: 0;
}

.footer-distributed .footer-links a{
	display:inline-block;
	line-height: 1.8;
	text-decoration: none;
	color:  inherit;
}

.footer-distributed .footer-company-name{
	color:  black;
	font-size: 14px;
	font-weight: normal;
	margin: 0;
}

/* Footer social icons */

.footer-distributed .footer-icons{
	margin-top: 40px;
}

.footer-distributed .footer-icons a{
	display: inline-block;
	width: 35px;
	height: 35px;
	cursor: pointer;
	background-color:  #33383b;
	border-radius: 2px;

	font-size: 20px;
	color: #ffffff;
	text-align: center;
	line-height: 35px;

	margin-right: 3px;
	margin-bottom: 5px;
}

/* Footer Right */

.footer-distributed .footer-right{
	float: right;
}

.footer-distributed .footer-right p{
	display: inline-block;
	vertical-align: top;
	margin: 15px 42px 0 0;
	color: black;
}

/* The contact form */

.footer-distributed form{
	display: inline-block;
}

.footer-distributed form input,
.footer-distributed form textarea{
	display: block;
	border-radius: 3px;
	box-sizing: border-box;
	background-color:  #1f2022;
	box-shadow: 0 1px 0 0 rgba(255, 255, 255, 0.1);
	border: none;
	resize: none;

	font: inherit;
	font-size: 14px;
	font-weight: normal;
	color:  #d1d2d2;

	width: 400px;
	padding: 18px;
}

.footer-distributed ::-webkit-input-placeholder {
	color:  white;
}

.footer-distributed ::-moz-placeholder {
	color:  #5c666b;
	opacity: 1;
}

.footer-distributed :-ms-input-placeholder{
	color:  #5c666b;
}


.footer-distributed form input{
	height: 55px;
	margin-bottom: 15px;
}

.footer-distributed form textarea{
	height: 100px;
	margin-bottom: 20px;
}

.footer-distributed form button{
	border-radius: 3px;
	background-color:  #33383b;
	color: #ffffff;
	border: 0;
	padding: 15px 50px;
	font-weight: bold;
	float: right;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 1000px) {

	.footer-distributed {
		font: bold 14px sans-serif;
	}

	.footer-distributed .footer-company-name{
		font-size: 12px;
	}

	.footer-distributed form input,
	.footer-distributed form textarea{
		width: 250px;
	}

	.footer-distributed form button{
		padding: 10px 35px;
	}

}

@media (max-width: 800px) {

	.footer-distributed{
		padding: 30px;
	}

	.footer-distributed .footer-left,
	.footer-distributed .footer-right{
		float: none;
		max-width: 300px;
		margin: 0 auto;
	}

	.footer-distributed .footer-left{
		margin-bottom: 40px;
	}

	.footer-distributed form{
		margin-top: 30px;
	}

	.footer-distributed form{
		display: block;
	}

	.footer-distributed form button{
		float: none;
	}
}

















</style>
</head>
<body>

<center>
<img  src ="images.png" alt="Trulli" style="width:10%"><img  src ="21765282_214818732387609_7698533422210261908_n.jpg" alt="Trulli" style="width:20%"></center>
<br><br>
<ul id="nav">
        <li><a href="Home.html">Home</a></li>
		<li><a href="about.html">About</a></li>
		<li><a href="covid.html">COVID-19</a></li>
        <li><a href="home-nursing-services.html">Home Nursing Services </a>
            <ul>
                <li><a href="industrial-nursing-services.html">Industrial Nursing Services</a></li>
                <li><a href="baby-care-nursing.html">Baby Care Nursing</a></li>
                <li><a href="jobs.html">Jobs »</a>
                    <ul>
                        <li><a href="jobsinhala.html">JobsSinhala</a>
                            <li><a href="jobtamil.html">jobsTamil</a>
                    </ul>
                    </li>
            </ul>
            </li>
            <li><a href="elders.html">Elders Home</a></li>
			<li><a href="ambulance.html">Ambulance</a></li>
			<li><a href="medicalequipment.html">Medical Equipment</a></li>
	       <li><a href="contactus.html">Contact Us </a>
            <ul>
			<li><a href="viewAll.php">Patients</a></li>
                <li><a href="membership.html">Membership</a></li><ul>
    </ul>   </ul>   </ul>   

      


<h1><center>Update Contact Us </center></h1>


  <div class="row">
      <div class="column" style="background-color: #c0c0c0">
        <h2>PATIENT REGISTRAION DETAILS</h2>
        <div class="container">
	<?php
   $Patient_ID = $_POST['Patient_ID'];
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Address = $_POST['Address'];
    $Email = $_POST['Email'];
    //$DOB = $_POST['DOB'];
    //$Gender = $_POST['gender'];
    //$Mstatus = isset($_POST['mst']);
    // $TAMC = $_POST['tmc'];
    //$YM = $_POST['subject'];

	?>
          <form action="update.php" method="post">
            <div class="row">
              <div class="col-25">
                <label for="Patient_ID">PATIENT_ID</label>
              </div>
              <div class="col-75">
	<?php echo '
                <input
                  type="text"
                  id="Patient_ID"
                  name="Patient_ID"
                  placeholder="Your ID.."
	value="'.$Patient_ID.'"
                />
	'?>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="fname">FIRST NAME</label>
              </div>
              <div class="col-75">
                <?php echo '
		<input
                  type="text"
                  id="fname"
                  name="FirstName"
                  placeholder="Your name.."
		value="'.$FirstName.'"
                />'?>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="lname">LAST NAME</label>
              </div>
              <div class="col-75">
                <?php echo '
	<input
                  type="text"
                  id="lname"
                  name="lastname"
                  placeholder="Your last name.."
value="'.$LastName.'"
                />
	'?>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="PhoneNumber">PHONE NUMBER</label>
              </div>
              <div class="col-75">
                 <?php echo '
                <input
                  type="number"
                  name="PhoneNumber"
                  placeholder="Your Phone Number.."
         value="'.$PhoneNumber.'"
                />
	'?>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="Address">ADDRESS</label>
              </div>
              <div class="col-75">
             <?php echo '
                <input
                  type="text"
                  name="Address"
                  placeholder="Your Current Address"
	  value="'.$Address.'"
                />
	'?>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="email">EMAIL</label>
              </div>
              <div class="col-75">
	<?php echo '
                <input
                  type="email"
                  name="email"
                  placeholder="Your email address.."
	value="'.$Email.'"
                />
	'?>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="birthdaytime">Birthday</label>
              </div>
              <div class="col-75">
	
                <input
                  type="datetime-local"
                  name="DOB"
                  placeholder="Your Date of birth.."
                />
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="Gender">GENDER</label>
              </div>
              <div class="col-75">
                <input type="radio" id="gender" name="gender" value="M" />
                  <label for="Gendar">Male</label><br />
                <input type="radio" id="gender" name="gender" value="F" />
                  <label for="html">Female</label><br />
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="status">Marital Status:</label>
              </div>

              <div class="col-75">
                <select id="status">
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="divourced">Divourced</option>
                  <option value="separated">Legally Seperated</option>
                </select>
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="medicine">Taking any medications, currently?</label>
              </div>
              <div class="col-75">
                <input type="radio" id="medicine" name="accept" value="yes" />
                  <label for="medicine">Yes</label><br />
                <input type="radio" id="medicine" name="reject" value="no" />
                  <label for="medicne">No</label><br />
              </div>
            </div>

            <div class="row">
              <div class="col-25">
                <label for="subject">YOUR MESSAGE</label>
              </div>
              <div class="col-75">
                <textarea
                  id="subject"
                  name="subject"
                  placeholder="Write something.."
                  style="height: 200px"
                ></textarea>
              </div>
            </div>

            <div class="row">
              
              <input type="submit" name="submit" value="update" />
           
            </div>
          </form>
        </div>
      </div>

      

  <div class="column" style="background-color: #a9a9a9">
    <h2>CONTACT INFORMATION</h2>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3961.237951666511!2d79.92770261472019!3d6.862060995041104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae250861a59c587%3A0x13a9b0070a581b68!2sRoyal%20Nursing%20Care%20Center!5e0!3m2!1sen!2slk!4v1647109213776!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>


<p>24 Hours Helpline 0711 600 600,   011 2 80 40 40​​</p>
​
<h2>Royal Nursing Home (Pvt)Ltd.</h2>
<address> # 35 Devananda Road, Nawinna Maharagama</address> 

<h2>Head Office</h2>
<address> # 44 Devananda Road,
Nawinna Maharagama</address>
<p>Telephone - 0112804040</p>

<h2>City Office</h2>
<address> # 32 Ward Place, Colombo 07 </address>
<p>Telephone - 0711 600 600</p>

<h2>Emergency Management</h2>
<address># 491 Highlevel Road
Wijerama, Nugegoda</address>
<p>Telephone - 0114960194</p>

<h2>E-mail</h2>  
<email>mail@royalnursinghome.com</email>
  </div>
</div>


<br><br><br><br><br>




  
<footer class="footer-distributed">

			<div class="footer-left">

				<h3>ROYAL NURSING HOME <span>(PVT)LTD.</span></h3>

				<h4 class="footer-links">
					<a href="Home.html">Home</a>
					·
					<a href="about.html">About</a>
					·
					<a href="covid.html">COVID-19</a>
					·
					<a href="home-nursing-services.html">Home Nursing Services</a>
					·
					<a href="elders.html">Elders Home</a>
					·
					<a href="ambulance.html">Ambulance</a>
					·
					<a href="medicalequipment.html">Medical Equipment</a>
					·
					
					<a href="contactus.html">Contact Us</a>
				</h4>

				<p class="footer-company-name"># 35 Devananda Road, Nawinna Maharagama</P>
<p class="footer-company-name"> Care is just a phone call away   011 2 80 40 40</P>
<p class="footer-company-name"> Copyright @ 2007 Royal Nursing Home(Pvt)Ltd. mail@royalnursinghome.com</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/royalnursing/"><i class="fa fa-facebook"></i></a>
					<a href="https://twitter.com/royal_nursing"><i class="fa fa-twitter"></i></a>
					<a href="https://www.linkedin.com/in/waruna-atapattu-36380a121/?originalSubdomain=lk"><i class="fa fa-linkedin"></i></a>
					
				</div>

			</div>

			<div class="footer-right">

				<p>Contact Us</p>

				<form action="#" method="post">

					<input type="text" name="email" placeholder="Email">
					<textarea name="message" placeholder="Message"></textarea>
					<button type="submit">Send</button>

				</form>
				
			</div>
			
			<div class="footer-right">
<a href="payment.html"><img src="pay_online_button_d200.png" alt="Trulli"></a> 	</div>

		</footer>







</body>
</html>






















