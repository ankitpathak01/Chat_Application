<?php
session_start();
if(!isset($_GET['unique_id'])){
    header("../login.php");}
    else{
    include_once 'config.php';
   
    
    $outgoing=mysqli_real_escape_string($conn,$_POST['outgoing_id']);
    $incoming=mysqli_real_escape_string($conn,$_POST['incoming_id']);
    $output="";
   
    $sql="SELECT * FROM messages
    LEFT JOIN users ON users.unique_id=messages.outgoing_id
    WHERE (outgoing_id='$outgoing' AND incoming_id='$incoming') OR (outgoing_id='$incoming' AND incoming_id='$outgoing') ORDER BY msg_id DESC";
   
    $query=mysqli_query($conn,$sql);
    
    
    
    }


?>  

