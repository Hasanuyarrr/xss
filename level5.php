<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Vulnerable Lab</title>
    <style>
        :root {
            --text-color: black; /* Varsayılan değeri tanımlayın */
        }
        body {
            color: var(--text-color);
        }
    </style>
</head>
<body>
    <h1>XSS Vulnerable Lab</h1>

    <?php
    if (!isset($_GET['color'])) {
        header("Location: level5.php?color=a");
        exit();
    }
    
    $color = $_GET['color'];
    echo "<style>:root { --text-color: $color; }</style>";
    ?>
</body>
</html>
