<!-- CMS.php -->
<?php

include 'User.php';
include 'Article.php';
include 'Comment.php';

// Create users
$user1 = new User(1, 'john_doe', 'john.doe@example.com');
$user2 = new User(2, 'jane_smith', 'jane.smith@example.com');

// Create articles
$article1 = new Article(101, 'Introduction to PHP', 'PHP is a server-side scripting language...', $user1);
$article2 = new Article(102, 'Web Development with PHP', 'Learn how to build dynamic websites using PHP...', $user2);

// Create comments
$comment1 = new Comment(201, 'Great article!', $user1);
$comment2 = new Comment(202, 'I have a question...', $user2);

// Display information
$article1->displayInfo();
echo "<br>";
$article2->displayInfo();
echo "<br>";
$comment1->displayInfo();
echo "<br>";
$comment2->displayInfo();
?>
