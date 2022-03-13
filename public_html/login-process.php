<?php

use LDAP\Result;

if ($_SERVER["REQUEST_METHOD"] == "POST"){
//Save $Post array
$login_form = $_POST;




// Variables
$Email = $login_form["email"];
$User_Password = $login_form["password"];
$post_editor = null;

$sql="SELECT * FROM Blog_Posts.TBL_User Where Email = '$Email' and Password = '$User_Password'";
$result = ($connection -> query($sql)) -> fetch_assoc();

if(!isset($result)){
    //echo "Email or password is incorrect." ;
    $error = "Your Email or Password is invalid";
}else{
    $error = NULL;
    $_SESSION['User'] = $result['User_id'];
    
    if($result['Authorization']){
      
       // $post_editor= "<a href=\"./post-form.php\">Posts</a>";
        header ("location: post-form.php");
        exit(0);
    }
}


}
?>