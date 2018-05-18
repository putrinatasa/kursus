<?php
    include 'db_connection.php';
 
    $conn = OpenCon();
 
    $sql = "SELECT  user.id, nama
           FROM user
           JOIN matpel s USING (id)";
 
    $result = mysqli_query($conn, $sql);
 
    if (mysqli_num_rows($result) > 0) {
         $dataArray = [];
         while($row = mysqli_fetch_assoc($result)) {
           array_push($dataArray, $row);
         }
         echo json_encode($dataArray);
    }
?>
