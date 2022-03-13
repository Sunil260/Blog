<?php

use LDAP\Result;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
//Save $Post array
$post_form = $_POST;

// Variables
$Title = $post_form["title"];
$Description = $post_form["description"];
$Image = $post_form["image"];
$Approved = $post_form["approve"];
// echo $Approved;
// var_dump( $_SESSION);
$Author = $_SESSION["User"];
var_dump( $Author);

$sql="INSERT INTO Blog_Posts.TBL_Blog_Post ( Title, Author_id, Description, Approved,Images) VALUES ('$Title', '$Author','$Description', '$Approved','$Image' )";
var_dump($sql);

$result = ($connection -> query($sql));
echo "Error: " . $sql . "<br>" . $connection->error;

var_dump($result);
if(!$result){
    //echo "Email or password is incorrect." ;
    $error = "Error";
}else{
    $error = NULL;
    echo"success";
}


}
?>