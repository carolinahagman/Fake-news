<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $id = $_GET['id'];
    $post = getArticleById($posts, $id);

    ?>


    <main class="main-article">
        <div class="image-box">
            <img class="image-article" src="./img/<?= $post['image']; ?>" alt=""></div>

        <span class="like-span"> <button class="like-btn"> <img class="heart-like" src="/img/heart.svg" alt="heart">like</button></span>
        <h2 class="title-article"><?= $post['title']; ?></h2>
        <span class="author-date">
            <p class="date"><?= $post['date']; ?></p>
            <p class="author"> <?= $post['name']; ?></p>
        </span>
        <article class="main-article">
            <p class="content"> <?= $post['content']; ?></p>
        </article>

    </main>
</body>

</html>