<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 5a Q3</title>
</head>
<body>
<?php
function calculateArea($length, $width) {
    return $length * $width;
}

$length = 15; 
$width = 7;   

$area = calculateArea($length, $width);

echo "The area of the rectangle with a  width of $width and length of $length is $area square units.";
?>

</body>
</html>
