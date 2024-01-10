<?php

class Category
{
    public $name;
}

class Post
{
    private $content;
    private $category;

    public function setCategory(Category $category)
    {
        $this->category = $category;
    }

    public function category(): Category
    {
        return $this->category;
    }
}

$php = new Category;
$php->name = "PHP 8.2";

$p01 = new Post;
$p01->setCategory($php);

echo $p01->category()->name;