<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<div class="container my-4">
<form method="post" action="insertsuccess.php">
    <div class="mb-3">
        <label class="form-label" class="form-label">ID</label>
        <input class="form-control" type="text" name="mid" id="mid">
    </div>
    <div class="mb-3">
        <label  class="form-label">ชื่อ</label>
        <input class="form-control" type="text" name="mname" id="mname">
    </div>
    <div class="mb-3">
        <label class="form-label" class="form-label">นามสกุล</label>
        <input class="form-control" type="text" name="mlastname" id="mlastname">
    </div>
    <div class="mb-3">
        <label class="form-label" class="form-label">ที่อยู่</label>
        <input class="form-control" type="text" name="maddress" id="maddress">
    </div>
    <div class="mb-3">
        <label  class="form-label">เบอร์โทร</label>
        <input class="form-control" type="text" name="mtel" id="mtel">
    </div>
        <input class="btn btn-success" type="submit" value="บันทึก">
        <a href='member.php'> <button class="btn btn-primary"> Home </button></a>
    </form>  
</div>
    
</body>
</html>