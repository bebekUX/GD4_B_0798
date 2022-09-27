<?php
    session_start();
    if(isset($_POST['editProfile'])){
        include('../db.php');

            $name = $_POST['name'];
            $phonenum = $_POST['phonenum'];
            $email = $_POST['email'];
            $job = $_POST['job'];
            $membership = $_POST['membership'];
            $id = $_SESSION['id'];

    $query = mysqli_query($con,
            "UPDATE  users SET name = '$name', phonenum = '$phonenum', email = '$email', job = '$job' WHERE id=$id")
            or die(mysqli_error($con));
            if($query){
                echo
                    '<script>
                    alert("Update Success");
                    window.location = "../page/editProfilePage.php"
                    </script>';
                
            }else{
                echo
                    '<script>
                    alert("Update Failed");
                    </script>';
            }
    }else{
        echo
            '<script>
            window.history.back()
            </script>';
    }
?>