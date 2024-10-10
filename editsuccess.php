<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editsuccess</title>
</head>
<body>
    <?php
    require 'conn.php';
    $sql_update="UPDATE members SET mname='$_POST[mname]',mlastname='$_POST[mlastname]' ,maddress='$_POST[maddress]' ,mtel='$_POST[mtel]' WHERE mid='$_POST[mid]' ";
    $result= $conn->query($sql_update);
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {
        echo "Edit Success <br>";
        header("refresh: 1; url=member.php");
    }
    ?>
</body>
</html>