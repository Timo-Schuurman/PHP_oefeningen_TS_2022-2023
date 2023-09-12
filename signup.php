
<?php
    // session_start();
    $_SESSION['ingelogd'] = false;
    if($_SERVER["REQUEST_METHOD"] == "POST")
    {
       $server = "localhost";
       $user = "root";
       $pass = "";
       $db = "bodypillow";
       
       $conn = new mysqli("localhost","root","", "bodypillow");
       
       if($conn -> connect_errno)
       {
          echo "Database connection failed!<BR>";
          echo "Reason: ", $conn->connect_error;
          exit();
       }
       else
       {
            //print_r($_POST); die();
            $Loginname = $_POST["loginname"];
            $pass = $_POST["pass"];

            $sql = "INSERT INTO `users`(`loginname`, `pass`)
                VALUES ('$Loginname', '$pass')";

            $qry = $conn -> query($sql);
            if($qry)
            {
                echo "Registration done successfully!";
                header('Location: index.php?page=inlog');
                
                // block of code, to process further...
            }
            else
            {
                echo "Something went wrong while registration!<BR>";
                echo "Error Description: ", $conn -> error;
            }
       }
       $conn -> close();
    }
   
    
?>

        <form action="#" method="post">
            <p>dit is signup<p>
            <label>Name</label> <input type="text" name="loginname"><br>
            <label>Password</label> <input type="password" name="pass">
            <input type="submit" name="knop" value="Register">
           
        </form> 