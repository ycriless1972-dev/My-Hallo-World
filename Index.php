<?php
$title = "Hello World!";
$message = "Welcome to my colourful PHP web app!";
$year = date("Y");
?>

<!DOCTYPE html>
<html>
<head>
    <title><?php echo $title; ?></title>

    <style>
        body {
            margin: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #ff6b6b, #4ecdc4, #556270);
            background-size: 300% 300%;
            animation: backgroundMove 8s infinite alternate;
            color: white;
        }

        .card {
            text-align: center;
            background: rgba(0, 0, 0, 0.35);
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0 0 30px rgba(255,255,255,0.4);
        }

        h1 {
            font-size: 60px;
            text-shadow: 3px 3px 10px black;
        }

        p {
            font-size: 24px;
        }

        .button {
            display: inline-block;
            margin-top: 20px;
            padding: 15px 30px;
            background: #ffcc00;
            color: #222;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: 0.3s;
        }

        .button:hover {
            background: white;
            transform: scale(1.1);
        }

        @keyframes backgroundMove {
            from {
                background-position: left;
            }
            to {
                background-position: right;
            }
        }
    </style>
</head>
<body>

    <div class="card">
        <h1><?php echo $title; ?></h1>
        <p><?php echo $message; ?></p>
        <p>Current year: <?php echo $year; ?></p>
        <a href="#" class="button">Click Me!</a>
    </div>

</body>
</html>
