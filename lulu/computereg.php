<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Details</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-header bg-success text-white">
            <h4 class="mb-0">Employee Payslip</h4>
        </div>
        <div class="card-body">
       
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $fullname = $_POST['fullname'];
            $totalDay = $_POST['totaldays'];
            $dailyrate = $_POST['dailyrate'];
            $cashAdvance = $_POST['cashAdvance'];

            $GrossPay = $totalDay * $dailyrate;
            $tax = $GrossPay * 0.02;
            $sss = $GrossPay * 0.015;
            $pagibig = 50;
            $totalDeduction = $tax + $sss + $pagibig + $cashAdvance;
            $netPay = $GrossPay - $totalDeduction;


        } else {
            echo"<div class='alert alert-danger'>No data submitted.</div>";
        }
        ?>

           
            <ul class="list-group-item">
                <li class="list-group-item mb-2"><strong>Employee Name:</strong> <?php echo $fullname; ?>  </li>
                <li class="list-group-item mb-2"><strong>Total Days of Work:</strong> <?php echo $totalDay; ?> </li>
                <li class="list-group-item mb-2"><strong>Daily Rate:</strong> <?php echo "₱" . number_format($dailyrate, 2); ?> </li>
            </ul>
            <hr>

            <ul class="list-group-item">
                <li class="list-group-item mb-2"><strong>Gross Pay:</strong> <?php echo "₱" . number_format($GrossPay, 2);?> </li>
                <li class="list-group-item mb-2"><strong>Tax (2%):</strong> <?php echo "₱" . number_format($tax, 2);?> </li>
                <li class="list-group-item mb-2"><strong>SSS (1.5%):</strong> <?php echo "₱" . number_format($sss, 2); ?>  </li>
                <li class="list-group-item mb-2"><strong>Pag-IBIG:</strong> <?php echo "₱" . number_format($pagibig, 2); ?>  </li>
                <li class="list-group-item mb-2"><strong>Cash Advance:</strong> <?php echo "₱" . number_format($cashAdvance, 2); ?>  </li>
            </ul>
            <hr>

            <ul class="list-group-item">
                <li class="list-group-item mb-2"><strong>Total Deduction:</strong> <?php echo "₱" . number_format($totalDeduction, 2); ?>  </li>
            </ul>
            <ul class="list-group-item">
                <li class="list-group-item mb-2">
                    <strong>Net Pay:</strong> 
                    <span class="text-success fs-6"><?php echo "₱" . number_format($netPay, 2); ?></span></li>
            </ul>

            <hr>
            <div class="mt-4">
                <a href="reg.php" class="btn btn-primary">Back</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>