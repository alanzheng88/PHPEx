<?php

class Post
{

    public $title;

    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;
    }

}

$posts = [

    new Post('My First Post', 'a', true),

    new Post('My Second Post', 'b', true),

    new Post('My Third Post', 'c', true),

    // note trailing commas in array are allowed
    new Post('My Fourth Post', 'd', false),

];




// array filter
$unpublishedPosts = array_filter($posts, function ($post) {
    return !$post->published;
});
$publishedPosts = array_filter($posts, function ($post) {
    return $post->published;
});
// var_dump($unpublishedPosts);
// var_dump($publishedPosts);





// array map (expose part of an object or transform the object in some way)
$modifiedPosts = array_map(function($post) {
    return [ 'name' => $post->title ];
}, $posts);
// var_dump($modifiedPosts);
// var_dump($posts);





// convert object to array
$posts = array_map(function($post) {
    return (array) $post;
}, $posts);
// array columns only works with associative array (NOT OBJECTS) for php5.6
$columnVals = array_column($posts, 'author');
// var_dump($columnVals);
// can set key of columnVals by setting a third argument in array_columns
$columnVals2 = array_column($posts, 'author', 'title');
var_dump($columnVals2);



