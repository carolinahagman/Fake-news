<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';

?>
<main class="main-index" id="media-main-index">
  <?php foreach ($posts as $post) :
  ?>
    <section class="container" id="media-container">
      <div class="title-div">
        <h2 class="title-preview"><?= $post['title']; ?></h2>
      </div>
      <div class="article-sub-header">
        <div class="article-info">
          <div class="likes">
            <i class="fas fa-heart"></i> <?= $post['like_counter']; ?>
          </div>
          <p class="date"><?= postedDateToString(daysSinceToday($post['date'])); ?> </p>
          <p class="author"><?= $post['name']; ?></p>
          <a class="read-more" href="/article.php?id=<?= $post['id']; ?>"><button class="read-more-btn">Read More</button></a>
        </div>
        <div class="img-preview"><img class="img-preview-item" src="/img/<?= $post['image']; ?>" alt="preview-image"></div>
      </div>
      <hr class="divider">
    </section>
  <?php endforeach; ?>
</main>
</body>

</html>