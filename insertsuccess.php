<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insertsuccess</title>
</head>
<body>
<?php
    require 'conn.php';
    $sql_update="INSERT INTO members (mid,mname,mlastname,maddress,mtel) VALUES ('$_POST[mid]','$_POST[mname]','$_POST[mlastname]','$_POST[maddress]','$_POST[mtel]')";
    $result= $conn->query($sql_update);
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {
    echo "Insert Success <br>";
    header("refresh: 1; url=member.php");
    }
?>   
</body>
</html>