<!DOCTYPE html>
<html>
<head>
    <title>PHP Greeting</title>
</head>
<body>
    <?php
    // Check if the form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
        // Retrieve the submitted value (i.e., the user's name)
        $name = $_POST['name'];
        // Display a personalized greeting on the page
        echo "<h1>Hello, " . $name . "! Welcome to our website.</h1>";
    
    ?>
    
    <!-- HTML form for user input -->
    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Submit</button>
    </form>
</body>
</html>