<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Appointments | Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin-temp.css">
</head>

<body>
    <nav class="admin-navbar">
        <div class="container">
            <h2 class="brand">PRINCESS TOUCH</h2>
            <ul class="nav-links">
                <li><a href="admin-stock.php">Stock</a></li>
                <li><a href="admin-sales.php">Sales</a></li>
                <li><a href="admin-appointment.php" class="active">Appointments</a></li>
                <li><a href="index.php" class="logout-btn">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="section-title">Appointment Schedule</h3>
        <table class="table appointment-table">
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jane Doe</td>
                    <td>Nov 4, 2025</td>
                    <td>Makeup Session</td>
                    <td>2:00 PM</td>
                    <td><span class="status pending">Pending</span></td>
                </tr>
                <tr>
                    <td>Mary Ann</td>
                    <td>Nov 5, 2025</td>
                    <td>Hair & Makeup</td>
                    <td>11:00 AM</td>
                    <td><span class="status done">Done</span></td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>