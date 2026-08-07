<?php
    include_once 'dbc.php';

    $name = $_POST["name"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $bmi = $_POST['bmi'];
    $gender = $_POST["gender"];

    $sql = "INSERT INTO bmi_data (name,gender,height,weight,bmi) VALUES('$name','$gender','$height','$weight','$bmi');";

    $result = mysqli_query($conn,$sql);

    header("Location: success.php?success=1&name=$name&weight=$weight&height=$height");
    
    mysqli_close($conn);
?>