<?php

$data = [
    "title" => $_POST ['title'],
    "content" => $_POST ['content']

];

$connection = new PDO ('mysql:host= localhost; dbname=files-01'), 'root' , '');
$sql = 'INSERT  INTO posts (title, content) VALUES (:title, :content)' ;
$statement = $connection ->prepare ($sql);
$result = $statement ->execute($data);
var_dump($connection);