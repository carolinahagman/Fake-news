<?php

declare(strict_types=1);

//Connect database
$pdo = new PDO('sqlite:./database/fake_news.db');

$stmnt = $pdo->query('SELECT * FROM posts
INNER JOIN users
ON posts.user_id = users.id
ORDER BY date DESC');

$posts = $stmnt->fetchAll(PDO::FETCH_ASSOC);
