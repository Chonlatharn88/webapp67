<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert Movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container my-5">
<form method="post" action="movieinsertsuccess.php">
    <p>
        <label class="form-label">ID</label>
        <input class="form-control" type="text" name="mv_id" id="mv_id">
    </p>
    <p>
        <label class="form-label">เรื่อง</label>
        <input class="form-control" type="text" name="mv_name" id="mv_name">
    </p>
    <p>
        <label class="form-label">นักแสดง</label>
        <input class="form-control" type="text" name="mv_actor" id="mv_actor">
    </p>
    <p>
        <label class="form-label">ราคา</label>
        <input class="form-control" type="text" name="mv_price" id="mv_price">
    </p>
    <p>
        <label class="form-label">ประเภทภาพยนต์</label>
        <input class="form-control" type="text" name="mv_type" id="mv_type">
    </p>
    <p>
        <label class="form-label">เวลา</label>
        <input class="form-control" type="text" name="mv_time" id="mv_time">
    </p>


        <input class="btn btn-success" type="submit" value="บันทึก">
        <a href='movie.php'> <button class="btn btn-primary"> Home </button></a>
    </form>  
</div>
    
</body>
</html>