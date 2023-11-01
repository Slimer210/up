<?php
$uploadDir = 'uploads/';

if (isset($_GET['file'])) {
    $filename = $_GET['file'];
    $fileToDownload = $uploadDir . $filename;

    if (file_exists($fileToDownload)) {
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . $filename . '"');
        readfile($fileToDownload);
    } else {
        echo "File not found.";
        echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000);
        </script>';
    }

} else {
    echo "No file selected.";
    echo '<script>
            setTimeout(function() {
                window.location.href = "index.php";
            }, 2000);
        </script>';
}
?>
