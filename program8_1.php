<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>program8_1</title>
</head>
<body>
    <?php
        error_reporting(0);
    ?>
    <form method="get">
        <input type="text1" name="uname1">
        <input type="text2" name="uname2">
        <input type="text3" name="uname3">
        <input type="text4" name="uname4">
        <input type="text5" name="uname5">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        echo"<h1>user input from array</h1>";
        $nm=array();
        $nm[0]=$_GET['uname1'];
        $nm[1]=$_GET['uname2'];
        $nm[2]=$_GET['uname3'];
        $nm[3]=$_GET['uname4'];
        $nm[4]=$_GET['uname5'];
        
        foreach($nm as $n){
            echo "$n";
        }
    ?>
</body>
</html>