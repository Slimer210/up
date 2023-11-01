<?php
$uploadDir = 'uploads/';

if (isset($_POST['fileToDelete'])) {
    $filename = $_POST['fileToDelete'];
    $fileToDelete = $uploadDir . $filename;

    if (file_exists($fileToDelete)) {
        if (unlink($fileToDelete)) {
            echo "File deleted successfully!";
            
        } else {
            echo "Error deleting file.";
        }
        echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000);
        </script>';
    } else {
        echo "File not found.";
    }
} else {
    echo "No file selected.";
}
?>
