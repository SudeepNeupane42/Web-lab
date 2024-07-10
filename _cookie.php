<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie Handling with PHP</title>
</head>
<body>
    <?php
    // Set first cookies
    $cookieName = "user";
    $cookieValue = "Tika Ram Khojwar";
    setcookie($cookieName, $cookieValue, time() + (86400 * 30), "/"); // Set cookie for 30 days

    // Set second cookies
    $cookieName2 = "user2";
    $cookieValue2 = "Manoj Mukhia";
    setcookie($cookieName2, $cookieValue2, time() + (86400 * 30), "/"); // Set cookie for 30 days

    if(isset($_COOKIE[$cookieName])) {
        echo "<p>Cookie value: " . htmlspecialchars($_COOKIE[$cookieName]) . "</p>";
    } else {
        echo "<p>Cookie is not set yet.</p>";
    }

    if(isset($_COOKIE[$cookieName2])) {
        echo "<p>Cookie 2 value: " . htmlspecialchars($_COOKIE[$cookieName2]) . "</p>";
    } else {
        echo "<p>Cookie 2 is not set yet.</p>";
    }

    ?>
</body>
</html>