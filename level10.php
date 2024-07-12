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
        $query = htmlspecialchars_decode($_GET['query'], ENT_QUOTES);
        echo "<p>Search results for: $query</p>";
    }
    ?>

    <h2>HTML Encoded XSS Test</h2>
    <form method="get" action="">
        <label for="query">Input:</label>
        <input type="text" id="query" name="query">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
