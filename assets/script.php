<?php 

// ini_set('session.gc_maxlifetime', 10);
// ini_set("session.cookie_lifetime", 10);
// setcookie(session_name(), '', time() - 256, '/');
// session_start();

$inactive = 256; 
ini_set('session.gc_maxlifetime', $inactive); 

session_start();

if (isset($_SESSION['time_session']) && (time() - $_SESSION['time_session'] > $inactive)) {
   
    session_unset();     
    session_destroy();   
}
$_SESSION['time_session'] = time(); 

if (isset($_POST['load'])) {

// try {

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['img_session'])) {
      
        $imageType = mime_content_type($_FILES['img_session']['tmp_name']);
        if (strpos($imageType, 'image/') === 0) {
           
            $imageData = base64_encode(file_get_contents($_FILES['img_session']['tmp_name']));
            $_SESSION['img_session'] = "data:$imageType;base64,$imageData";}

            header("Refresh:0");
}
// } catch (Exception $e) {
//     echo "erreur";
// }
}

if (isset($_POST['reset'])) {

    unset($_SESSION['img_session']);
    header("Refresh:0");

    
}
if (isset($_POST['refresh'])) {
    header("Refresh:0");
}


if(isset($_SESSION['img_session'])) {
    $img = $_SESSION['img_session'];
} else {
    $img = 'assets/img.jpg';
}