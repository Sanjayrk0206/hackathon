<html>
<head>
    <?php
        session_start();

            include("../connection.php");
            if($_SERVER['REQUEST_METHOD'] == 'POST'){

                //Updating data to the server
                $FileName = $_POST['FileName'];
                $content = $_POST['content'];
                $Email = $_SESSION['Email'];

                $file = $FileName+'.txt';
                // Write the contents to the file, 
                // using the FILE_APPEND flag to append the content to the end of the file
                // and the LOCK_EX flag to prevent anyone else writing to the file at the same time
                file_put_contents($file, $content, FILE_APPEND | LOCK_EX);
                
            }
            
            header("Location: sembook.php",true);
            die;
            ?>
    </head>
</html>