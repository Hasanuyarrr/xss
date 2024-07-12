<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Base64 Encoded XSS Test</title>
</head>
<body>
    <h1>Base64 Encoded XSS Test</h1>

    <?php
    // Kullanıcıdan gelen veriyi almak
    $user_input = isset($_GET['input']) ? $_GET['input'] : '';

    // Base64 kodlanmış veriyi çözmek
    $decoded_input = base64_decode($user_input);

    // Çözülen veriyi sayfaya yazdırmak
    echo '<div>' . $decoded_input . '</div>';
    ?>

    <h2>Test XSS Input</h2>
    <form method="get" action="">
        <label for="input">Input:</label>
        <input type="text" id="input" name="input">
        <button type="submit">Submit</button>
    </form>
</body>
</html>
