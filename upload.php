<?php
$uploadDir = 'uploads/';

if ($_FILES['file']['error'] === UPLOAD_ERR_OK) {
    $filename = $_FILES['file']['name'];
    $destination = $uploadDir . $filename;

    if (move_uploaded_file($_FILES['file']['tmp_name'], $destination)) {
        echo "File uploaded successfully!";
    } else {
        echo "Error uploading file.";
    }
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000);
        </script>';
} else {
    echo "File upload error.";
}
?>
