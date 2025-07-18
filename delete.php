<?php
    if($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['filename']))
    {
        $file = 'posts/' . basename($_POST['filename']);
        if (file_exists($file))
        {
            unlink($file);
        }
    }
    header("Location: index.php");
    exit;
?>