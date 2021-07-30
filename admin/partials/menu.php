<?php 

    include('../config/constants.php'); 
    include('login-check.php');

?>


<html>
    <head>
        <title>Food Order Website - Home Page</title>

        <link rel="stylesheet" href="../css/admin-style.css">
    </head>
    
    <body>
        <!-- Menu Section Starts -->
        <div class="menu text-center">
            <div class="wrapper">
                <ul>
                    <li><a class="menu-items" href="index.php">Home</a></li>
                    <li><a class="menu-items" href="manage-admin.php">Admin</a></li>
                    <li><a class="menu-items" href="manage-category.php">Category</a></li>
                    <li><a class="menu-items" href="manage-food.php">Food</a></li>
                    <li><a class="menu-items" href="manage-order.php">Order</a></li>
                    <li><a class="menu-items" href="logout.php">Logout</a></li>
                </ul>
            </div>
        </div>
        <!-- Menu Section Ends -->