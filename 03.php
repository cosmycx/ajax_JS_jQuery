<?php

$inputJSON = file_get_contents('php://input');
// echo $inputJSON;

// echo '-----';
$input= json_decode( $inputJSON, TRUE );
// echo var_dump($input);

// echo '-----';
echo json_encode($input);

?>