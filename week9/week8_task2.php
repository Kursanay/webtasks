<a href="week8_task2.php?category=sport">Sport news</a> | <a href="week8_task2.php?category=politics">Politic news</a><br/><br/>
<a href="week8_task2.php?category=sport&format=json">Sport news (JSON)</a> | <a href="week8_task2.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
    $news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],
        "politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
    $category = "sport";

    $link=$_GET['category'];
    $isJson = isset($_GET['format']);
    if(!$isJson){
        echo $news[$link][0]."<hr>".$news[$link][1];
    }
    else{
        echo json_encode($news[$link]);
    }



?>