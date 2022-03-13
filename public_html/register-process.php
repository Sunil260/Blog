

<?php
echo var_dump($_SERVER["REQUEST_METHOD"]);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
//Save $Post array
$register_form = $_POST;


// Variables
$First_Name = $register_form["first_Name"];
$Last_Name = $register_form["last_Name"];
$Email = $register_form["email"];
$User_Password = $register_form["password"];


$sql="INSERT INTO Blog_Posts.TBL_User (First_Name, Last_Name, Email, Password) VALUES ('$First_Name', '$Last_Name','$Email','$User_Password')";
$result = ($connection -> query($sql));

if(!isset($result)){

  
    $message = "There was an error";
}else{
    $message = "Succesfully registered";
   
}

}
?>