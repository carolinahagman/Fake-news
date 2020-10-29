<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';
?>

<?php
$id = $_GET['id'];
$post = getArticleById($posts, $id);

?>


<main class="main-article">
    <h2 class="title-article"><?= $post['title']; ?></h2>
    <div class="img-box">
        <img class="img-article" src="./img/<?= $post['image']; ?>" alt="article-image"></div>
    <span class="like-span">
        <p class="date"><?= formatDate($post['date']); ?></p>
        <form method="post">
            <input type="submit" name="like" class="like-btn" value="" />
            <label for="like" class="like-text"><?= $post['like_counter']; ?></label>
        </form>
        <?php
        if (array_key_exists('like', $_POST)) {
            incrementLikeCounter($id);
        }
        ?>

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
