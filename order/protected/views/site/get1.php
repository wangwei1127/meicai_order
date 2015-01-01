<?php
header('Content-type:application/json');
$response = array(
    'status' => '2',
    'text' => '没有这个账号'
);
echo json_encode($response);
?>

