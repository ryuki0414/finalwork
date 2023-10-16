<?php

// ローカルDB接続ファイル
// $dbName = 'mysql:host=localhost;dbname=imagePosting;charset=utf8';
// $userName = 'root';

// try {
//     $db = new PDO($dbName, $userName);
//     var_dump('DB接続成功');

// } catch (PDOException $e) {
//     echo "データベース接続エラー: " . $e->getMessage();
//     exit();
// }


// } catch (\Throwable $th) {
//     exit();
// }


// デプロイ環境のデータベース接続
// $host = 'mysql57.ryuki0414.sakura.ne.jp';
// $dbname = 'ryuki0414_imageposting';
// $username = 'ryuki0414';
// $password = 'ryuki0414_';
// $charset = 'utf8';

try {
    $host = 'mysql57.ryuki0414.sakura.ne.jp';
    $dbname = 'ryuki0414_imageposting';
    $username = 'ryuki0414';
    $password = 'ryuki0414_';
    $charset = 'utf8';

    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=$charset", $username, $password);
    // $pdo = new PDO('mysql:dbname=ryuki0414_imageposting;charset=utf8;host=mysql57.ryuki0414.sakura.ne.jp', 'ryuki0414', 'ryuki0414_');
    // データベース接続成功時の処理
} catch (PDOException $e) {
    echo "データベース接続エラー: " . $e->getMessage();
    exit();
}

// try {
//     //localhostの場合
//     $db_name = "imagePosting";    //データベース名
//     $db_id   = "root";      //アカウント名
//     $db_pw   = "";          //パスワード：XAMPPはパスワード無しに修正してください。
//     $db_host = "localhost"; //DBホスト

//     //localhost以外＊＊自分で書き直してください！！＊＊
//     if ($_SERVER["HTTP_HOST"] != 'localhost') {
//         $db_name = "ryuki0414_imageposting";  //データベース名
//         $db_id   = "ryuki0414";  //アカウント名（さくらコントロールパネルに表示されています）
//         $db_pw   = "ryuki0414_";  //パスワード(さくらサーバー最初にDB作成する際に設定したパスワード)
//         $db_host = "mysql57.ryuki0414.sakura.ne.jp"; //例）mysql**db.ne.jp...
//     }
//     return new PDO('mysql:dbname=' . $db_name . ';charset=utf8;host=' . $db_host, $db_id, $db_pw);
// } catch (PDOException $e) {
//     exit('DB Connection Error:' . $e->getMessage());
// }
