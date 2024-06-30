<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored XSS via GET Request Example</title>
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
        .comment {
            background-color: #f0f0f0;
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Stored XSS via Get Request Example</h1>
        <form method="GET" action="g_sxss.php">
            <label for="comment">Enter your comment:</label>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
        <div class="comments">
            <h2>Comments:</h2>
            <?php
            $file = 'comments.txt';

            if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['comment'])) {
                $comment = $_GET['comment'];
                file_put_contents($file, $comment . "\n", FILE_APPEND);
            }

            if (file_exists($file)) {
                $comments = file($file, FILE_IGNORE_NEW_LINES);
                foreach ($comments as $comment) {
                    echo "<div class='comment'>" . $comment . "</div>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
