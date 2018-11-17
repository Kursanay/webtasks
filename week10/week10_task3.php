<?php
$makers = ["Toyota","BMW","Mercedes"];
$engine = ["gas","diesel","petroleum"];
$cars = [["id"=>"0","maker"=>"Toyota","model"=>"Corolla","year"=>"2015","engine"=>"petroleum","price"=>"30000","additional"=>["tax","investment"]],["id"=>"1","maker"=>"BMW","model"=>"X5","year"=>"2012","engine"=>"gas","price"=>"25000","additional"=>["tax","investment","check"]],["id"=>"2","maker"=>"Toyota","model"=>"Camry","year"=>"2008","engine"=>"diesel","price"=>"35000","additional"=>["investment","check"]]];
$selected_car = NULL;
if (isset($_REQUEST["cars"])){
    $selected_car = $cars[$_REQUEST["cars"]];
    echo $selected_car['maker'];
}
?>
<html>
<head>
    <style>
        select{
            width:100%;
            background:white;
            padding:5px;
            border-radius:5px;
            color:#444444;
        }
        input{
            border-radius:5px;
            padding:5px;
        }
        input[type='text'],input[type='number']{
            width:calc(100% - 12px);
        }
    </style>
</head>
<body>
<form action="week10_task3.php">
    <select name="cars" onchange="this.parentNode.submit()">
        <option value="-1">Select car</option>
        <option value="0">Toyota(2015)</option>
        <option value="1">BMW</option>
        <option value="2">Toyota(2008)</option>
    </select>
    <table>
        <tr>
            <td><p>Maker :</p></td>
            <td>
                <div>
                    <select name="maker">
                        <?php
                        for($i=0;$i<sizeof($makers);$i++){
                            echo '<option';
                            if($selected_car['maker'] == $makers[$i]){
                                echo ' selected ';
                            }
                            echo '>' . $makers[$i] . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td><p>Year :</p></td>
            <td>
                <div>
                    <select name="years" id="years">
                        <?php
                        for($i=2018;$i>1900;$i--){
                            echo '<option ';
                            if ($selected_car['year'] == $i){
                                echo ' selected ';
                            }
                            echo '>' . ($i) . '</option>';
                        }
                        ?>
                    </select>
                </div>
            </td>
        </tr>
        <tr>
            <td><p>Model :</p></td>
            <td>
                <div>
                    <input type="text" name="model" value="<?php echo $selected_car['model'] ;?>">
                </div>
            </td>
        </tr>
        <tr>
            <td><p>Engine :</p></td>
            <td>
                <div>
                    <?php
                    for($i=0;$i<sizeof($engine);$i++){
                        echo '<input type="radio" name="engine" ';
                        if($selected_car['engine'] == $engine[$i]){
                            echo ' checked ';
                        }
                        echo ' value="'.$engine[$i].'"> '.$engine[$i].'<br>';
                    }
                    ?>
                </div>
            </td>
        </tr>
        <tr>
            <td><p>Price :</p></td>
            <td>
                <div>
                    <input type="number" name="cost" value="<?php echo $selected_car['price'] ;?>">
                </div>
            </td>
        </tr>
        <tr>
            <td><p>Additional :</p></td>
            <td>
                <div>
                    <label><input type="checkbox" name="att1" value="yes" <?php if(isset($_GET['att1'])){if(in_array("tax", $selected_car['additional'])){echo ' checked ';}} ?>>tax payed</label>
                    <label><input type="checkbox" name="att2" value="yes" <?php if(isset($_GET['att2'])){if(in_array('check', $selected_car['additional'])){echo ' checked ';}} ?>>technical check passed</label>
                    <label><input type="checkbox" name="att3" value="yes" <?php if(isset($_GET['att3'])){if(in_array('investment', $selected_car['additional'])){echo ' checked ';}} ?>>does not require investment</label>
                </div>
            </td>
        </tr>
        <tr>
            <td><input type="submit" value="Submit"/></td>
        </tr>
    </table>
</form>
</body>
</html>