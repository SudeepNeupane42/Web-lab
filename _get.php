<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Handling with PHP</title>
</head>
<body>
    <form method="GET" action="">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if (isset($_GET['name']) && isset($_GET['age'])) {
        $name = htmlspecialchars($_GET['name']); // "John"
        $age = htmlspecialchars($_GET['age']);   // "25"
        echo "<p>Name: $name, Age: $age</p>";
    }
    ?>
</body>
</html>