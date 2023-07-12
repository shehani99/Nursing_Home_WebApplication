<?php

if (isset($_GET["Patient_ID"])) {
    //taking value
    $Patient_ID = $_GET['Patient_ID'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "hospital";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //delete data
    $delete = "DELETE FROM patients_details WHERE Patient_ID = $Patient_ID";

    if (mysqli_query($conn, $delete)) {
        echo " Data successfully deleted";
    } else {
        echo "Data Not Saved" . $delete . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
} else {
    echo "Nothing";
}
?>
