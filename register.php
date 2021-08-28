<html>
    <head>
        <?php

        session_start();

            include("connection.php");

            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                //Updating data to the server
                $Name = $_POST['Name'];
                $Email = $_POST['Email'];
                $Password = $_POST['Password'];
                $Cpassword = $_POST['Cpassword'];
                
                //Check Password and Confirm Password
                if($Cpassword == $Password){
                    //read from database
                    $query = mysqli_query($conn, "select Email from user_login where Email = '$Email'");
                    $result=mysqli_num_rows($query);

                    if($result > 0)
                    {
                        echo "<script type='text/javascript'>alert('Already Exist');window.location.href='index.html';</script>";
                    }else{
                        $hash = password_hash($Password,PASSWORD_DEFAULT);           
                        $query = "insert into user_login (Name,Email,Password) values ('$Name','$Email','$hash')";
                                    
                        mysqli_query($conn, $query);
                        echo "<script type='text/javascript'>alert('Registered Successfully');window.location.href='index.html';</script>";
                    }
                }else{
                    echo "<script type='text/javascript'>alert('Password and Confirm Password are not same');window.location.href='index.html';</script>";
                }
            }
            die;
            ?>
    </head>
</html>