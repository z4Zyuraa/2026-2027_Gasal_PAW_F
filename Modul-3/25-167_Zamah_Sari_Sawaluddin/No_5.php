
<?php
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665")
);

array_push($students, array("Daniel", "220404", "0812345611"));
array_push($students, array("Elena", "220405", "0812345622"));
array_push($students, array("Fiona", "220406", "0812345633"));
array_push($students, array("Gabe", "220407", "0812345644"));
array_push($students, array("Hannah", "220408", "0812345655"));
?>

<table border="1" cellpadding="10" cellspacing="1">
    <tr>
        <th>Name</th>
        <th>NIM</th>
        <th>Mobile</th>
    </tr>

    <tr>
        <td><?php echo $students[0][0]; ?></td>
        <td><?php echo $students[0][1]; ?></td>
        <td><?php echo $students[0][2]; ?></td>
    </tr>

    <tr>
        <td><?php echo $students[1][0]; ?></td>
        <td><?php echo $students[1][1]; ?></td>
        <td><?php echo $students[1][2]; ?></td>
    </tr>

    <tr>
        <td><?php echo $students[2][0]; ?></td>
        <td><?php echo $students[2][1]; ?></td>
        <td><?php echo $students[2][2]; ?></td>
    </tr>

    <tr>
        <td><?php echo $students[3][0]; ?></td>
        <td><?php echo $students[3][1]; ?></td>
        <td><?php echo $students[3][2]; ?></td>
    </tr>

    <tr>
        <td><?php echo $students[4][0]; ?></td>
        <td><?php echo $students[4][1]; ?></td>
        <td><?php echo $students[4][2]; ?></td>
    </tr>

    <tr>
        <td><?php echo $students[5][0]; ?></td>
        <td><?php echo $students[5][1]; ?></td>
        <td><?php echo $students[5][2]; ?></td>
    </tr>

    <tr>
        <td><?php echo $students[6][0]; ?></td>
        <td><?php echo $students[6][1]; ?></td>
        <td><?php echo $students[6][2]; ?></td>
    </tr>

    <tr>
        <td><?php echo $students[7][0]; ?></td>
        <td><?php echo $students[7][1]; ?></td>
        <td><?php echo $students[7][2]; ?></td>
    </tr>
</table>
