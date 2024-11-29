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
        $url_decoded_query = urldecode($query);
        $html_decoded_query = htmlspecialchars_decode($url_decoded_query, ENT_QUOTES);
        echo "<p>Search results for: $html_decoded_query</p>";
    }
    ?>

    <h2>HTML ve URL Encoding XSS Test</h2>
    <form method="get" action="">
        <label for="query">Input:</label>
        <input type="text" id="query" name="query">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
