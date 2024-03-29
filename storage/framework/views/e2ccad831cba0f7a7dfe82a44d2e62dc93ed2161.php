<?php

header('Content-Type: application/json');

$con = mysqli_connect("127.0.0.1","root","","");

// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else
{
    $data_points = array();
    
    $result = mysqli_query($con, "SELECT id, bookname, COUNT(*) as TOTAL FROM bookissues GROUP BY bookname HAVING COUNT(*) > 1");
    
    while($row = mysqli_fetch_array($result))
    {        
        $point = array("label" => $row['bookname'] , "y" => $row['TOTAL']);
        
        array_push($data_points, $point);        
    }
    
    echo json_encode($data_points, JSON_NUMERIC_CHECK);
}
mysqli_close($con);

?>