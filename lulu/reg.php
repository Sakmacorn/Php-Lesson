<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Registration Form</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Payroll Calculator</h4>
        </div>
        <div class="card-body">
            <form action="computereg.php" method="POST">
                <!-- Employee Name -->
                <div class="mb-3">
                    <label for="fullname" class="form-label">Employee Name</label>
                    <input type="text" name="fullname" id="fullname" class="form-control" placeholder="Enter your Employee Name" required >
                </div>

                <!-- Days of Work -->
                <div class="mb-3">
                    <label for="TotalDay" class="form-label">Total Days of Work</label>
                    <input type="number" name="totaldays" id="totaldays" class="form-control" placeholder="Enter your Total Days of Work" required>
                </div>

                <!-- Daily Rate -->
                <div class="mb-3">
                    <label for="dailyrate" class="form-label">Daily Rate</label>
                    <div class="input-group">
                        <input type="number" name="dailyrate" id="dailyrate" class="form-control" placeholder="Enter your Daily Rate" required>
                    </div>
                </div>

                <!-- Cash Advance -->
                <div class="mb-3">
                    <label for="cashadvance" class="form-label">Cash Advance</label>
                    <div class="input-group">
                        <input type="number" name="cashAdvance" id="CashAdvance" class="form-control" placeholder="Enter your Cash Advance" required>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-end">
                    <button type="submit" class="btn btn-success">Generate Payslip</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Bootstrap JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>