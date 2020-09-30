<?php
session_start();
?>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="css.php">
    </head>
    <body>
    <?php
    include 'dbcon.php';
        if(isset($_POST['submit'])){
         $username=mysqli_real_escape_string($con,$_POST['username']);
         $email=mysqli_real_escape_string($con,$_POST['email']);
         $mobile=mysqli_real_escape_string($con,$_POST['mobile']);
         $password=mysqli_real_escape_string($con,$_POST['password']);
         $cpassword=mysqli_real_escape_string($con,$_POST['cpassword']);

         $pass=password_hash($password,PASSWORD_BCRYPT);
         $cpass=password_hash($cpassword,PASSWORD_BCRYPT);

         $emailquery="select * from registration where email='$email' ";
         $query=mysqli_query($con,$emailquery);

         $emailcount=mysqli_num_rows($query);
         if($emailcount>0){
             echo "email already exists";
         }else{
             if($password===$cpassword){
                $insertquery="insert into registration(username, email, mobile, password, cpassword) values('$username','$email','$mobile','$pass','$cpass')";
             
                $iquery=mysqli_query($con,$insertquery);
                    if($iquery){
                        ?>
                          <script>
                              alert("inserted successful");
                    </script>
                    <?php
                    }else{
                        ?>
                        <script>
                            alert("not inserted ");
                    </script>
                    <?php
                    }
            }else{
                 echo "password are not matching";
             }
         }
        }
    ?>

        <div class="container">
            <h1>Registration form</h1>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
            <div>
                <input type="text" name="username" placeholder="Username" required>
            </div>
            <div>
                <input type="email" name="email" placeholder="email" required>
            </div>
            <div>
                <input type="number" name="mobile" placeholder="Mobile Number" required>
            </div>
            <div>
                <input type="password" name="password" placeholder="password" required>
            </div>
            <div>
                <input type="password" name="cpassword" placeholder="confirm password" required>
            </div>
            <button type="submit" name="submit">Register</button>
    </form>
        </div>

    </body>
</html>