<html>
    <body>
    <h3>Login Form</h3>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email" > </div>
        <div>
            <label for ="password">Password</label>
            <input type="password" name="password" ></div>
        <div>    
        <button type="submit">Login</button> </div>
        </form>


    </body>
    </html>
    <?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email=$_REQUEST['email'];
    $password =$_REQUEST['password'];
    if(empty($email))
    echo "email field is empty<br>";
}
    

    if (empty($password))
    echo "password field is empty";
    else {
        echo $email . "; " . $password;
        
    }


?>