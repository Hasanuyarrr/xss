<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS via HTTP Header Example</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 400px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Reflected XSS Example with Headers</h1>
        <div class="result">
            <?php
            $user_agent = $_SERVER['HTTP_USER_AGENT'];
            echo "<p>Your user agent is: " . $user_agent . "</p>";
            ?>
        </div>
    </div>
</body>
</html>
	
