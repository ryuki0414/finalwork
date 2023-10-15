<?php

// include('./dbConfig.php');

// $targetDirectory = 'images/';
// $fileName = basename($_FILES["file"]["name"]);
// $targetFilePath = $targetDirectory . $fileName;
// $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

// if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($fileName)) {
//     $arrImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
//     if (in_array($fileType, $arrImageTypes)) {
//         $postImageForServer = move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath);

//         if ($postImageForServer) {
//             $insert = $db->query("INSERT INTO images (file_name) VALUES ('" . $fileName . "')");
//         }
//     }
// }

// header('Location: ' . './html/index.php', true, 303);
// exit();


include('./dbConfig.php');
var_dump('新規での画像投稿');

$targetDirectory = __DIR__ . '/images/';
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDirectory . $fileName;
$fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($fileName)) {
    $arrImageTypes = array('jpg', 'png', 'jpeg', 'gif', 'pdf');
    if (in_array($fileType, $arrImageTypes)) {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            // アップロード成功
            try {
                $insert = $db->prepare("INSERT INTO images (file_name) VALUES (:fileName)");
                $insert->bindParam(':fileName', $fileName, PDO::PARAM_STR);
                $insert->execute();
                // データベースへの挿入が成功
            } catch (PDOException $e) {
                echo "データベースエラー: " . $e->getMessage();
            }
        } else {
            echo "ファイルのアップロードに失敗しました。";
        }
    } else {
        echo "許可されていないファイル形式です。";
    }
}

header('Location: ' . './html/index.php', true, 303);
exit();
