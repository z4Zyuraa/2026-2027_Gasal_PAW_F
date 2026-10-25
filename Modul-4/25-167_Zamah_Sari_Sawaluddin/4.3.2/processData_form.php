<!DOCTYPE html>
<html>
<head>
    <title>Form Input Handling</title>

    <style>
        body {
            font-family: Arial;
            margin: 30px;
        }

        .field {
            margin-bottom: 12px;
        }

        .field label {
            display: inline-block;
            width: 140px;
            vertical-align: top;
        }
    </style>
</head>
<body>

<?php
$errors = array();

if (isset($_POST['surname']))
{
    require 'validate.inc';

    validateName($errors, $_POST, 'surname');

    if ($errors)
    {
        echo '<h1>Invalid, correct the following errors:</h1>';

        foreach ($errors as $field => $error)
        {
            echo "$field $error<br/>";
        }

        // tampilkan kembali form
        include 'form.inc';
    }
    else
    {
        echo 'Form submitted successfully with no errors';
    }
}
else
{
    // tampilkan form
    include 'form.inc';
}
?>

</body>
</html>