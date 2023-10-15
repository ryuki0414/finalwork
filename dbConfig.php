<?php
// DB接続ファイル
$dbName = 'mysql:host=localhost;dbname=imagePosting;charset=utf8';
$userName = 'root';

try {
    $db = new PDO($dbName, $userName);
    var_dump('DB接続成功');
} catch (\Throwable $th) {
    exit();
}
