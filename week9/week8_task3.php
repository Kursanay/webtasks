<html>
    <head>
        <style>
            .cards{
                display:flex;
                flex-wrap:wrap;
                width:700px;
                margin-left:auto;
                margin-right:auto;
            }
            .cards .card{
                width:250px;
                border:1px solid red;
                border-radius:5px;
                display:flex;
                margin:10px;
            }
            .menu {display:block;
                width:700px;
                margin-left:auto;
                margin-right:auto;
            }
            .card .title{
                font-size:20px;
                font-weight:bold;
            }
            .card .price{
                color:green;
            }
            .card .description{
                display:flex;
                flex-direction:column;
            }
            .card .price{
                flex-grow:1;
            }
            .card .year{
                font-weight:bold;
                font-size:18px;
            }
        </style>
    </head>
<body>

<div class="cards">
    <?php
    $cars = [["maker"=>"Toyota","model"=>"Carina","year"=>2001,"price"=>20000,"image"=>"https://a.d-cd.net/cea52es-480.jpg"],
        ["maker"=>"Toyota","model"=>"Camry","year"=>2005,"price"=>30000,"image"=>"https://c4d709dd302a2586107d-f8305d22c3db1fdd6f8607b49e47a10c.ssl.cf1.rackcdn.com/thumbnails/stock-images/f270ec72296475a5c5de2bcb13b7759d.png"],
        ["maker"=>"Audi","model"=>"A8","year"=>1986,"price"=>12000,"image"=>"http://www.theautohost.com/_contentPages/vehicleContentPages/audi/2017/A8%20L/images/2017-Audi-A8L-exterior-grille.jpg"],
        ["maker"=>"Audi","model"=>"A6","year"=>2005,"price"=>30000,"image"=>"https://www.cstatic-images.com/car-pictures/xl/USC60AUC021B021001.png"],
        ["maker"=>"BMW","model"=>"X5","year"=>2007,"price"=>17000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
        ["maker"=>"BMW","model"=>"X5","year"=>2015,"price"=>19000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
        ["maker"=>"BMW","model"=>"Model 7","year"=>2014,"price"=>22000,"image"=>"https://www.bmw.ru/content/dam/bmw/marketRU/bmw_ru/all-models/x-series/x5/2015/at-a-glance/x5_at-a-glance_stagepresentation.jpg/_jcr_content/renditions/cq5dam.resized.img.1680.large.time1452864075065.jpg"],
        ["maker"=>"Lada","model"=>"Granta","year"=>2017,"price"=>7000,"image"=>"http://www.kolesa.ru/uploads/2017/06/Lada-Granta-restyle-front1-1600x0-c-default.jpg"]
    ];
    if(isset($_GET['maker'])){
        $maker=$_GET['maker'];
        for($i=0; $i<count($cars); $i++){
            if($maker == $cars[$i]["maker"]){
                echo '<div class = "card">
                        <img src="'.$cars[$i]['image'].'" style="width:100px;height:100px;"/>
                            <div class="description">
                            <div class="title">'.$cars[$i]["maker"].' '.$cars[$i]["model"].'</div>
                            <div class="price">'.$cars[$i]["price"].'</div>
                            <div class="year">'.(2017-$cars[$i]['year']).' years</div>
                        </div>
                       </div>';
            }
        }
    }if(isset($_GET['year'])){
        for($i=0; $i<count($cars); $i++){
            if((2018-($cars[$i]["year"]))>7){
                echo '<div class = "card">
                        <img src="'.$cars[$i]['image'].'" style="width:100px;height:100px;"/>
                            <div class="description">
                            <div class="title">'.$cars[$i]["maker"].' '.$cars[$i]["model"].'</div>
                            <div class="price">'.$cars[$i]["price"].'</div>
                            <div class="year">'.(2017-$cars[$i]['year']).' years</div>
                        </div>
                       </div>';
            }
        }
    }if(isset($_GET['price'])){
        for($i=0; $i<count($cars); $i++){
            if((($cars[$i]["price"]))>20000){
                echo '<div class = "card">
                        <img src="'.$cars[$i]['image'].'" style="width:100px;height:100px;"/>
                            <div class="description">
                            <div class="title">'.$cars[$i]["maker"].' '.$cars[$i]["model"].'</div>
                            <div class="price">'.$cars[$i]["price"].'</div>
                            <div class="year">'.(2017-$cars[$i]['year']).' years</div>
                        </div>
                       </div>';
            }
        }
    }
    ?>
</div>
<div class="menu">
    <a href="week8_task3.php">Home</a>|<a href="week8_task3.php?maker=Toyota">Toyota</a>|
    <a href="week8_task3.php?maker=BMW">BMW</a>|<a href="week8_task3.php?maker=Audi">Audi</a>|
    <a href="week8_task3.php?maker=Lada">Lada</a>
</div>

<div class="menu">
    <a href="week8_task3.php?year=old">Old cars (More than 7 years)</a>|<a href="week8_task3.php?price=expensive">Expensive cars (more than 20.000$)</a>
</div>