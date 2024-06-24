<?php
// upload_video.php
if(isset($_FILES['videoFile'])) {
  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["videoFile"]["name"]);
  
  // ファイルタイプの検証
  $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
  if($fileType != "mp4") {
    echo "エラー: MP4ファイルのみアップロード可能です。";
    exit;
  }

  // ファイルサイズの検証
  if ($_FILES["videoFile"]["size"] > 50000000) { // 50MBの制限
    echo "エラー: ファイルサイズが大きすぎます。";
    exit;
  }

  if (move_uploaded_file($_FILES["videoFile"]["tmp_name"], $target_file)) {
    header('Location: script.php?video=' . urlencode($target_file));
    exit;
    // echo "ファイル ". htmlspecialchars( basename( $_FILES["videoFile"]["name"])). " がアップロードされました。";
  } else {
    echo "エラー: アップロード中に問題が発生しました。";
  }
}
?>

<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>動画投稿アプリ</title>
<link rel="stylesheet" href="css/styles.css">
</head>
<body>
<a href="select.php">データ表示一覧</a>
</body>
</html>



