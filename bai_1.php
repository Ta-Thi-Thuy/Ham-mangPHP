<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html; chatset=utf-8"/>
<head>
    <title>Nhap so de in ra mang va tong</title>
<body>
<form method="post">
    <input type="text" name="nhap" placeholder="Enter a number">
    <input type="submit" value="Check">
    <?php
    $nums = array(2, 3, 4, 5, 7, 8);
    $num1 = 1;
    $num2 = 2;
    if ($num1 == $_POST["nhap"]) {
        echo "<br><br> sum =" .array_sum($nums);
    }
    if ($num2 == $_POST["nhap"]) {
        sort($nums);
        foreach ($nums as $i) {
            echo "<br><br>$i<br>";
        }
    }
    ?>
</form>
</body>
</head>
</html>




