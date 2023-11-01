<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>File Upload/Download/Delete</title>
</head>
<body>
    <h1>File Upload</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="file" required>
        <input type="submit" value="Upload">
    </form>

    <h1>File Delete</h1>
    <form action="delete.php" method="POST">
        <select name="fileToDelete">
            <?php
            $uploadDir = 'uploads/';
            $files = scandir($uploadDir);
            foreach ($files as $file) {
                if ($file !== '.' && $file !== '..') {
                    echo "<option value=\"$file\">$file</option>";
                }
            }
            ?>
        </select>
        <input type="submit" value="Delete">
    </form>

    <h1>File List</h1>
    <ul>
        <?php
        foreach ($files as $file) {
            if ($file !== '.' && $file !== '..') {
                echo "<li><a href=\"downloads.php?file=$file\" target=\"_blank\">$file</a></li>";
            }
        }
        ?>
    </ul>
</body>
</html>
