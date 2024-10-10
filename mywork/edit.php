<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    if(!isset($_GET['mid'])){
        header("refresh: 0; url=member.php");
    }
    require 'conn.php';
    $sql = "SELECT * FROM members WHERE mid='$_GET[mid]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1 class="text-center mt-3">Edit Member</h1><br>
<div class="container my-4">
    <form method="post" action="editsuccess.php">
        <p>
            <label class="form-label">ชื่อ</label>
            <input class="form-control" type="text" name="mid" id="mid" value="<?=$row['mid'];?>" hidden>
            <input class="form-control" type="text" name="mname" id="mname" value="<?=$row['mname'];?>" />
        </p>
        <p>
            <label class="form-label">นามสกุล</label>
            <input class="form-control" type="text" name="mlastname" id="mlastname" value="<?=$row['mlastname'];?>" />
        </p>
        <p>
            <label class="form-label">ที่อยู่</label>
            <input class="form-control" type="text" name="maddress" id="maddress" value="<?=$row['maddress'];?>" />
        </p>
        <p>
            <label class="form-label">เบอร์โทร</label>
            <input class="form-control" type="text" name="mtel" id="mtel" value="<?=$row['mtel'];?>" />
        </p>
        <div>
        <input class="btn btn-success" type="submit" value="บันทึก">
        <input class="btn btn-danger" type="reset" name="reset" value="ยกเลิก">
    </form>
        <a href='member.php'><button class="btn btn-primary">Home</button></a>
        </div>
</div>
</body>
</html>