<title>Tim min</title>
<form method="post">
    <input type="text" name="nhap" placeholder="Nhap mang">
    <input type="submit" name="submit" value="check">
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['nhap'];
    $array = explode(",", $number);
    $min = $array[0];

    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] < $min) {
            $min = $array[$i];
        }
    }
    echo "min :" .$min;
}
