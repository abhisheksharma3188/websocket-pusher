<?php
///////////////////// custom code to make it json api below ///////////////////////////////////
/*header('Content-Type:application/json');
header('Access-Control-Allow-Origin:*');*/
///////////////////// custom code to make it json api above ///////////////////////////////////

// First, run 'composer require pusher/pusher-php-server'

require __DIR__ . '/vendor/autoload.php';

$username=$_POST['username_input'];
$message=$_POST['message_input'];

$pusher = new Pusher\Pusher("1d2dbaa7e24fbbc414ff", "3534bc33c3858bfb927d", "1643052", array('cluster' => 'ap2'));

$pusher->trigger('pusher_chat_app', 'my-event', array('username'=>$username,'message' => $message));

/////////////////////// custom code to give response in json below /////////////////////////////////////////
/*$response_array=['response'=>'success','message'=>'message sent successfully'];
$response_json=json_encode($response_array);
echo $response_json;*/
/////////////////////// custom code to give response in json above /////////////////////////////////////////
?>