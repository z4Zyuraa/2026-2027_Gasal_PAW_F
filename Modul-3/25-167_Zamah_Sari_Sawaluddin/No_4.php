<?php
// 4.1
$height = array("Andy" => "176", "Barry" => "165", "Charlie" => "170");

$height["David"] = "180";
$height["Ethan"] = "172";
$height["Frank"] = "168";
$height["George"] = "175";
$height["Harry"] = "182";

echo 'height = ("Andy"=>"' . $height["Andy"] . '", "Barry"=>"' . $height["Barry"] . '", "Charlie"=>"' . $height["Charlie"] . '", "David"=>"' . $height["David"] . '", 
"Ethan"=>"' . $height["Ethan"] . '", "Frank"=>"' . $height["Frank"] . '", "George"=>"' . $height["George"] . '", "Harry"=>"' . $height["Harry"] . '")<br><br>';

foreach ($height as $name => $tall) {
    echo $name . " is " . $tall . " cm tall.";
    echo "<br>";
}
echo "<br><br>";
?>

<?php
// 4.2
$weight = array("Andy" => "70", "Barry" => "65", "Charlie" => "75");

echo 'weight = ("Andy"=>"' . $weight["Andy"] . '", "Barry"=>"' . $weight["Barry"] . '", "Charlie"=>"' . $weight["Charlie"] . '")<br><br>';

$n = array("Andy", "Barry", "Charlie");

for ($a = 0; $a < 3; $a++) {
    echo $n[$a] . " is " . $weight[$n[$a]] . " kg.<br>";
}
?>