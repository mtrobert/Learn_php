<?php
/*******************************************************************
****************** EXAMPLE 1 - array_filter() **********************
*******************************************************************/
echo "\n" . '******************' . 'Example 1 - array_filter()' . '*********************' . "\n" . "\n";
/**********************************************************************************************/


class Post
{

  public $title, $published;

  public function __construct($title, $author, $published)
  {
    $this->title = $title;
    $this->author = $author;
    $this->published = $published;
  }

}

$posts = [
  new Post('First post', 'RM',  true),
  new Post('Second post', 'IJ',  true),
  new Post('Third post', 'LM',  true),
  new Post('Fourth post', 'DM',  false)
];


echo 'Here is unpublished posts for you boss :) .' ."\n" . "\n";

$unpublished = array_filter($posts , function($post)
                    {
                      return !$post->published;
                    }
);
var_dump($unpublished);



echo "\n" . 'Here is published posts for you boss :) .' ."\n" . "\n";

$published = array_filter($posts , function($post)
                    {
                      return $post->published;
                    }
);

var_dump($published);



echo "\n" . '******************' . 'End of an example ' . '*********************' . "\n";
/*******************************************************************
****************** EXAMPLE 2 -array_map() **************************
*******************************************************************/
echo "\n" . '******************' . 'Example 2 - array_map()' . '*********************' . "\n";
/****************************************************************************************/

$modified = array_map(function($post)
{
  return $post->title . " - this value can be change to anything." ;

}, $posts);

var_dump($modified);



echo "\n" . '******************' . 'End of an example ' . '*********************' . "\n";
/*******************************************************************
****************** EXAMPLE 3 - array_column() **********************
*******************************************************************/
echo "\n" . '******************' . 'Example 3 - array_column()' . '*********************' . "\n";
/****************************************************************************************/













echo "\n" . '******************' . 'End of an example ' . '*********************' . "\n";
