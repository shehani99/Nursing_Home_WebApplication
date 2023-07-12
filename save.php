<?php
echo "hello";
if (isset($_POST["submit"])) {
    //taking value
    $Patient_ID = $_POST['Patient_ID'];
    $FirstName = $_POST['firstname'];
    $LastName = $_POST['lastname'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Address = $_POST['address'];
    $Email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $Gender = $_POST['gender'];
    $Mstatus = isset($_POST['mst']);
    $TAMC = $_POST['tmc'];
    $YM = $_POST['subject'];

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
    //insert data
    $save = "INSERT INTO patients_details VALUES('$Patient_ID','$FirstName','$LastName','$PhoneNumber','$Address','$Email','$DOB','$Gender','$Mstatus','$TAMC','$YM')";


    //update data 
    $update = " update patients_details set PhoneNumber='$PhoneNumber' , Address= '$Address' where Name='$FirstName' ";

    //delete data
    $delete = " delete from patients_details where name ='$LastName' ";

    if (mysqli_query($conn, $save)) {
        echo " Data successfully entered";
    } else {
        echo "Data Not Saved" . $save . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} elseif (isset($_POST['delete'])) {
} else {
    echo "Nothing";
}
