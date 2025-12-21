<!DOCTYPE html>
<html>
<head>
    <title>PHP Validation</title>
</head>
<body>

<h2>Registration Form</h2>

<?php

$name = $gender = "" = $email;
$dobErr = $nameErr = $genderErr = "" = $email;

function clean($data){
    return trim($data);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    
    if (empty($_POST["name"])) {
        $nameErr = "Name required";
    } else {
        $name = clean($_POST["name"]);

        if (str_word_count($name) < 2) {
            $nameErr = "At least two words needed";
        } elseif (!preg_match("/^[A-Za-z][A-Za-z .-]*$/", $name)) {
            $nameErr = "Invalid characters";
        }
    }
   
    if (empty($_POST["dd"]) || empty($_POST["mm"]) || empty($_POST["yy"])) {
        $dobErr = "DOB required";
    } else {
        if ($_POST["dd"] < 1 || $_POST["dd"] > 31 ||
            $_POST["mm"] < 1 || $_POST["mm"] > 12 ||
            $_POST["yy"] < 1953 || $_POST["yy"] > 2030) {
            $dobErr = "Invalid DOB";
        }
    }

  
    if (empty($_POST["gender"])) {
        $genderErr = "Select gender";
    } else {
        $gender = $_POST["gender"];
    }
}
?>

<form method="post">

Name:
<input type="text" name="name">
<span style="color:red"><?php echo $nameErr; ?></span>
<br><br>


DOB:
<input type="number" name="dd" placeholder="DD">
<input type="number" name="mm" placeholder="MM">
<input type="number" name="yy" placeholder="YYYY">
<span style="color:red"><?php echo $dobErr; ?></span>
<br><br>

Gender:
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">Female
<span style="color:red"><?php echo $genderErr; ?></span>
<br><br>

Email:
 

<input type="submit" value="Submit">

</form>

</body>
</html>
