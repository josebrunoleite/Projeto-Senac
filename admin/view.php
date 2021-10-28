<?php 

include_once('../config/connect.php');

$stmt = $conn->prepare("SELECT * FROM products ORDER BY id");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

 foreach ($results as $row) {
    foreach ($row as $key => $value) {
        echo "<strong>".$key."</strong>".$value."<br/>";
    }
 }

 ?>
 
<html>
<body>
<img src="<?=$post["image"]?>" width="80px" alt="">
</body>
</html>