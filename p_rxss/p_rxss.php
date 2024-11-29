<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reflected XSS via POST Request Example</title>
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
        <h1>Reflected XSS via POST Request Example</h1>
        <form method="POST" action="">
            <label for="name">Enter your name:</label>
            <input type="text" id="name" name="name">
            <br>
            <input type="submit" value="Submit">
        </form>
        <div class="result">
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['name'])) {
                $name = $_POST['name'];
                echo "<p>Hello, " . $name . "!</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>
