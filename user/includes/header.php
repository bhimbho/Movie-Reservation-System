<?php
require('../db/conn.php');
session_start();
if(!isset($_SESSION['user_id'])){
    header("location:index.php");
}
else{
    $user_id=$_SESSION['user_id'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="description" content="bootstrap default admin template">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Amovie Admin Dashboard</title>


    <!-- Start global css -->
    <link rel="stylesheet" href="assets/global/plugins/Waves/dist/waves.min.css"/>
    <link rel="stylesheet" href="assets/global/plugins/bootstrap/dist/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/icons_fonts/font-awesome/css/font-awesome.min.css"/>
    <!-- End global css -->

    <!-- Start page plugin css -->
    <link rel="stylesheet" href="assets/global/plugins/jqvmap/dist/jqvmap.css"/>
    <link rel="stylesheet" href="assets/global/plugins/datatables/media/css/jquery.dataTables.min.css"/>
    <link rel="stylesheet" href="assets/global/plugins/datatables/media/css/dataTables.bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/global/plugins/dropify/dist/css/dropify.min.css"/>
    <!-- End page plugin css -->

    <!-- Start template global css -->
    <link href="assets/global/css/components.min.css" type="text/css" rel="stylesheet"/>
    <!-- End template global css -->

    <!-- Start layout css -->
    <link rel="stylesheet" href="assets/layouts/layouts_left_menu/left_menu_layout.min.css"/>
    <!-- End layout css -->

    <!-- Start favicon ico -->
    <link rel="icon" href="assets/favicon/prince.ico" type="image/x-icon"/>
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/prince-192x192.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/prince-180x180.png">
    <!-- End favicon ico -->

</head>
<body class="nav-medium">