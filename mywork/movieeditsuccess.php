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
    $sql_update="UPDATE movie SET mv_id='$_POST[mv_id]',mv_name='$_POST[mv_name]' ,mv_actor='$_POST[mv_actor]' ,mv_price='$_POST[mv_price]'
    ,mv_type='$_POST[mv_type]',mv_time='$_POST[mv_time]' WHERE mv_id='$_POST[mv_id]' ";
    $result= $conn->query($sql_update);
    if(!$result) {
        die("Error God Damn it : ". $conn->error);
    } else {
        echo "Edit Success <br>";
        header("refresh: 1; url=movie.php");
    }
    ?>
</body>
</html>