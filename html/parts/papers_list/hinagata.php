<?php   for($i = $last_year; $i>=$first_year; $i--){
                if($year == $i){
                    include (dirname(__FILE__).'/papers'.$i.'.php');
                    break;
                }
            }

foreach ($members as $key => $member) {

echo <<<EOT
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            $key
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="col-md-11 col-sm-11 col-xs-11">
                $member[0]
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                P
            </div>
        </div>
    </div>
</div>
EOT;
}
    
?>