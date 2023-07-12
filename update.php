<?php

if (isset($_POST["submit"])) {
    //taking value
    $Patient_ID = $_POST['Patient_ID'];
    $FirstName = $_POST['FirstName'];
     $LastName = $_POST['lastname'];
     $PhoneNumber = $_POST['PhoneNumber'];
    $Address = $_POST['Address'];
    // $Email = $_POST['email'];
    // $DOB = $_POST['DOB'];
    // $Gender = $_POST['gender'];
    // $Mstatus = isset($_POST['mst']);
    // $TAMC = $_POST['tmc'];
    // $YM = $_POST['subject'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "conn success";

    //update data 
    //$update = " update patients_details set Address= '$Address' where Name='$FirstName' ";
    $update = " update patients_details set 
			Address= '$Address',
			FirstName='$FirstName',
			LastName='$LastName',
			PhoneNumber='$PhoneNumber' where Patient_ID='$Patient_ID' ";

    if (mysqli_query($conn, $update)) {
        echo " Data successfully updated";
        
    } else {
        echo "Data Not Saved" . $update . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Nothing";
}
