<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Sales Record | Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin-temp.css">
</head>

<body>
    <nav class="admin-navbar">
        <div class="container">
            <h2 class="brand">PRINCESS TOUCH</h2>
            <ul class="nav-links">
                <li><a href="admin-stock.php">Stock</a></li>
                <li><a href="admin-sales.php" class="active">Sales</a></li>
                <li><a href="admin-appointment.php">Appointments</a></li>
                <li><a href="index.php" class="logout-btn">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="section-title">Sales Record</h3>
        <table class="table sales-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nov 3, 2025</td>
                    <td>Lip Gloss</td>
                    <td>2</td>
                    <td>₱500.00</td>
                </tr>
                <tr>
                    <td>Nov 2, 2025</td>
                    <td>Blush Palette</td>
                    <td>1</td>
                    <td>₱480.00</td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>