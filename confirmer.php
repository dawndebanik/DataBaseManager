<?php

$code = rand(100000,999999);
$response = array();

$post = json_decode($_POST['json'], true);

if(isset($post['id'])){
    $id=$post['id'];
    mail($id, "Confirmation Code", "Your confirmation code is ".$code.".");
    $response['suc']=1;
    $response['msg']=$code;
}

else{
    $response['suc']=0;
    $response['msg']="id not set";
}

echo json_encode($response);
?>
