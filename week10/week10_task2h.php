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
        <form action="week10_task2.php">
            <table>
                <tr>
                    <td><p>Maker :</p></td>
                    <td>
                        <div>
                            <select name="maker">
                                <option value="BMW">BMW</option>
                                <option value="Audi">Audi</option>
                                <option value="Toyota">Toyota</option>
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
                                    echo '<option>' . ($i) . '</option>';
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
                            <input type="text" name="model">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><p>Engine :</p></td>
                    <td>
                        <div>
                            <label><input type="radio" name="engine" value="petroleum"/>Petroleum</label>
                            <label><input type="radio" name="engine" value="gas"/>Gas</label>
                            <label><input type="radio" name="engine" value="diesel"/>Diesel</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><p>Price :</p></td>
                    <td>
                        <div>
                            <input type="number" name="cost">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><p>Additional :</p></td>
                    <td>
                        <div>
                            <label><input type="checkbox" name="att1" value="yes">tax payed</label>
                            <label><input type="checkbox" name="att2" value="yes" >technical check passed</label>
                            <label><input type="checkbox" name="att3" value="yes" >does not require investment</label>
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