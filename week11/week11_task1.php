<!DOCTYPE html>
<html>
<head>
    <style>
        .main{
            display:flex;
            flex-direction:row;
            width:450px;
            border:2px solid darkred;
            border-radius: 10px;
        }
        .left{margin-left:30px;}
        img{margin-left:10px;margin-top:10px;}
    </style>
</head>
<body>
<?php
$con=mysqli_connect("127.0.0.1","root","","hw11");
$sql="select * from cars,Makers WHERE cars.maker=Makers.id";
$sql="select * from cars";
$query=mysqli_query($con,$sql);
$num=mysqli_num_rows($query);
for ($i=0; $i <$num ; $i++) {
    $result=mysqli_fetch_array($query);
    $img=$result['url'];
    $maker=$result['maker'];
    $model=$result['model'];
    $price=$result['price'];
    $year=$result['year'];
    print '
			<div class="main">
				<img src="'.$img.'" width=150 height=100/>
				<div class="left">
					<p><strong> '.$maker.' '.$model.'</strong></p>
					<p> '.$price.'</p>
					<p> '.$year.' </p>
				</div>
			</div><br/>';
}
?>
</body>
</html>