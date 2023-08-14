<?php

$pdo = require_once 'connect.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){
    $user=$_POST['user'];
    $username = $user['username'];
    $password=$user['password'];

   

    $formName = $username;
    $formPass = $password;

    $insert = 'insert into users (username, password) values (:formName, :formPass)';

    $statement = $pdo->prepare($insert);
    $statement->execute([
        ':formName' => $formName,
        ':formPass'=>$formPass
    ]);

    
    $data = "username: $username;\n" ." password: $password;\n";

    //file_put_contents('values.php', $data, FILE_APPEND);
    


    

}



