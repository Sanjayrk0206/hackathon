<html>
    <head>
        <?php

        session_start();
            include("connection.php");

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                //something was posted
                $Email = $_POST['Email'];
                $Password = $_POST['Password'];

                if(!empty($Email) && !empty($Password))
                {

                    //read from database
                    $query = "select * from user_login where Email = '$Email'";
                    $result = mysqli_query($conn, $query);

                    if($result)
                    {
                        if($result && mysqli_num_rows($result) > 0)
                        {

                            $user_data = mysqli_fetch_assoc($result);
                                                
                            if(password_verify($Password,$user_data['Password']))
                            {
                                $_SESSION['Email'] = $user_data['Email'];
                                header("Location: mainpage/sembook.php",true);
                                die;
                            }else{
                                echo "<script type='text/javascript'>alert('Bad Credentials!');window.location.href='index.html';</script>";
                            }
                        }
                        else
                        {
                            echo "<script type='text/javascript'>alert('Credentials doesn't exist!');window.location.href='index.html';</script>";
                        }
                    }
                }
            }
        ?>
    </head>
</html>