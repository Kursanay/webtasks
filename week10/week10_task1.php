<!DOCTYPE html>
<html>
<head>
    <style>
        .error{color: #FF0000;}
    </style>
</head>
<body>
<?php
$name = "";
$password = "";
$confirmPassword = "";

$nameErr = "";
$passwordErr = "";
$confirmPasswordErr = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){
    if(isset($_POST["submit"])) {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = $_POST["name"];
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["password"])) {
            $passwordErr = "password is required";
            if (!$_POST["confirmPassword"]) {
                $confirmPasswordErr = "Confirm password doesn't match password.";
            }
        } else {
            $password = $_POST["password"];
            if ($password < 8) {
                $passwordErr = "Password should contain more than 8 characters";
            } else {
                if (empty($_POST["confirmPassword"])) {
                    $confirmPasswordErr = "Confirm password and password dont match";
                } else {
                    $confirmPassword = $_POST["confirmPassword"];
                    if ($confirmPassword != $password) {
                        $confirmPasswordErr = "Confirm password and password dont match";
                    }
                }
            }

        }
        if(empty($nameErr) & empty($passwordErr) & empty($confirmPasswordErr)){
            echo("User Created Successfully");
        }
    }

}

?>
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <h1>Registration</h1>
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name"/><span class="error"><?php echo $nameErr;?></span></td>
        </tr>
        <tr>
            <td>Password:</td>
            <td><input type="password" name="password"/><span class="error"><?php echo $passwordErr;?></span></td>
        </tr>
        <tr>
            <td>Confirm Password:</td>
            <td><input type="password" name="confirmPassword"/><span class="error"><?php echo $confirmPasswordErr;?></span></td>
        </tr>
    </table>

    <br/>

    <input type="submit" name="submit" value="Register"/>
</form>
</body>