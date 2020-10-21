<?php

require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
require __DIR__ . '/header.php';

?>
<?php foreach ($posts as $post) :
  $title = $post['title'];
  $date = $post['date'];
  $image = $post['image'];
  $likes = $post['like_counter'];
  $name = $post['name'];
  $id = $post['id'];

?>
  <main>
    <h2 class="title"><?= $title; ?></h2>
    <section class="article-preview">
      <div class="article-sub-header">
        <div class="article-info">
          <button class="like-btn">
            <img class="heart-like" src="/img/heart.svg" alt="heart"><?= $likes; ?>
          </button>
          <p class="date"><?=
                            postedDateToString(daysSinceToday($post['date'])) ?> </p>
          <p class="author"><?= $name; ?></p>

          <a class="read-more" href="/article.php?id=<?= $id ?>"><button class="read-more-btn">Read More</button></a>

        </div>
        <div class="img-preview"><img class="img-preview-item" src="/img/<?= $image; ?>" alt=""></div>
      </div>
      <hr class="divider">
    </section>
  <?php endforeach; ?>
  </main>
  </body>

  </html>