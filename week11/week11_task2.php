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
    </style>
</head>
<body>
<form action="week11_task2.php">
    <select name="qq">
        <option value="All">All</option>
        <option value="BMW">BMW</option>
        <option value="Toyota">Toyota</option>
    </select>
    <input type="submit" value="Submit"/>
</form>
<?php
if(isset($_GET["qq"])){
    $b=$_GET["qq"];
    $con=mysqli_connect("127.0.0.1","root","","hw11");
    $sql = "";
    if($b=="All"){
        $sql="select * from cars";
    }
    else{
        $sql="select * from cars WHERE cars.maker='$b'";
    }
    $query=mysqli_query($con,$sql);
    $num=mysqli_num_rows($query);
    for ($i=0; $i <$num ; $i++) {
        $result=mysqli_fetch_array($query);
        $img=$result['url'];
        $maker=$result['maker'];
        $model=$result['model'];
        $price=$result['price'];
        $year=$result['year'];
        if($maker===$b){
            print '
				<div class="main">
					<img src="'.$img.'" width=150 height=100/>
					<div class="left">
						<p> '.$maker.' '.$model.'</p>
						<p> '.$price.'</p>
						<p> '.$year.'  </p>
					</div>
				</div><br/>';
        }
    }
}
?>
</body>
</html>