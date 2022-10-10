<?php
//Magi Constants
echo __DIR__.'<br>';
echo __FILE__.'<br>';
echo __LINE__.'<br>';


//Creating dir
// mkdir('text22');

// Rename Dir
// rename('text22', 'text');


//Delete Dir
// rmdir('text22')

//Read files and folders inside directory
$files = scandir('./');
echo '<pre>';
    var_dump($files).'<br>';
echo '</pre>';
echo'<br>';
echo'<br>';


//file_get_contents, file_put_content
echo file_get_contents('lorem.txt').'<br>';
file_put_contents('sample.txt', 'Some Content');

?>