<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP returns value</title>
</head>
<body>
    <?php
    function addFunction($num1, $num2)
    {
        $sum = $num1+ $num2;
        return $sum;
    }
    $return_value = addFunction(10, 20);

    echo " Returned value from the function : $return_value";
    ?>
    
</body>
</html>