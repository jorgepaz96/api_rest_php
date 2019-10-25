<?php 
header('Content-Type: application/json');

require_once("connect.php");

$query = mysqli_query($conn,"SELECT * FROM nota");

$response = array();

while($row = mysqli_fetch_assoc($query)){
    array_push($response,
    array(
        'id'    =>$row['id'],
        'title' =>$row['title'],
        'note'  =>$row['note'],
        'color' =>$row['color'],
        'date'  =>$row['date']
    ));
}

echo json_encode($response);

?>