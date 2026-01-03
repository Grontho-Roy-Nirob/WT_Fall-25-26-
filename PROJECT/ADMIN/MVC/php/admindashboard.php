<?php
// dashboard.php
?>
<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="../Css/admindashboard.css">
</head>
<body>

<div class="container">

    <!-- LEFT MENU -->
    <div class="sidebar">
        <h2>Admin Menu</h2>
        <hr>
        <a href="../php/viewuser.php">View Registered Users</a>
        <a href="../php/discount.php">Assign Discount to Books</a>
        <a href="#">View Customer Orders</a>
        <a href="#">Book Modification</a>
        <a href="#">Generate Sales Report</a>
        <a href="#">Category Management</a>
    </div>

    <!-- RIGHT CONTENT -->
    <div class="content">
        <h1>Admin Dashboard</h1>
        <hr>

        <div class="cards">

            <div class="card" id="user-card">
                <h3>Registered Users</h3>
                <p>See all users who registered on the website.</p>
            </div>

            <div class="card" id="discount-card">
                <h3>Discount Management</h3>
                <p>Add or update book discounts easily.</p>
            </div>

            <div class="card">
                <h3>Customer Orders</h3>
                <p>View all orders placed by customers.</p>
            </div>

            <div class="card">
                <h3>Book Modification</h3>
                <p>Add,Update & delete books.Check books that are running out of stock.</p>
            </div>

            <div class="card">
                <h3>Sales Report</h3>
                <p>View daily, monthly and yearly sales.</p>
            </div>

            <div class="card">
                <h3>Category Management</h3>
                <p>Add, edit or delete book categories.</p>
            </div>

        </div>
    </div>

</div>

  <script src="../Js/viewuser.js"></script>
  <script src="../Js/discount.js"></script>

</body>
</html>
