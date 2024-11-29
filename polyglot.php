<!DOCTYPE html>
<html>
<head>
    <title>XSS Test Cases</title>
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
        <label for="input4">Input 4:</label>
        <input type="text" id="input4" name="input4">
        <br>
        <label for="input5">Input 5:</label>
        <input type="text" id="input5" name="input5">
        <br>
        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_GET['input1']) && isset($_GET['input2']) && isset($_GET['input3']) && isset($_GET['input4']) && isset($_GET['input5'])) {
        $input1 = $_GET['input1'];
        $input2 = $_GET['input2'];
        $input3 = $_GET['input3'];
        $input4 = $_GET['input4'];
        $input5 = $_GET['input5'];

        // Test Case 1: HTML context
        echo "<div>Test Case 1: " . $input1 . "</div>";

        // Test Case 2: JavaScript context
        echo "<script>var x = '" . $input2 . "';</script>";

        // Test Case 3: Attribute context
        echo "<img src='$input3' >";

        // Test Case 4: Inside a style tag
        echo "<style>body {background: url('$input4');}</style>";

        // Test Case 5: Inside an event handler
        echo "<button onclick='$input5'>Click me</button>";
    }
    ?>
</body>
</html>
