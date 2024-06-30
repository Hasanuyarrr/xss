<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOM XSS via POST Request Example</title>
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
        <h1>DOM XSS Example with POST Request</h1>
        <form id="commentForm" method="POST" action="#">
            <label for="comment">Enter your comment:</label>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
        <div class="comments">
            <h2>Comments:</h2>
            <div id="commentSection"></div>
        </div>
    </div>
    <script>
        document.getElementById('commentForm').addEventListener('submit', function(event) {
            event.preventDefault();
            var comment = document.getElementById('comment').value;
            document.getElementById('commentSection').innerHTML += "<div class='comment'>" + comment + "</div>";
        });
    </script>
</body>
</html>
