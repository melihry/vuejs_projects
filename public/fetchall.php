<?php
$connect = new PDO("mysql:host=localhost;dbname=vue_sql", "root", "");
$received_data = json_decode(file_get_contents("php://input"));
 
$data = array();
if($received_data->action == 'fetchall') //axios.post('fetchall.php', { action:'fetchall'
{
    $query = "
     SELECT * FROM v_user 
     ORDER BY id DESC
     ";
    $statement = $connect->prepare($query);
    $statement->execute();
    while($row = $statement->fetch(PDO::FETCH_ASSOC))
    {
      $data[] = $row;
    }
    echo json_encode($data);
     
}

?>