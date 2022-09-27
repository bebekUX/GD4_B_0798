<?php
session_start();
    if(isset($_POST['EditSeries'])){
        include('../db.php');
       
        $name = $_POST['name'];
        $genre =  $_POST['genre'];
        $realese = $_POST['realese'];
        $episode = $_POST['episode'];
        $season = $_POST['season'];
        $synopsis = $_POST['synopsis'];
        
        $id = $_SESSION['SeriesID'];;
        $query = mysqli_query($con,
            "UPDATE series SET name = '$name', genre ='$genre', realese = '$realese', episode = '$episode',season = '$season', synopsis = '$synopsis' WHERE id=$id")
            or die(mysqli_error($con));

        if($query) {
            echo
                '<script>
                window.location = "../page/ListSeriesPage.php"
                </script>';
        } else {
            echo
                '<script>
                alert("Edit Gagal");
                </script>';
        }
    } else {
        echo
            '<script>
            alert("Edit Gagal");
            window.history.back()
            </script>';
    }
?>