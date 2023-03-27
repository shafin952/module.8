<?php
if($_SERVER['REQUEST_METHOD']=='POST'){

if(isset($_POST['first_name']) || isset($_POST['last_name']) || isset($_POST['email']) || isset($_POST['password']) || $_POST['confirm_password'] ){
echo "you are logged  in";
}
else{
    echo" fill all fields are require";
}

if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    echo"please enter a validate email";
}

}