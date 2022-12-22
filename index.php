<?php 

// include './connect.php';
// $table = "users";
// // $name = filterRequest("namerequest");
// $data = array( 
// "users_name" => "wael",
// "users_email" => "na@gmail.com",
// "users_phone" => "8585745",
// "users_verfiycode" => "3243243",       
// );
// $count = insertData($table , $data);

$to = "megdam55@gmail.com";
$title = "hi";
$body = "i am naif";
$header  = "From:naifmalfalah@gmail.com" . "\n" . "CC: n.alfalah.ye@gmail.com";
mail($to, $title, $body, $header);