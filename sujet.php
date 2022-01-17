<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', 'root');
} catch (PDOException $e) {
    exit('Erreur : '.$e->getMessage());
}
$stmt = $pdo->query('SELECT title, image FROM post');
$posts = [];
while ($post = $stmt->fetchObject()) {
    $posts[] = $post;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Mon blog</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    <h1>Mon blog</h1>
</header>
<section>
    <nav>
        <ul>
            <li><a href="/">Accueil</a></li>
        </ul>
    </nav>
    <article>
        <?php foreach ($posts as $post): ?>
            <img src="posts/<?= $post->image ?>" width="250" />
            <h2><?= $post->title ?></h2>
        <?php endforeach; ?>
    </article>
</section>
<footer>
    <p>Mon blog - Tous droits réservés</p>
</footer>
</body>
</html>