<!DOCTYPE html>
<html>
<head>
    <title>NoScript XSS Test Cases</title>
</head>
<body>
    <form method="get">
        <label for="input1">Input 1:</label>
        <input type="text" id="input1" name="input1">
        <br>
        <label for="input2">Input 2:</label>
        <input type="text" id="input2" name="input2">
        <br>
        <label for="input3">Input 3:</label>
        <input type="text" id="input3" name="input3">
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['input1']) && isset($_GET['input2']) && isset($_GET['input3'])) {
        $input1 = $_GET['input1'];
        $input2 = $_GET['input2'];
        $input3 = $_GET['input3'];

        // Test Case 1: <noscript> context
        echo "<noscript>" . $input1 . "</noscript>";

        // Test Case 2: <iframe> context
        echo "<iframe src='" . $input2 . "'></iframe>";

        // Test Case 3: <link> context
        echo "<link rel='icon' href='" . $input3 . "'>";
    }
    ?>
</body>
</html>
