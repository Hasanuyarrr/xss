<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XSS Vulnerable Lab</title>
</head>
<body>
    <h1>XSS Vulnerable Lab</h1>

    <?php
    if (isset($_GET['q'])) {
        $url = $_GET['q']; 
        echo " <tag attribute=$url>";     
    } else {
        echo "<form action='' method='GET'>";
        echo "<label for='inputUrl'>Enter URL:</label>";
        echo "<input type='text' id='inputUrl' name='q'>";
        echo "<button type='submit'>Submit</button>";
        echo "</form>";
    }
    ?>
</body>
</html>
