<?php



$id = $_REQUEST['id'];

$password = $_REQUEST['password'];

$name = $_REQUEST['name'];

$type = $_REQUEST['user'];

$fname = $_REQUEST['fname'];



if($id == null || $password == null || $name == null){

    echo "null username/password/id...";

}else{

        if($type == "user"){

            $newUserType = "User";

        }else{

            $newUserType = "Admin";

        }

        $user = $id."|".$password."|".$name."|".$newUserType."\r\n";

        $file = fopen('user.txt', 'a');

        fwrite($file, $user);

        if($fname == 'signup'){

            header('location: login.php');

        }else{

            echo "Invalid user information.";

        }



}



?>