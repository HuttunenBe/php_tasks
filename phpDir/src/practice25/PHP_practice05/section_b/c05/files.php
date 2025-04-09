<?php
$path = 'img/logo.png';
?>

<?php include 'includes/header.php'; ?>

<?php
$fileLogo = 'img/logo.png';
$fileInfo = pathinfo($fileLogo);

if (file_exists($fileLogo)) {
    echo "File Name: " . $fileInfo['basename'] . "<br>";
    echo "File Size: " . filesize($fileLogo) . " bytes<br>";
    echo "MIME Type: " . mime_content_type($fileLogo) . "<br>";
    echo "Folder: " . $fileInfo['dirname'] . "<br>";
} else {
    echo "There is no such file.";
}
?>

<?php include 'includes/footer.php'; ?>
