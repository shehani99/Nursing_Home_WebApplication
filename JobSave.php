<?php
echo "hello";
if (isset($_POST["submit"])) {
    //taking value
    
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $Citizenship = $_POST['Citizenship'];
    $Address = $_POST['Address'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $ZipCode =$_POST['ZipCode'];

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
    $save = "INSERT INTO jobs VALUES('$FirstName','$LastName','$PhoneNumber','$Address','$Email','$DOB','$Citizenship','$ZipCode')";


    

    if (mysqli_query($conn, $save)) {
        echo " Data successfully entered";
    } else {
        echo "Data Not Saved" . $save . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
?>
