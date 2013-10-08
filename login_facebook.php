<?php 
include 'src/facebook.php';
 
# Edit bellow line 
$app_id     = '212190592282960'; #add your app_id
$app_secret = '3331ce59f62b0dff455d623f38e82a0a';  #add your secret id

 
$fb = new Facebook(array(
        'appId' => $app_id,
        'secret' => $app_secret
    ));
 
$user_id = $fb->getUser();
 
if($user_id){
    $profile = $fb->api('/me');
    echo '<pre>'.print_r($profile, true).'</pre>'; // we display $profile array
}  else{
    // In case it's not logged in returns 0
    echo '<a href="'.$fb->getLoginUrl().'">Login</a>';
}
?>
