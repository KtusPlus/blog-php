<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $title = trim($_POST['title']);
    $content = trim($_POST['content']);

    if ($title && $content)
    {
        $post = ['title' => $title, 'content' => $content, 'date' => date('Y-m-d H:i')];
        $filename = uniqid() . '.json';
        file_put_contents("posts/$filename", json_encode($post, JSON_PRETTY_PRINT));
    }
}
header("Location: index.php");
exit;
?>