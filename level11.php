<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Results</title>
</head>
<body>
    <h1>Search Results</h1>

    <?php
    if (isset($_GET['query'])) {
        // Kullanıcıdan gelen veriyi decode et
        $query = $_GET['query'];
        $decoded_query = base64_decode(htmlspecialchars_decode($query, ENT_QUOTES));
        echo "<p>Search results for: $decoded_query</p>";
    }
    ?>

    <h2>Base64 ve HTML Encoding XSS Test</h2>
    <form method="get" action="">
        <label for="query">Input:</label>
        <input type="text" id="query" name="query">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
