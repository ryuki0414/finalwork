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


// デプロイ環境のデータベース接続
// $host = 'サーバーのホスト名またはIPアドレス';
// $dbname = 'データベース名';
// $username = 'データベースユーザー名';
// $password = 'データベースパスワード';
// $charset = 'utf8';

// try {
//     $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
//     // データベース接続成功時の処理
// } catch (PDOException $e) {
//     echo "データベース接続エラー: " . $e->getMessage();
//     exit();
// }

