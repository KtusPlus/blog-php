<?php
function getPosts()
{
    $dir = __DIR__ . '/../posts/';
    if(!is_dir($dir)) mkdir($dir);
    $files = glob($dir . '*.json');

    $posts = [];
    foreach ($files as $file)
    {
        $data = json_decode(file_get_contents($file), true);
        if ($data) 
        {
            $data['filename'] = basename($file);
            $posts[] = $data;
        }
    }
    usort($posts, function($a, $b)
    {
        return strtotime($b['date']) - strtotime($a['date']);
    });

    return $posts;
}
?>