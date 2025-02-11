<?php
require_once ('init.php');
ob_start();
/*$aantalUsers = User::find_all();
$aantalComments =  Comment::find_all();
$aantalPhotos = Photo::find_all();*/
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/gig69e05bydko6svxtr9z2p96s6rcucx9gqyqdpzurfax25f/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'a11ychecker advcode casechange formatpainter linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tinycomments tinymcespellchecker',
            toolbar: 'a11ycheck addcomment showcomments casechange checklist code formatpainter pageembed permanentpen table',
            toolbar_mode: 'floating',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Annelore',
        });
    </script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load("current", {packages:["corechart"]});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Task', 'Hours per Day'],
                ['Views',     <?php echo $session->count; ?>],
                ['Comments',      <?php echo Comment::count_all(); ?>],
                ['Users',    <?php echo User::count_all(); ?>],
                ['Photos',   <?php echo Photo::count_all(); ?>]

            ]);

            var options = {
                // legend: 'none',
                pieSliceText: 'value',
                title: 'My blog'
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart'));
            chart.draw(data, options);
        }
    </script>
</head>

<body id="page-top">
<!-- Page Wrapper -->
<div id="wrapper">

