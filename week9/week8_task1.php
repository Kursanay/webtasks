<?php
    $text = "Hello, world!\n";
    $count = (int) 0;
    for($i=0; $i<1000; $i++){
        echo $text;
        $count++;
    }
    print($count);
?>
