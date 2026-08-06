<?php
    include_once 'dbc.php';

    $name = $_POST["name"];
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $bmi = $_POST['bmi'];

    $sql = "INSERT INTO bmi_data (name,height,weight,bmi) VALUES('$name','$height','$weight','$bmi');";

    $result = mysqli_query($conn,$sql);

    header("Location: success.php?success=1&name=$name&weight=$weight&height=$height");
    
    mysqli_close($conn);
?>