<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>XSS Vulnerability Test</title>
</head>
<body>
    <?php
    // Kullanıcıdan gelen veriyi almak
    $user_input = isset($_GET['input']) ? $_GET['input'] : '';

    // HTML etiketleri ile XSS örnekleri

    // <img> etiketi ile XSS örnekleri
    echo '<h2>IMG Tag XSS Examples</h2>';
    echo '</br><p>Example 1: <img src="' . $user_input . '"></p>'; // javascript: protokolü
    echo '<p>Example 2: <img src="' . $user_input . '"></p>'; // data: protokolü
    echo '<p>Example 3: <img src="' . $user_input . '"></p>'; // vbscript: protokolü

    // <a> etiketi ile XSS örnekleri
    echo '<h2>A Tag XSS Examples</h2>';
    echo '<p>Example 4: <a href="' . $user_input . '">Click me</a></p>'; // javascript: protokolü
    echo '<p>Example 5: <a href="' . $user_input . '">Click me</a></p>'; // data: protokolü
    echo '<p>Example 6: <a href="' . $user_input . '">Click me</a></p>'; // vbscript: protokolü

    // <script> etiketi ile XSS örnekleri
    echo '<h2>Script Tag XSS Examples</h2>';
    echo '<p>Example 7: <script>' . $user_input . '</script></p>'; // javascript: protokolü
    echo '<p>Example 8: <script>' . $user_input . '</script></p>'; // data: protokolü
    echo '<p>Example 9: <script>' . $user_input . '</script></p>'; // vbscript: protokolü
    ?>

    <h2>Test XSS Input</h2>
    <form method="get" action="">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
