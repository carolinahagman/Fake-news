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
        <h2 class="title-article"><?= $post['title']; ?></h2>
        <div class="img-box">
            <img class="img-article" src="./img/<?= $post['image']; ?>" alt=""></div>
        <span class="like-span">
            <p class="date"><?= formatDate($post['date']); ?></p>
            <button class="like-btn" onclick=<?php incrementLikeCounter($id); ?>>
                <?= $post['like_counter']; ?><img class="heart-like" src="/img/heart.svg" alt="heart"></button>
        </span>


        <article class="main-article">
            <p class="content"> <?= $post['content']; ?></p>
            <span class="author-span">
                <p class="author-special"> <?= $post['name']; ?></p>
            </span>
        </article>

    </main>
</body>

</html>