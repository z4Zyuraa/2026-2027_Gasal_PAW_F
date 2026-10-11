<?php
// 1.1
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

echo 'fruits = ( "' . $fruits[0] . '", "' . $fruits[1] . '", "' . $fruits[2] . '", "' . $fruits[3] . '", 
"' . $fruits[4] . '", "' . $fruits[5] . '", "' . $fruits[6] . '", "' . $fruits[7] . '")';

echo "<br>";

echo "Nilai dengan indeks tertinggi: " . $fruits[7];
echo "<br><br>"
?>

<?php
// 1.2
$fruits = array("Avocado", "Blueberry", "Cherry");

array_push($fruits, "Durian", "Elderberry", "Fig", "Grape", "Honeydew");

unset($fruits[1]);

echo "Data Blueberry dihapus";
echo "<br>";

echo 'fruits = ( "' . $fruits[0] . '", "' . $fruits[2] . '", "' . $fruits[3] . '", 
"' . $fruits[4] . '", "' . $fruits[5] . '", "' . $fruits[6] . '", "' . $fruits[7] . '" )';

echo "<br>Nilai dengan indeks tertinggi: " . $fruits[7];
?>
