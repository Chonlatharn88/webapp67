<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is member</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM members";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);
    }
    ?>
<h1 class="text-center mt-3">Members</h1><br>  
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>ชื่อ-นามสกุล</th>
                <th>ที่อยู่</th>
                <th>เบอร์โทร</th>
                <th>ธุรกรรม</th>
            </tr>
        </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["mid"]."</td>"."<td>".$row["mname"]." ".$row["mlastname"]."</td>"."<td>".$row["maddress"]."</td>"."<td>".$row["mtel"]."</td>"."<td>"."<a href='edit.php?mid=".$row["mid"]."'><button> Edit </button></a>"."</td>";
                            echo "</tr>";    
                        }
                    }else {
                        echo "0 results";
                    }
                    $conn->close();
                ?>
            </tbody>
    </table>  
        <br>
        <div class="text-center">
        <a href='insert.php'><button class="btn btn-success"> Insert</button></a>
        </div>
    
</body>
</html>