<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>

    <style>
        body{
            margin:0;
        }
        .nav{
            
            margin:auto;
            
        }
        ul{
            list-style-type:none;
            margin:0;
            padding:0;
            position:fixed;
            top:0;
            left:0;
            width: 100%;
            background-color:rgba(255, 255, 255, 0.5);
            backdrop-filter:blur(10px);
            
        }
        ul li{
            display:inline;
            float:left;
            
        }

        li a{
            display:block;;
            padding:15px;
            text-decoration:none;
            background-color: #002ffe39;
            color:black;
            margin:5px;
            border-radius:5px;
            
            

        }

        li a:hover{
            display:block;;
            padding:15px;
            text-decoration:none;
            background-color: #00126039;
            color:black;
            margin:5px;
            border-radius:5px;
            
            

        }

        .container{
            margin-top:100px;
            width:100%;
        }

        .container table{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
            margin:auto;
            border:1px solid black;

        }
        .container table tr:hover{
            width:100%;
            border-collapse:collapse;
            margin-top:20px;
            margin:auto;
            border:1px solid black;
            background-color:rgb(221, 221, 221);

        }

        .container th{
            background-color:#002ffe39;
        }

        .container th, .container td{
            border:1px solid black;
            padding:10px;
            text-align:center;
            width:30%;
        }

        .main-heading{
            margin-top:100px;
            width:100%;
            text-align:center;
            
        }
        

        

        
        
    </style>

    
</head>
<body>

    <!-- Navbar -->
     <div class="nav">
        <ul class="nav-list">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="form.php">BMI Calculator</a></li>
            <li class="nav-item"><a href="history.php">History</a></li>
        </ul>
     </div>

     

     <h1 class="main-heading">BMI History</h1>


    <div class="container">
        <table>
            <tr>
                <th>Name</th>
                <th>Gender</th>
                <th>Weight</th>
                <th>Height</th>
                <th>BMI</th>
            </tr>
            <?php
                include_once 'dbc.php';

                // SQL query to fetch data 
                $sql = "SELECT * FROM bmi_data";
                $result = mysqli_query($conn, $sql);

                if(mysqli_num_rows($result)>0){
                    while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>{$row['name']}</td>
                            <td>{$row['gender']}</td>
                            <td>{$row['weight']}</td>
                            <td>{$row['height']}</td>
                            <td>{$row['bmi']}</td>
                        </tr>
                        ";
                    }
                }else{
                    echo "<tr><td colspan='4'>No data found</td></tr>";
                }

            ?>
        </table>
    </div>

    <script src="validate.js"></script>
    

   
    

</body>
</html>