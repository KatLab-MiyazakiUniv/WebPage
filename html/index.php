<!DOCTYPE html>
<html lang="ja">

<!-- 共通<head>タグ -->
<?php include (dirname(__FILE__).'/parts/head_tag.html'); ?>


<head>
    <title>片山(徹)研究室 : 宮崎大学</title>
</head>


<body>

    <!-- ヘッダー -->
    <?php include (dirname(__FILE__).'/parts/header.html'); ?>

    <!-- メニュー -->
    <?php include (dirname(__FILE__).'/parts/menu.html'); ?>

    <!-- 本文ブロック -->
    <div class="container" style="background:#;height:auto;">
        <div class="f-rounded row">
            <div class="col-sm-5 visible-sm visible-md visible-lg">
                <p></p>
                <img src="/images/welcome.jpg" class="img-responsive img-rounded" alt="ひらこばの写真">
            </div>
            <div class="col-sm-5 visible-xs">
                <p></p>
                <img src="/images/welcome_wide.jpg" class="img-responsive img-rounded" alt="ひらこばの写真">
            </div>
            <div class="col-sm-7">
                <h1>Welcome to Kat-Lab !!</h1>
                片山(徹)研では， 「ソフトウェア開発における人間の負担をいかに減らし、ソフトウェアの品質を上げることができるのか？」 をテーマに、リファクタリング，形式手法，モデリング言語、テスト等を研究しています。
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="f-rounded col-xs-12">
                <h2>News</h2>
                <?php include (dirname(__FILE__).'/parts/news.html'); ?>
            </div>
        </div>
    </div>
    <p></p>

    <!-- フッター -->
    <?php include (dirname(__FILE__).'/parts/footer.html'); ?>

    <!-- Javascriptの読み込み -->
    <?php include (dirname(__FILE__).'/parts/js_load.html'); ?>

</body>

</html>
