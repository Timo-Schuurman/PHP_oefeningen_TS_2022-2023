<?php

////
       // Create connection
       $conn = new mysqli("localhost","root","", "bodypillow");
       // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // get all Users
        $sql = "SELECT * FROM `users`";
        $result = $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // output data of each row
             while($row = $result->fetch_assoc()) {
               // echo "id: " . $row["id"]. " - Name: " . $row["Loginname"]. " " . $row["pass"]. "<br>";
               $users[]= $row;
             }
        } else {
            echo "0 results";
        }
        // print_r($users);

        // Check if inlog user is in users
        $ingelogd = false ;
        if(isset($_POST['knop'])) {

            foreach($users as $user) {
                if($_POST['login'] == $user["Loginname"] && $_POST['pass'] == $user["pass"]) {
                    $ingelogd = true ;
                    $_SESSION['user_loggedin'] = $user["Loginname"];
                }
            }
            
            if($ingelogd) {
                $_SESSION['ingelogd'] = true;
                header('Location: index.php?page=home');
            } else {
                $_SESSION['ingelogd'] = false;
                echo "u heeft geen toegang";
            }
        }

        if(!isset($_SESSION["ingelogd"])) {
            $_SESSION['ingelogd'] = false;
        }

        // // menubesturing
        // if(isset($_GET["page"])) {
        //     $_SESSION['page'] = $_GET["page"];
        // } else {
        //     $_SESSION['page'] = "home";
        // }

        if(isset($_GET["log"])) {
            // session_destroy();
            $_SESSION['ingelogd'] = false;
            header('Location: index.php?page=inlog');
        }
        if(isset($_SESSION["ingelogd"])){

if(!$_SESSION["ingelogd"]) { ?>
<h2>inlog</h2>
                <form action="" method="post">
                    <label>Name</label> <input type="text" name="login"><br>
                    <label>Password</label> <input type="password" name="pass">
                    <input type="submit" name="knop" value="Go!">
                </form> 
                <br>
                <a href="index.php?page=signup">signup</a>
            <?php 
} 
        }