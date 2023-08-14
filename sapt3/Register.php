<html>
    <body>
        <h3>Register Form</h3>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" required> </div>
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" required> </div>
        <div>
            <label for ="password">Password</label>
            <input type="password" name="password" required></div>
        <div>    
            <button type="submit">Register</button> </div>
        </form>

        
       
    </body>
</html>

<?php

if($_SERVER ["REQUEST_METHOD"] == "POST"){
    
    $name=$_POST["name"];
    $email = $_POST["email"];
    $password =$_POST["password"];
    
    // $data = $name . ", " . $email . ", " . $password;
    $data = "name: $name;" . "email: $email;" . "password: $password;\n";
    file_put_contents("register.csv", $data, FILE_APPEND);

    echo "Accound has been created.<br>";
}







?>