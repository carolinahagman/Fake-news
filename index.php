<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';

?>
<?php foreach ($posts as $post) : ?>
  <main>
    <h2 class="title"><?= $post['title']; ?></h2>
    <section class="article-preview">
      <div class="article-sub-header">
        <div class="article-info">
          <button class="like-btn"> <img class="heart-like" src="/img/heart.svg" alt="heart"></button>
          <p class="date"><?= $post['date']; ?></p>
          <p class="author">Carolina</p>
          <button class="read-more-btn"><a class="read-more" href="">Read More</a>
          </button>
        </div>
        <div class="img-preview"><img class="img-preview-item" src="/img/<?= $post['image']; ?>" alt=""></div>
      </div>
      <hr class="divider">
    </section>
  <?php endforeach; ?>
  </main>
  </body>

  </html>