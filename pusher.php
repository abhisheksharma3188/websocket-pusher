<?php
///////////////////// custom code to make it json api below ///////////////////////////////////
/*header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');*/
///////////////////// custom code to make it json api above ///////////////////////////////////

// First, run 'composer require pusher/pusher-php-server'

require __DIR__ . '/vendor/autoload.php';

$username=$_POST['username_input'];
$message=$_POST['message_input'];

$pusher = new Pusher\Pusher("APP_KEY", "APP_SECRET", "APP_ID", array('cluster' => 'APP_CLUSTER'));

$pusher->trigger('my-channel', 'my-event', array('username'=>$username,'message' => $message));

/////////////////////// custom code to give response in json below /////////////////////////////////////////
/*$response_array=['response'=>'success','message'=>'message sent successfully'];
$response_json=json_encode($response_array);
echo $response_json;*/
/////////////////////// custom code to give response in json above /////////////////////////////////////////
?>
