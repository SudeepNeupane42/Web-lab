<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload with PHP</title>
</head>
<body>
    <form method="POST" action="" enctype="multipart/form-data">
        <label for="userfile">Choose a file to upload:</label>
        <input type="file" id="userfile" name="userfile" required>
        <br>
        <input type="submit" value="Upload">
    </form>

    <?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['userfile'])) {

        $fileName = $_FILES['userfile']['name'];
        $fileTmpName = $_FILES['userfile']['tmp_name'];
       
        // Ensure the uploads directory exists
        if (!is_dir('uploads')) {
            mkdir('uploads', 0755, true);
        }

        if (move_uploaded_file($fileTmpName, "uploads/$fileName")) {
            echo "<p>File uploaded successfully!</p>";
            echo "<b> File name: </b>" . $_FILES['userfile']['name'] . "</br>";
            echo "<b> File type: </b>" . $_FILES['userfile']['type'] . "</br>";
            echo "<b> File size: </b>" . $_FILES['userfile']['size'] . "</br>";
        } else {
            echo "<p>File upload failed. Please try again.</p>";
        }
    }

    ?>
</body>
</html>