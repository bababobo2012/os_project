<?php
    session_start();
    if( !isset($_SESSION['user_id']) ){
        header("location: ../login.php");
    }else{
        if(isset($_POST['type_booking'])){
            include('db.php');
            $type_booking = $_POST['type_booking'];
            $id = $_SESSION['user_id'];
            $sql = "INSERT INTO booking(Booking_id,Booking_member,Booking_country) VALUES (NULL,'$id','$type_booking')";
            if (mysqli_query($conn,$sql)) {
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Booking success');
                window.location.href='../index.php';
                </script>");
            }
            mysqli_close($conn);
        }
    }
?>