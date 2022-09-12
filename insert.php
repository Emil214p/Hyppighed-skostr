<?php
include_once 'login.php';
if(isset($_POST['submit']))
{    
     $Navn = $_POST['Navn'];
     $Email = $_POST['Email'];
     $Alder = $_POST['Alder'];
     $Skostoerelse = $_POST['Skostoerelse'];
     $sql = "INSERT INTO skostoerrelse (Navn,Email,Alder,Skostoerelse)
     VALUES ('$Navn','$Email','$Alder','$Skostoerelse')";
     if (mysqli_query($conn, $sql)) {
        echo "New record has been added successfully !";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>