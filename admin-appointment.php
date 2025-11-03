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

    <<div class="container mt-5">
        <h3 class="section-title">Appointment Schedule</h3>

        <!-- Search & Filter -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- Search Bar -->
            <input type="text" id="apptSearch" class="form-control w-50" placeholder="Search client or service...">

            <!-- Filter Dropdown -->
            <select id="serviceFilter" class="form-select w-25">
                <option value="">All Services</option>
                <option value="Makeup Session">Makeup Session</option>
                <option value="Hair & Makeup">Hair & Makeup</option>
                <option value="Facial">Facial</option>
            </select>
        </div>

        <table class="table appointment-table">
            <thead>
                <tr>
                    <th>Client Name</th>
                    <th>Date</th>
                    <th>Service</th>
                    <th>Time</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="appointmentTableBody">
                <tr>
                    <td>Jane Doe</td>
                    <td>Nov 4, 2025</td>
                    <td>Makeup Session</td>
                    <td>2:00 PM</td>
                    <td><span class="status pending">Pending</span></td>
                    <td>
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Mary Ann</td>
                    <td>Nov 5, 2025</td>
                    <td>Hair & Makeup</td>
                    <td>11:00 AM</td>
                    <td><span class="status done">Done</span></td>
                    <td>
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>

        <script>
            const apptSearch = document.getElementById('apptSearch');
            const serviceFilter = document.getElementById('serviceFilter');
            const appointmentTableBody = document.getElementById('appointmentTableBody');

            function filterAppointments() {
                const searchValue = apptSearch.value.toLowerCase();
                const serviceValue = serviceFilter.value.toLowerCase();

                Array.from(appointmentTableBody.rows).forEach(row => {
                    const clientName = row.cells[0].textContent.toLowerCase();
                    const service = row.cells[2].textContent.toLowerCase();

                    const matchesSearch = clientName.includes(searchValue) || service.includes(searchValue);
                    const matchesService = serviceValue === "" || service === serviceValue;

                    if (matchesSearch && matchesService) {
                        row.style.display = "";
                    } else {
                        row.style.display = "none";
                    }
                });
            }

            apptSearch.addEventListener('input', filterAppointments);
            serviceFilter.addEventListener('change', filterAppointments);
        </script>


</body>

</html>
