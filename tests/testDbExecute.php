<?php

require __DIR__ . '/../autoload.php';

$db = new App\Db();

// insert в несуществующую таблицу
$query = 'INSERT INTO badTable SET title=:title, content=:content';
$params = [
    ':title' => 'Тестовый заголовок',
    ':content' => 'Текст',
];
$result = $db->execute($query, $params);
assert(false === $result);

$query = 'UPDATE news SET title=:title WHERE id=:id';
$params = [
    ':id' => 1,
    ':title' => 'Новый заголовок новости 1',
];
$result = $db->execute($query, $params);
assert(true === $result);