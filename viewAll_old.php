<!DOCTYPE html>
<html>
<head>
	<title>Patient_details</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

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
            margin-left: 800px;
            /* this should be the same width as the parent list item */
            margin-top: -35px;
            /* aligns top of sub menu with top of list item */
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
<img  src ="image1.jpg" alt="Trulli" style="width:20%"></center>
<br><br>
<ul id="nav">
        <li><a href="home.html">Home</a></li>
        <li><a href="aboutus.html">About</a></li>
         <li><a href="contactus.html">Contact Us </a>
      
				
    </ul>  

      
    
	
<br><br><br>























<div class="card-body">
    <table class="table col-lg-6" id="table">

        <tr>
            <th>Patient ID</th>
            <th>First Name</th>
            <!-- <th data-field="price">Status</th> -->
            <th>Address</th>
            <th>ADD</th>
            <th>EDIT</th>
            <th>DELETE</th>
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
        $sql1 = "SELECT Patient_ID,FirstName,Address FROM patients_details";
        $res = $conn->query($sql1);

        // if ($res->num_rows > 0) {
        while ($table = $res->fetch_assoc()) {
            echo '
        <tr>
            <td>' . $table["Patient_ID"] . '</td>
            <td>' . $table["FirstName"] . '</td>            
            <td>' . $table["Address"] . '</td>

            
            <td>
            
              <button type="button" class="btn btn-primary">
            <label>Add</label> 
        </button>
            </td>
             <td>
               <form action="update.php" method="post">
            <input name="FirstName" type="hidden" value="' . $table["FirstName"] . '">            
            <input name="Address" type="hidden" value="' . $table["Address"] . '">
                <button type="submit" name="submit">
                <label>Edit</label> 
                </button>
              
                </form>
            </td>
            <td>

            <form action="delete.php" method="post">
            <input name="patID" type="hidden" value="' . $table["Patient_ID"] . '">
                <button type="submit" name="submit">
                <label>Delete</label> 
                </button>
                </form>
</td>';
            // </tr>';
            // }
        } ?>


    </table>
</div>















<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Nawaloka Hospital <span>(PLC).</span></h3>

				<p class="footer-links">
					<a href="home.html">Home</a>
					·
					<a href="aboutus.html">About</a>
					·
					
					<a href="contactus.html">Contact Us</a>
				</p>

				<p class="footer-company-name">#Nawaloka Hospitals PLC, Colombo 2,Sri Lanka.</P>
<p class="footer-company-name"> Care is just a phone call away   +94 (0) 11 2430393</P>
<p class="footer-company-name"> nawaloka@slt.lk</p>

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
					<button>Send</button>

				</form>
			</div>
			


		</footer>