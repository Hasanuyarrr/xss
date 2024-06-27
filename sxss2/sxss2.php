<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stored XSS Example with Limited Payloads</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: cover;
            background-position: center;
            font-family: Arial, sans-serif;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 600px;
        }
        .comments {
            margin-top: 20px;
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
        <h1>Stored XSS Example with Limited Payloads</h1>
        <form method="POST" action="sxss2.php">
            <label for="comment">Enter your comment:</label>
            <textarea id="comment" name="comment" rows="4" cols="50"></textarea>
            <br>
            <input type="submit" value="Submit">
        </form>
        <div class="comments">
            <h2>Comments:</h2>
            <?php
            $file = 'comments.txt';

            if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['comment'])) {
                // Kullanıcı girdisini filtreleme ve bazı etiketlere izin verme
                $comment = $_POST['comment'];

                // Güvenli etiketler listesi
                $allowed_tags = '<b><i><u><em><strong><iframe>';

                // İzin verilen etiketler dışındaki etiketleri temizle
                $comment = strip_tags($comment, $allowed_tags);

                // Dosyaya yorum ekleme
                file_put_contents($file, $comment . "\n", FILE_APPEND);
            }

            if (file_exists($file)) {
                $comments = file($file, FILE_IGNORE_NEW_LINES);
                foreach ($comments as $comment) {
                    // Kullanıcı yorumunu güvenli bir şekilde görüntüleme
                    echo "<div class='comment'>" . $comment . "</div>";
                }
            }
            ?>
        </div>
    </div>
</body>
</html>
