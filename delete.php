<?php 
header('Content-Type: application/json');
$id = 0;
$title = "";
$note = "";
$color = 0;
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $id = $_POST['id'];    

    require_once("connect.php");

    $query = "DELETE FROM nota WHERE id=$id";

    if(mysqli_query($conn,$query)){
        $response['success'] = true;
        $response['message'] = 'Successfully';
    }else{
        $response['success'] = false;
        $response['message'] = 'Failure';
    }
}else{
    $response['success'] = false;
    $response['message'] = 'Error!';
}

echo json_encode($response);

?>