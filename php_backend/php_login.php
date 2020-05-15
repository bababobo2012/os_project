<?php
    session_start();
    if( isset($_POST["username"]) && isset($_POST["password"]) ){
        include('db.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $sql = "SELECT * FROM member WHERE Member_email='".$username."' AND Member_password='".$password."'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)==1){
            $row = mysqli_fetch_array($result);
            $_SESSION['user_id'] = $row['Member_id'];
            $_SESSION['username'] = $row['Member_email'];
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('login success');
            window.location.href='../index.php';
            </script>");
        }else{
            echo ("<script LANGUAGE='JavaScript'>
            window.alert('email or password invalid');
            window.location.href='../login.php';
            </script>");
        }
        mysqli_close($conn);
    }
?>