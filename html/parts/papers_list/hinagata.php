<?php   for($i = $last_year; $i>=$first_year; $i--){
                if($year == $i){
                    include (dirname(__FILE__).'/papers'.$i.'.php');
                    break;
                }
            }

if(count($doctors) != 0){
echo '<h2 class="f-h2">博士論文 <small>Doctor’s thesis</small></h2>';
foreach ($doctors as $key => $doctors) {

echo <<<EOT
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            $key
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="col-md-11 col-sm-11 col-xs-11">
                $doctors[0]
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                P
            </div>
        </div>
    </div>
</div>
EOT;
}
}

if(count($masters) != 0){
echo '<h2 class="f-h2">修士論文 <small>Master’s thesis</small></h2>';
foreach ($masters as $key => $master) {

echo <<<EOT
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            $key
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="col-md-11 col-sm-11 col-xs-11">
                $master[0]
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                P
            </div>
        </div>
    </div>
</div>
EOT;
}
}

if(count($bachelors) != 0){
echo '<h2 class="f-h2">卒業論文 <small>Graduation thesis</small></h2>';
foreach ($bachelors as $key => $bachelor) {

echo <<<EOT
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            $key
        </div>
        <div class="col-xs-12 col-md-12">
            <div class="col-md-11 col-sm-11 col-xs-11">
                $bachelor[0]
            </div>
            <div class="col-md-1 col-sm-1 col-xs-1">
                P
            </div>
        </div>
    </div>
</div>
EOT;
}
}
?>