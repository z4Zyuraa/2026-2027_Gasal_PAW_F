<?php
// 2.1
$fruits = array("Avocado", "Blueberry", "Cherry");

for ($x = 1; $x <= 5; $x++) {
    array_push($fruits, "Buah Tambahan " . $x);
}

$arrlen = 8;

echo "Panjang array saat ini: " . $arrlen . "<br><br>";

for ($x = 0; $x < $arrlen; $x++) {
    echo $fruits[$x] . "<br>";
}
echo "<br><br>";
?>

<?php
// 2.2
$veggies = array("Carrot", "Broccoli", "Spinach");

$veggiesLen = 3;

for ($x = 0; $x < $veggiesLen; $x++) {
    echo $veggies[$x] . "<br>";
}
?>