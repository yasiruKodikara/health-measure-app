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

        h1{
            margin:auto;
            width:100%;
            text-align:center;
            color:black;

        }

        .hero{
            height:100vh;
            display:flex;
            justify-content:center;
            align-items:center;

            background:
                linear-gradient(rgba(255, 255, 255, 0.09), rgba(255,255,255,0.7)),
                url("https://wallpaperaccess.com/full/1319725.jpg");

            background-size:cover;
            background-position:center;
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


    <div class="container">
        <h1 class="text-center mt-5">BMI Calculator</h1>
        <form class="w-50 mx-auto mt-5" action="save_data.php" method="POST" novalidate>
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control">
                <small class="form-text  text-danger"></small>
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight (kg)</label>
                <input type="number" id="weight" name="weight" class="form-control">
                <small class="form-text  text-danger"></small>
            </div>
            <div class="mb-3">
                <label for="height" class="form-label">Height (cm)</label>
                <input type="number" id="height" name="height" class="form-control">
                <small class="form-text  text-danger"></small>
            </div>

            <div class="mb-3">
                <label for="bmi" class="form-label">BMI</label>
                <input type="text" id="bmi" name="bmi" class="form-control" readonly>
                
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="text" id="status" name="status" class="text-center form-control" readonly>
                
            </div>
            <button type="submit" class="btn btn-primary w-100">
                Calculate BMI
            </button>
        </form>
    </div>

    <script src="validate.js"></script>
    

    

</body>
</html>