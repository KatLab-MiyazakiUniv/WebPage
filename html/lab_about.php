<!DOCTYPE html>
<html lang="ja">

<!-- 共通<head>タグ -->
<?php include (dirname(__FILE__).'/parts/head_tag.html'); ?>


<head>
    <title>研究室紹介 - 片山(徹)研究室 : 宮崎大学</title>
</head>


<body>

    <!-- ヘッダー -->
    <?php include (dirname(__FILE__).'/parts/header.html'); ?>

    <!-- メニュー -->
    <?php include (dirname(__FILE__).'/parts/menu.html'); ?>

    <!-- 本文ブロック -->
    <div class="container" style="background:#;height:auto;">
        <h1 class="f-title">研究室紹介</h1>
        <h2>Software Engineering</h2>
        <div class="row">
            <div class="col-sm-6">
                <h4>良いプログラムとは何かを考えます。</h4>
                <ul>
                    <li>プログラムの信頼性</li>
                    <li>プログラムの使用性（ユーザインターフェイス）</li>
                    <li>プログラムの機能性</li>
                    <li>プログラムの効率性（速度、資源）</li>
                    <li>プログラムの保守性</li>
                </ul>
            </div>
            <div class="col-sm-6">

                <h4>良いプログラムを作るための手法を考えます。</h4>
                <ul>
                    <li>プログラムの生産性</li>
                    <li>プログラムの移植性</li>
                    <li>プログラムの拡張性</li>
                </ul>
            </div>
        </div>
        <h2>Software Design & Programming</h2>
        <div class="row">
            <div class="col-sm-5">
                <div class="row">
                    <p></p>
                    <img src="/images/tfvis.png" class="img-responsive img-rounded" alt="ひらこばの写真" style="height:auto;">
                </div>
            </div>
            <div class="col-sm-1 visible-sm"></div>
            <div class="col-md-7 col-sm-6">

                <h4>ソフトウェアを正しく作ることが難しい理由</h4>
                <ul>
                    <li>ソフトウェアが目に見えないため、動作が把握しにくい</li>
                    <li>開発作業のほとんどが人手によるため、思い込みやコーディングミスなどを引き起こしやすい</li>
                </ul>
            </div>
            <div class="col-md-7 col-sm-6">
                <h4>ソフトウェアが目に見えないことの解決策</h4>
                <ul>
                    <li>ソフトウェアの振る舞いを設計段階でモデル化する</li>
                    <li>ソースコードを可視化する</li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-6">
                <h4>ソフトウェアの開発作業のほとんどが人手によることの解決策として、開発の主体をコーディングからモデルベースに抽象化する手法が有力視されています</h4>
            </div>
        </div>

        <h2>Software Testing</h2>
        <div class="f-rounded row">
            <div class="col-xs-12">
                <h4>自分が作ったプログラムが正しく動作することを他人に説明する（証明する）には、どうすればいいのでしょうか？</h4>
                <ul>
                    <li>
                        プログラムの信頼性向上のための一つの手法が<span class="text-danger">テスト技法</span>です
                    </li>
                    <li>
                        一般に、プログラムの開発費用の中でテストにかかる費用は、<span class="text-danger">全体の約半分</span>と言われており、<span class="text-danger">莫大な費用</span>がかかっています
                    </li>
                    <li>
                        テストでは、実行した入力データ（テストデータ）に対してのみプログラムの正しさを保証できるので、プログラムの品質は、どのようなテストデータに基づいてテストしたかに依存します。したがって、テストデータを選定する上で、テストデータについての条件を記述した<span class="text-danger">テストケースの作成が重要</span>になります
                    </li>
                </ul>
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
