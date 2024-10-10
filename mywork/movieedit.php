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
    if(!isset($_GET['mv_id'])){
        header("refresh: 0; url=movie.php");
    }
    require 'conn.php';
    $sql = "SELECT * FROM movie WHERE mv_id='$_GET[mv_id]'";
    $result = $conn->query($sql);
    $row = mysqli_fetch_array($result);
    ?>
    <h1 class="text-center mt-3">Edit Movie</h1><br>
<div class="container my-4">
    <form method="post" action="movieeditsuccess.php">
        <p>
            <label class="form-label">เรื่อง</label>
            <input class="form-control" type="text" name="mv_id" id="mv_id" value="<?=$row['mv_id'];?>" hidden>
            <input class="form-control" type="text" name="mv_name" id="mv_name" value="<?=$row['mv_name'];?>" />
        </p>
        <p>
            <label class="form-label">นักแสดง</label>
            <input class="form-control" type="text" name="mv_actor" id="mv_actor" value="<?=$row['mv_actor'];?>" />
        </p>
        <p>
            <label class="form-label">ราคา</label>
            <input class="form-control" type="text" name="mv_price" id="mmv_price" value="<?=$row['mv_price'];?>" />
        </p>
        <p>
            <label class="form-label">ประเภทภาพยนต์</label>
            <input class="form-control" type="text" name="mv_type" id="mv_type" value="<?=$row['mv_type'];?>" />
        </p>
        <p>
            <label class="form-label">เวลา</label>
            <input class="form-control" type="text" name="mv_time" id="mv_time" value="<?=$row['mv_time'];?>" />
        </p>

        <div>
        <input class="btn btn-success" type="submit" value="บันทึก">
        <input class="btn btn-danger" type="reset" name="reset" value="ยกเลิก">
    </form>
        <a href='movie.php'><button class="btn btn-primary"> Home</button></a>
        </div>
</div>
</body>
</html>