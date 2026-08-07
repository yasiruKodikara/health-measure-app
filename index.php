<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
        }
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
            background-color: rgba(247, 136, 0, 0.5);
            color:black;
            margin:5px;
            border-radius:0px 10px 0px 10px;
            
            

        }
        li a:hover{
            display:block;;
            padding:15px;
            text-decoration:none;
            background-color: #00126039;
            background-color: rgba(247, 136, 0, 0.5);
            box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.27);
            color:black;
            margin:5px;
            border-radius:0px 10px 0px 10px;
            
            

        }

        .container{
            width:100%;
        }

        h1, .main-para{
            margin:auto;
            width:60%;
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

        .sub-para, .sub-heading{
            color:black;
            width:60%;
            text-align:center;
            margin:auto;
            margin-top:50px;
            margin-bottom:50px;
        }

        .feat-sec-2{
            background-color:rgb(0, 0, 0);
            backdrop-filter:blur(10px);
            padding-top:50px;
            padding-bottom:50px;
            
        }

        .sub-heading-2, .sub-para-2{
            color:white;
            width:60%;
            text-align:center;
            margin:auto;
            margin-top:50px;
            margin-bottom:50px;
        }

        .footer{
            margin:auto;
            
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
        .footer ul li{
            display:inline;
            float:left;
            
        }

        .footer li a{
            display:block;;
            padding:15px;
            text-decoration:none;
            background-color: #002ffe39;
            color:black;
            margin:5px;
            border-radius:5px;
            
            

        }

        *{
            box-sizing:border-box;
            margin:0;
            padding:0;
        }

        .footer{
            text-align:center;
            padding:15px;
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
            <p class="main-para">We are dedicated to helping you live a healthier, happier life through quality healthcare, experienced professionals, and compassionate service. Whether you need a routine check-up or specialized treatment, we're here for you every step of the way.</p>
        </div>
     </div>
    </section>

    <section class="feat-sec">
     
        <div class="container">
            <h1 class="sub-heading">Our Services</h1>
            <p class="sub-para">Comprehensive Medical Services

                From general consultations and diagnostic testing to specialized treatments and emergency care, we offer a wide range of healthcare services designed to meet the needs of individuals and families.</p>
        </div>
     
    </section>

    <section class="feat-sec-2">
     
        <div class="container">
            <h1 class="sub-heading-2">Our Services</h1>
            <p class="sub-para-2">Comprehensive Medical Services

                From general consultations and diagnostic testing to specialized treatments and emergency care, we offer a wide range of healthcare services designed to meet the needs of individuals and families.</p>
        </div>
     
    </section>


    <div class="footer">
        <ul class="nav-list">
            <li class="nav-item"><a href="index.php">Home</a></li>
            <li class="nav-item"><a href="form.php">BMI Calculator</a></li>
            <li class="nav-item"><a href="history.php">History</a></li>
        </ul>
     </div>

     <footer class="footer">
        <p>&copy; 2026 Your Website. All Rights Reserved.</p>
    </footer>
     
</body>
</html>