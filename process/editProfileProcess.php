<?php

if(isset($_POST['editprofile'])){
    include('../db.php');

    $id = $_POST['id'];
    $name = $_POST['name'];
    $Phonenum = $_POST['phonenum'];
    $email = $_POST['email'];
    $job = $_POST['job'];
    $membership = $_POST['membership'];

    $query = mysqli_query($con,
            "UPDATE  users SET name='$name', phonenum='$phonenum', email='$email', job='$job', membership='$membership' WHERE id='$id'")
            or die(mysqli_error($con));
            if($query){
                echo
                    '<script>
                    alert("Update Success");
                    window.location = "../index.php"
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