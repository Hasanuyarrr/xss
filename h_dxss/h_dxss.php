<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS via HTTP Header Example</title>
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
        <h1>DOM XSS Example with Headers</h1>
        <div class="comments">
            <h2>User Agent:</h2>
            <div id="userAgentSection"></div>
        </div>
    </div>
    <script>
        var userAgent = "<?php echo $_SERVER['HTTP_USER_AGENT']; ?>";
        document.getElementById('userAgentSection').innerHTML = "<div class='comment'>" + userAgent + "</div>";
    </script>
</body>
</html>
