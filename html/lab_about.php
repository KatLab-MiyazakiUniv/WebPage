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
    <div class="container f-rounded" style="background:#;height:auto;">
        <h1 class="f-title">研究室紹介</h1>
        <h2>Software Engineering</h2>
        <div class="row">
            <div class="col-sm-6">
                <h4><span class="h4 text-danger">良いプログラムとは何か</span>を考えます。</h4>
                <ul>
                    <li>プログラムの信頼性</li>
                    <li>プログラムの使用性（ユーザインターフェイス）</li>
                    <li>プログラムの機能性</li>
                    <li>プログラムの効率性（速度、資源）</li>
                    <li>プログラムの保守性</li>
                </ul>
            </div>
            <div class="col-sm-6">

                <h4><span class="h4 text-danger">良いプログラムを作るための手法</span>を考えます。</h4>
                <ul>
                    <li>プログラムの生産性</li>
                    <li>プログラムの移植性</li>
                    <li>プログラムの拡張性</li>
                </ul>
            </div>
        </div>
        <h2>Software Design & Programming</h2>
        <div class="row">
            <div class="col-sm-6 visible-sm">
                <img src="../images/tfvis.png" class="img-responsive img-rounded" alt="ひらこばの写真">
            </div>
            <div class="col-sm-5 visible-xs visible-md visible-lg">
                <p></p>
                <img src="../images/tfvis.png" class="img-responsive img-rounded" alt="ひらこばの写真" style="height:auto;">
            </div>
            <div class="col-md-7 col-sm-6">

                <h4>ソフトウェアを正しく作ることが難しい理由</h4>
                <ul>
                    <li><span class="text-danger">ソフトウェアが目に見えない</span>ため、動作が把握しにくい</li>
                    <li><span class="text-danger">開発作業のほとんどが人手</span>によるため、思い込みやコーディングミスなどを引き起こしやすい</li>
                </ul>
            </div>
            <div class="col-md-7 col-sm-6">
                <h4>ソフトウェアが目に見えないことの解決策</h4>
                <ul>
                    <li><span class="text-danger">ソフトウェアの振る舞いを設計段階でモデル化する</span></li>
                    <li><span class="text-danger">ソースコードを可視化する</span></li>
                </ul>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-6">
                <h4>ソフトウェアの開発作業のほとんどが人手によることの解決策として、開発の主体を<span class="h4 text-danger">コーディングからモデルベースに抽象化</span>する手法が有力視されています</h4>
            </div>
        </div>

        <h2>Software Testing</h2>
        <div class="row">
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
        <div class="text-right" style="margin-top:50px;font-style:italic;">
            情報システム工学科 教授<br> 片山徹郎
        </div>
        <hr> 過去制作したツール
        <ul>
            <li>
                <a href="researchs/2018.html">2018年度</a>
            </li>
            <li>
                <a href="researchs/2017.html">2017年度</a>
            </li>
            <li>
                <a href="http://earth.cs.miyazaki-u.ac.jp/research/2016">2016年度</a>
            </li>
        </ul>
    </div>
    <p></p>

    <!-- フッター -->
    <?php include (dirname(__FILE__).'/parts/footer.html'); ?>

    <!-- Javascriptの読み込み -->
    <?php include (dirname(__FILE__).'/parts/js_load.html'); ?>

</body>

</html>
