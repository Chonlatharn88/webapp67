<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>this is movie</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
<?php
    require 'conn.php';
    $sql = "SELECT * FROM movie";
    $result = $conn->query($sql);
    if(!$result){
        die("Error : ".$conn->$conn_error);
    }
    ?>

<h1 class="text-center mt-3">Movies</h1><br>  
    <table class="table table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>เรื่อง</th>
                <th>นักแสดง</th>
                <th>ราคา</th>
                <th>ประเภทภาพยนต์</th>
                <th>ธุรกรรม</th>
            </tr>
        </thead>
            <tbody>
                <?php // show data by fetch from database
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo"<tr><td>".$row["mv_id"]."</td>" ."<td>".$row["mv_name"]."</td>"."<td>".$row["mv_actor"]."</td>". "<td>".$row["mv_price"]."</td>"."<td>".$row["mv_type"]."</td>"."<td>".$_POST["mv_time"]."<a href='movieedit.php?mv_id=".$row["mv_id"]."'><button> Edit </button></a>"."</td>";
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
        <a href='movieinsert.php'><button class="btn btn-success">Insert</button></a>    
        </div>
</body>
</html>