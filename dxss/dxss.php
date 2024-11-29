<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS Example</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
        }
        .container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            max-width: 600px;
            width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>DOM XSS Example</h1>
        <p id="message">Your message will appear here.</p>
    </div>
    <script>
        // URL parametrelerini al
        const urlParams = new URLSearchParams(window.location.search);
        const message = urlParams.get('message');

        // Mesajı doğrudan DOM'a ekle
        if (message) {
            document.getElementById('message').innerHTML = message;
        }
    </script>
</body>
</html>
