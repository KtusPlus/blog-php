<?php
require_once 'includes/functions.php';
$posts = getPosts();
?>
<!DOCTYPE html>
<html lang="pl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styl.css">
        <title>Blogator - Mini Blog PHP</title>
    </head>
    <body>
        <header>
            <h1>Blogator</h1>
            <p>Twój minimalistyczny blog w PHP bez bazy danych</p>
            <a href="#add" class="cta">Dodaj wpis</a>
            <button id="toggleTheme">🌗</button>
        </header>

        <section id="posts" class="reveal">
            <h2>Wpisy</h2>
            <?php if(empty($posts)): ?>
                <p>Brak postów.</p>
            <?php else: ?>
            <?php foreach($posts as $post): ?>
                <div class="post card reveal">
                    <h3><?= htmlspecialchars($post['title']) ?></h3>
                    <small><?= $post['date'] ?></small>
                    <p><?= nl2br(htmlspecialchars($post['content'])) ?></p>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="filename" value="<?= $post['filename'] ?>">
                        <button type="submit">🗑 Usuń</button>
                    </form>
                </div>
            <?php endforeach; ?>
            <?php endif; ?>
        </section>

        <section id="add" class="reveal">
            <h2>Dodaj nowy wpis</h2>
            <form action="add.php" method="post" class="card">
                <input type="text" name="title" placeholder="Tytuł wpisu" required>
                <textarea name="content" placeholder="Treść wpisu" required></textarea>
                <button type="submit">Zapisz</button>
            </form>
        </section>

        <footer>
            <p>&copy; <?= date('Y') ?> Blogator by Jakub Kropisz</p>
        </footer>

        <script src="script.js"></script>
    </body>
</html>