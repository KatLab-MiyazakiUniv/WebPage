<?php

    $first_year = 2013; 
    $last_year = 2017;

    if (isset($_GET["year"]) && (int)$_GET["year"] >= $first_year && (int)$_GET["year"] <= $last_year) {
        $year = (int)$_GET["year"];
    } else {
        $year = $last_year;
    }
  



    echo '<ul class="list-inline">';
    for($i = $last_year; $i>=$first_year; $i--){
        echo '<li><a href="?year=', $i, '">', $i, '年', '</a></li>';
    }
    echo '</ul>';

?>
