<?php
session_start();
if (!isset($_SESSION['admin_id'])) {
    // User is not logged in, redirect to the login page
    header('Location: logistics_adminlogin.php');
}
$adminID = $_SESSION['admin_id'];
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" 
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" 
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/header.css">
</head>
<body>
<div class="sidebar">
    <div class="logistic-logo">
        <img src="images/logistic logo-circle.png" alt="" class="admin-logo">
        <p>Cybertech<br>Logistics</p>
    </div>
    <div class="link-tag">
        <a href="assign_delivery.php" class="list-group-item" onclick="setActive(this)">
            <i class="fa-solid fa-truck fa-lg"></i>Assign Delivery</a>
        <a href="delivery_list.php" class="list-group-item" onclick="setActive(this)">
            <i class="fas fa-clipboard-list fa-lg"></i>Delivert List</a>
        <a href="account_rider.php" class="list-group-item" onclick="setActive(this)">
            <i class="far fa-user-circle fa-lg"></i>Accounts</a>
    </div>
</div>

  <!-- Page Content -->
  <div class="content">
    <div class="navbar">
      <img src="images/adminAccount.jpg" alt="" class="admin-account">
      <p><b>Jane Dee</b><br>Admin</p>
    </div>

