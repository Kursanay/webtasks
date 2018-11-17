<?php
    $maker = $_GET["maker"];
    $year= (int)($_GET["years"]);
    $model = $_GET["model"];
    $engine = $_GET["engine"];
    $price= $_GET["cost"];
    if(empty($_GET["att1"])){
        $additional1 = 'no';
    }
    else{
        $additional1 = $_GET["att1"];
    }
    if(empty($_GET["att2"])){
        $additional2 = 'no';
    }
    else{
        $additional2 = $_GET["att2"];
    }
    if(empty($_GET["att3"])){
        $additional3 = 'no';
    }
    else{
        $additional3 = $_GET["att3"];
    }
    echo 'You added new item: <strong>' .$maker .' ' .$model.' </strong></br>';
    echo 'produced in '.$year.' ('.(2018 - $year).' years old) with '.$engine.' engine </br>';
    echo 'Tax payed: <strong>'.$additional1.'</strong></br>';
    echo 'Technical check passed: <strong>'.$additional2.'</strong></br>';
    echo 'Doesnt require investment: <strong>'.$additional3.'</strong></br>';
    echo '$ '.$price.'</br>';
?>