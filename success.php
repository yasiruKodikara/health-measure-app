
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Success</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4e54c8, #8f94fb);
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.2);
            padding: 30px;
            width: 100%;
            max-width: 600px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 10px;
        }

        p {
            color: #666;
            margin: 8px 0;
        }

        .details {
            margin-top: 20px;
            text-align: left;
            background: #f8f9ff;
            padding: 15px;
            border-radius: 10px;
        }

        .details p {
            margin: 6px 0;
        }

        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 16px;
            background: #4e54c8;
            color: white;
            text-decoration: none;
            border-radius: 8px;
        }

        .btn:hover {
            background: #3c43b5;
        }
    </style>
</head>
<body>
    <div class="card">
        <h2>Data Collected Successfully!</h2>
        <p>Your information has been received.</p>

        

        <a class="btn" href="form.php">Back</a>
    </div>
</body>
</html>