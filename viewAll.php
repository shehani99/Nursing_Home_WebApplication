
<!DOCTYPE html>
<html>
  <head>
    <title>contact us</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <style>
      body {
        font-family: sans-serif;
        font-size: 12px;
        margin: 0px auto;
        padding: 0px;
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
            width: 188px;
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


     
table, td, th {
  border: 1px solid;
}

table {
  width: 100%;
  border-collapse: collapse;
}

td {
  height: 50px;
  vertical-align: bottom;
}



.btn2{
  background-color: #008CBA;
  border: none;
  color: white;
border-radius: 12px;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.btn2:hover {
  background-color: blue;
  color: white;
}

.btn3 {
  background-color: red; 
  border: none;
  color: white;
  padding: 10px 15px;
border-radius: 12px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

.btn3:hover {
  background-color: #800000;
  color: white;
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

#btn1{
background-color: DarkCyan;
  border: none;
border-radius: 12px;
  color: white;
  padding: 10px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

#btn1:hover {
  background-color: #4CAF50;
  color: white;
}
.column {
  float: left;
  width: 50%;
  padding: 40px;
  height: 1040px; /* Should be removed. Only for demonstration */
}


#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 5px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: DarkCyan;
  color: white;
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
	       <li><a href="index.html">Contact Us </a>
            <ul>
<li><a href="viewAll.php">Patients</a></li>
                <li><a href="membership.html">Membership</a></li><ul>
    </ul>   </ul>   </ul>    


   
<h1><center> Details View </center></h1>

  <br><br><br>


<div id="btn1">
<a href="index.html"><button type="submit">+</a></button>

                
</div>
<div id="customers">


    <table >

        <tr>
            <th>Patient ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Email</th>
            <th>Birthday</th>
           <th>Gender</th>
            <th>Marital Status</th>
            <th>Taking any medications?</th>
            <th>Your message </th>
		<th>Action</th>
            
           
        </tr>

        <!-- <tr> -->
        <?php

        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "hospital";

        $conn = mysqli_connect($servername, $username, $password, $dbname);

        // Check connection
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        $sql1 = "SELECT Patient_ID,FirstName,LastName,PhoneNumber,Address,Email,Birthday,Gender,MaritalStatus,Taking_any_medication_currently,YourMessage FROM patients_details";
        $res = $conn->query($sql1);

         //if ($res->num_rows > 0) {
        while ($table = $res->fetch_assoc()) {
            echo '
        <tr>
            <td>' . $table["Patient_ID"] . '</td>
            <td>' . $table["FirstName"] . '</td>            
            <td>' . $table["LastName"] . '</td>
           <td>' . $table["PhoneNumber"] . '</td>
           <td>' . $table["Address"] . '</td>
           <td>' . $table["Email"] . '</td>
            <td>' . $table["Birthday"] . '</td>            
            <td>' . $table["Gender"] . '</td>
            <td>' . $table["MaritalStatus"] . '</td>
            <td>' . $table["Taking_any_medication_currently"] . '</td>            
            <td>' . $table["YourMessage"] . '</td>
             <td>
	<form action="updatepatient.php" method="post">
		<input name="Patient_ID" type="hidden" value="' . $table["Patient_ID"] . '">  
		<input name="FirstName" type="hidden" value="' . $table["FirstName"] . '">            
		<input name="LastName" type="hidden" value="' . $table["LastName"] . '">
		<input name="PhoneNumber" type="hidden" value="' . $table["PhoneNumber"] . '">
		<input name="Address" type="hidden" value="' . $table["Address"] . '">
		<input name="Email" type="hidden" value="' . $table["Email"] . '">
		<input name="MaritalStatus" type="hidden" value="' . $table["MaritalStatus"] . '">
		<input name="Taking_any_medication_currently" type="hidden" value="' . $table["Taking_any_medication_currently"] . '">
		<input name="YourMessage" type="hidden" value="' . $table["YourMessage"] . '">

		<button type="submit" name="submit" class="btn2">
			<label>Edit</label>
		</button>

		
	</form>
	<button name="delete" class="btn3" onclick="window.location.href=\'delete.php?Patient_ID=' . $table["Patient_ID"] . '\'">
			Delete
		</button>
</td>
           
          </tr>';
}
?>
         
    </table>
</div>   


            

          



<br><br><br><br><br><br><br><br>




  
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
























