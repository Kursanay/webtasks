<!DOCTYPE html>
<html>
<head>
    <style>
        .main{
            display:flex;
            flex-direction:row;
            width:450px;
            border:2px solid black;
            border-radius: 10px;
        }
        .left{margin-left:30px;}
        img{margin-left:10px;margin-top:10px;}
        .field {clear:both; text-align:right; line-height:25px;}
        label {float:left; padding-right:10px;}
        .all {float:left}
    </style>
</head>
<body>
<form action="week11_task3.php">
<div class="all">
<h1><strong>Admin Page</strong></h1>
<div class="field">
    <label>Maker: </label>
    <input type="text" name="maker"/>
</div>
<div class="field">
    <label>Model: </label>
    <input type="text" name="model">
</div>
<div class="field">
    <label>Year: </label>
    <input type="number" name="year">
</div>
<div class="field">
    <label>Price: </label>
    <input type="number" name="price">
</div>
<div class="field">
    <label>Image(URL): </label>
    <input type="text" name="url">
</div>
    <input type="submit" value="Add new"/>

<?php
$con=mysqli_connect("127.0.0.1","root","","hw11");
$sql1="SELECT * FROM cars";
$query1=mysqli_query($con,$sql1);
$num=mysqli_num_rows($query1);
for ($i=0; $i <$num ; $i++) {
    $result=mysqli_fetch_array($query1);
    $img1=$result['url'];
    $maker1=$result['maker'];
    $model1=$result['model'];
    $price1=$result['price'];
    $year1=$result['year'];
    $sql2="DELETE FROM cars WHERE 'id' = '$i'";
    print '
			<div class="main">
				<img src="'.$img1.'" width=150 height=100/>
				<div class="left">
					<p> '.$maker1.' '.$model1.'</p>
					<p> '.$price1.'</p>
					<p> '.$year1.'  </p>
					<a href=mysqli_query($con,$sql2)>Delete</a>
				</div>
			</div><br/>';
}
if(isset($_GET["maker"],$_GET['model'],$_GET['price'],$_GET['year'],$_GET['url'])){
    $maker=$_GET["maker"];
    $model=$_GET['model'];
    $price=$_GET['price'];
    $year=$_GET['year'];
    $img=$_GET['url'];
    $sql="INSERT INTO cars VALUES ('$maker','$model','$price','$year','$img');";
    $query=mysqli_query($con,$sql);
}
?>
</div>
</body>
</html>