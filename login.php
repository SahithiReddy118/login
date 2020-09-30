<?php
session_start();
?>
<html>
    <head>
        <title>grofits</title>
        <link rel="stylesheet" href="logincss.php">
        
    </head>
    <body>
        <?php
        include 'dbcon.php';
           
        if(isset($_POST['submit'])){
            $email=$_POST['email'];
            $password=$_POST['password'];
            $email_search="select * from registration where email='$email' ";
            $query=mysqli_query($con,$email_search);

            $email_count=mysqli_num_rows($query);
            if($email_count){
                $email_pass=mysqli_fetch_assoc($query);
                $db_pass=$email_pass['password'];
                $_SESSION['username']=$email_pass['username'];
                $pass_decode=password_verify($password,$db_pass);

                if($pass_decode){
                    echo "login successful";
                    ?>
                    <script>
                        location.replace("dashboard.php");
                        </script>
                    <?php
                }else{
                    echo "password incorrect";
                }
                }else{
                    echo "invalid email";
                }
            }
        

        ?>

        <div class="main">
            <h1>Login</h1>
            <form method="POST" action="dashboard.php">
                <div class="field">
                
                <input type="email" placeholder="email" name="email" required>
                </div>
                <div class="field">
                
                <input type="password" placeholder="Password" name="password" required>
                </div>
                <div class="pass">Forget Password?</div> 
                
                <button class="login" type="submit" name="submit">LOGIN</button>
                <div class="signup">
                    Not a member?<a href="reg.php">Signup</a>
                </div>
                
            </form>
        </div>
   
    </body>
</html>