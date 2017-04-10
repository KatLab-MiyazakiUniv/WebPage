<?php   for($i = $last_year; $i>=$first_year; $i--){
                if($year == $i){
                    include (dirname(__FILE__).'/papers'.$i.'.html');
                    break;
                }
            }
?>

<?php
$members = $year;

foreach ($members as $key => $member) {

echo <<<EOT
<div class="row">
    <div class="container">
        <div class="row">
            <div class="col-xs-1">
                $member[0]
            </div>
            <div class="col-xs-7 col-md-5">
                <div class="col-md-4 col-sm-5 col-xs-12">
                    $key
                </div>
                <div class="col-md-8 col-sm-7 col-xs-12">
                    $member[1]
                </div>
            </div>
            <div class="col-xs-4 col-md-2">
                $homepage
            </div>
        </div>
    </div>
</div> 
EOT;
}

?>

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            伊藤 寿将
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="col-md-11 col-sm-11 col-xs-11">
                Javaプログラムを対象とした単体テスト用テストコード自動生成ツールにおけるテストケース設計支援手法の提案
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                P
            </div>
        </div>
    </div>
</div>
