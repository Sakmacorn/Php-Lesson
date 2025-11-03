<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - Stock Management | Princess Touch</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="admin-temp.css">
</head>

<body>
    <nav class="admin-navbar">
        <div class="container">
            <h2 class="brand">PRINCESS TOUCH</h2>
            <ul class="nav-links">
                <li><a href="admin-stock.php" class="active">Stock</a></li>
                <li><a href="admin-sales.php">Sales</a></li>
                <li><a href="admin-appointment.php">Appointments</a></li>
                <li><a href="index.php" class="logout-btn">Logout</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mt-5">
        <h3 class="section-title">Stock Management</h3>

        <!-- Search & Filter -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- Search Bar -->
            <input type="text" id="searchInput" class="form-control w-50" placeholder="Search product...">

            <!-- Filter Dropdown -->
            <select id="categoryFilter" class="form-select w-25">
                <option value="">All Categories</option>
                <option value="Makeup">Makeup</option>
                <option value="Cosmetics">Cosmetics</option>
            </select>
        </div>

        <table class="table stock-table">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Category</th>
                    <th>Stock Quantity</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="stockTableBody">
                <tr>
                    <td>Lip Gloss</td>
                    <td>Makeup</td>
                    <td>25</td>
                    <td>₱250.00</td>
                    <td><button class="btn-edit">Edit</button> <button class="btn-delete">Delete</button></td>
                </tr>
                <tr>
                    <td>Blush Palette</td>
                    <td>Cosmetics</td>
                    <td>15</td>
                    <td>₱480.00</td>
                    <td><button class="btn-edit">Edit</button> <button class="btn-delete">Delete</button></td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const tableBody = document.getElementById('stockTableBody');

        function filterTable() {
            const searchValue = searchInput.value.toLowerCase();
            const categoryValue = categoryFilter.value.toLowerCase();

            Array.from(tableBody.rows).forEach(row => {
                const productName = row.cells[0].textContent.toLowerCase();
                const category = row.cells[1].textContent.toLowerCase();

                const matchesSearch = productName.includes(searchValue);
                const matchesCategory = categoryValue === "" || category === categoryValue;

                if (matchesSearch && matchesCategory) {
                    row.style.display = "";
                } else {
                    row.style.display = "none";
                }
            });
        }

        searchInput.addEventListener('input', filterTable);
        categoryFilter.addEventListener('change', filterTable);
    </script>


</body>

</html>
