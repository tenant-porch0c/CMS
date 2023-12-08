<!-- Article.php -->
<?php

class Article {
    private $articleId;
    private $title;
    private $content;
    private $author;

    public function __construct($articleId, $title, $content, $author) {
        $this->articleId = $articleId;
        $this->title = $title;
        $this->content = $content;
        $this->author = $author;
    }

    public function displayInfo() {
        echo "Article ID: " . $this->articleId . "<br>";
        echo "Title: " . $this->title . "<br>";
        echo "Content: " . $this->content . "<br>";
        echo "Author: " . $this->author->displayInfo() . "<br>";
    }
}
?>
