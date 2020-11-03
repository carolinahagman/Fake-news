<?php

declare(strict_types=1);

//Connecting the full article page and the preview article by the article id 
function getArticleById(array $posts, string $id): array
{
    foreach ($posts as $post) {
        if ($post['id'] === $id) {
            return $post;
        }
    }
}

//Checks to see how many days since today the article was published
function daysSinceToday(string $date): int
{
    $today = new DateTime();
    $dateToCheck = new DateTime($date);
    $timeDiff = $today->diff($dateToCheck);
    return $timeDiff->d;
}

//Shows how many days ago the article was published
function postedDateToString(int $daysAgo): string
{
    switch ($daysAgo) {
        case 0:
            return 'Posted today';
        case 1:
            return 'Posted yesterday';
        default:
            return "Posted $daysAgo days ago";
    }
}
//Formats the date
function formatDate(string $date): string
{
    $dateCreate = (date_create($date));
    return (date_format($dateCreate, 'jS F Y'));
}

//Updates the likes in the database
function incrementLikeCounter(int $id): void
{
    $pdo = $GLOBALS['pdo']; // get pdo from global scope
    $response = $pdo->prepare('UPDATE posts SET like_counter = like_counter + 1 WHERE id = ?');
    $response->execute([$id]);
}
