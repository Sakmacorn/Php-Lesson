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

        <!-- Search & Filter -->
        <div class="d-flex justify-content-between align-items-center mb-3">
            <!-- Search Bar -->
            <input type="text" id="salesSearch" class="form-control w-50" placeholder="Search product...">

            <!-- Filter Dropdown -->
            <select id="salesCategory" class="form-select w-25">
                <option value="">All Products</option>
                <option value="Lip Gloss">Lip Gloss</option>
                <option value="Blush Palette">Blush Palette</option>
            </select>
        </div>

        <table class="table sales-table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Total Amount</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="salesTableBody">
                <tr>
                    <td>Nov 3, 2025</td>
                    <td>Lip Gloss</td>
                    <td>2</td>
                    <td>₱500.00</td>
                    <td>
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </td>
                </tr>
                <tr>
                    <td>Nov 2, 2025</td>
                    <td>Blush Palette</td>
                    <td>1</td>
                    <td>₱480.00</td>
                    <td>
                        <button class="btn-edit">Edit</button>
                        <button class="btn-delete">Delete</button>
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-end">Total:</th>
                    <th id="salesTotal">₱0.00</th>
                    <th></th>
                </tr>
            </tfoot>
        </table>
    </div>

    <script>
        const salesSearch = document.getElementById('salesSearch');
        const salesCategory = document.getElementById('salesCategory');
        const salesTableBody = document.getElementById('salesTableBody');
        const salesTotalElem = document.getElementById('salesTotal');

        function filterSales() {
            const searchValue = salesSearch.value.toLowerCase();
            const categoryValue = salesCategory.value.toLowerCase();
            let total = 0;

            Array.from(salesTableBody.rows).forEach(row => {
                const date = row.cells[0].textContent.toLowerCase();
                const product = row.cells[1].textContent.toLowerCase();
                const quantity = parseInt(row.cells[2].textContent);
                const amountText = row.cells[3].textContent.replace(/[^0-9.]/g, '');
                const amount = parseFloat(amountText);

                const matchesSearch = product.includes(searchValue);
                const matchesCategory = categoryValue === "" || product === categoryValue;

                if (matchesSearch && matchesCategory) {
                    row.style.display = "";
                    total += amount;
                } else {
                    row.style.display = "none";
                }
            });

            salesTotalElem.textContent = `₱${total.toFixed(2)}`;
        }

        // Event listeners
        salesSearch.addEventListener('input', filterSales);
        salesCategory.addEventListener('change', filterSales);

        // Initial total calculation
        filterSales();
    </script>


</body>

</html>
