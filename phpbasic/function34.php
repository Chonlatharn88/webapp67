<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP returns value</title>
</head>
<body>
    <?php
    function printMe($param = NULL)
    {
        print $param;
    }
    printMe("this is the defaul value ==> ");
    printMe();
    ?>
    
</body>
</html>