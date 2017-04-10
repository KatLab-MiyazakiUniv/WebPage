<!DOCTYPE html>
<html lang="ja">

<!-- 共通<head>タグ -->
<?php include (dirname(__FILE__).'/parts/head_tag.html'); ?>


<head>
    <title>論文リスト - 片山(徹)研究室 : 宮崎大学</title>
</head>


<body>

    <!-- ヘッダー -->
    <?php include (dirname(__FILE__).'/parts/header.html'); ?>

    <!-- メニュー -->
    <?php include (dirname(__FILE__).'/parts/menu.html'); ?>

    <!-- 本文ブロック -->
    <div class="container f-rounded" style="background:#;height:auto;">
        <h1 class="f-title">論文リスト</h1>
        <!-- 年リスト -->
        <?php include (dirname(__FILE__).'/parts/papers_list/year_list.php'); ?>
        
        <!-- 卒業論文リスト -->
        <?php include (dirname(__FILE__).'/parts/papers_list/hinagata.php'); ?>

    </div>

    

    <!-- フッター -->
    <?php include (dirname(__FILE__).'/parts/footer.html'); ?>

    <!-- Javascriptの読み込み -->
    <?php include (dirname(__FILE__).'/parts/js_load.html'); ?>

</body>

</html>
