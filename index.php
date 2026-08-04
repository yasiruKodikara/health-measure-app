<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

        .container{
            width:100%;
        }

        h1{
            margin:auto;
            width:100%;
            text-align:center;
            color:white;

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

        .sub-heading{
            color:black;
            margin-top:50px;
            margin-bottom:50px;
        }

        .footer{
            margin:auto;
            position:fixed;
            bottom:0;
            left:0;
            width: 100%;
            background-color:rgba(255, 255, 255, 0.5);
            backdrop-filter:blur(10px);
            
        }

        .footer ul{
            list-style-type:none;
            margin:0;
            padding:0;
            position:fixed;
            bottom:0;
            left:0;
            width: 100%;
            background-color:rgba(255, 255, 255, 0.5);
            backdrop-filter:blur(10px);
            
        }

        *{
            box-sizing:border-box;
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

     <section class="hero-sec">
     <div class="hero">
        <div class="container">
            <h1 class="main-heading">Your Health, Our Priority</h1>
        </div>
     </div>
    </section>

    <section class="feat-sec">
     
        <div class="container">
            <h1 class="sub-heading">Our Services</h1>
        </div>
     
    </section>


    <div class="footer">
        <ul class="nav-list">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="form.php">BMI Calculator</a></li>
            <li class="nav-item"><a href="history.php">History</a></li>
        </ul>
     </div>
     
</body>
</html>