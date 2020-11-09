<form>

</form>

<?php
$arr = [[1, 4, 5],
    [9, 2, 0]];

function findMax($arr)
{
    $max = $arr[0][0];
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($max < $arr[$i][$j]) {
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
echo findMax($arr);
