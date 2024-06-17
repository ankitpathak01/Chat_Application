<?php



session_start();
if(!isset($_SESSION['unique_id'])){
    header("location:../login.php");
}else{
    include_once'config.php';
    $outgoing=mysqli_real_escape_string($conn,$_POST['outgoing_id']);
    $incoming=mysqli_real_escape_string($conn,$_POST['incoming_id']);
    $msg=mysqli_real_escape_string($conn,$_POST['message']);
    
    
     if(!empty($msg)){
        // $sql=mysqli_query($conn,"INSERT INTO messages(incoming_id,outgoing_id,msg) VALUES('{$incoming}','{$outgoing}','{$msg}')") or die();
        $sql=mysqli_query($conn,"INSERT INTO `messages` ( `incoming_id`, `outgoing_id`, `msg`) VALUES ( '{$incoming}', '{$outgoing}', '{$msg}')");
       
     }
    
}
?>



<!-- INSERT INTO `messages` (`msg_id`, `incoming_id`, `outgoing_id`, `msg`) VALUES ('1', '1', '1', 'Hiii'); -->