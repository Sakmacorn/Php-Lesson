<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Activity - Product Purchase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="card shadow-lg p-4">
        <h2 class="mb-4 text-center">🛒 Product Purchase</h2>
        <form method="post" action="">
            <div class="mb-3">
                <label class="form-label">Customer Name</label>
                <input type="text" class="form-control" id="" name="name" required value="<?php echo isset($_POST['name']) ? htmlspecialchars($_POST['name']) : ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" id="" name="quantity" required min="1" value="<?php echo isset($_POST['quantity']) ? htmlspecialchars($_POST['quantity']) : ''; ?>">
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Item</label>
                <input type="number" class="form-control" id="" name="price" required min="1" value="<?php echo isset($_POST['price']) ? htmlspecialchars($_POST['price']) : ''; ?>">
            </div>

            <div class="mb-3">
                <label class="form-label">Optional Add-ons</label><br>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="" name="addons[]" value="50"
                        >
                    <label class="form-check-label">Gift Wrap (+₱50)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="" name="addons[]" value="100"
                        >
                    <label class="form-check-label">Express Shipping (+₱100)</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="" name="addons[]" value="200"
                        >
                    <label class="form-check-label">Warranty (+₱200)</label>
                </div>
            </div>

            <button type="submit" class="btn btn-primary w-100" name="submit">Compute Total</button>
        </form>
        
        <?php

            if ($_SERVER['REQUEST_METHOD'] == 'POST'){
                $name = ($_POST['name']);
                $quantity = (int)$_POST['quantity'];
                $price = (float)$_POST['price'];
                $addons = isset($_POST['addons']) ? $_POST['addons'] : [];

                $subtotal = $quantity * $price;

                $additionalCost = 0;
                foreach($addons as $addon){
                    $additionalCost += (int)$addon;
                }

                $finalTotal = $subtotal + $additionalCost;
        ?>
        <div class='alert alert-success mt-4'>
            <h4>💡  Purchase Summary</h4>
            <p><strong>Name:</strong> <?php echo htmlspecialchars($name); ?></p> 
            <p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
            <p><strong>Price per Item:</strong> ₱<?php echo number_format($price, 2); ?></p>
            <p><strong>Subtotal:</strong> ₱<?php echo number_format($subtotal, 2); ?></p>
            <p><strong>Add-ons:</strong> ₱<?php echo number_format($additionalCost, 2); ?></p>
            <h5 class="text-success"><strong>Final Total: ₱<?php echo number_format($finalTotal, 2); ?></strong></h5>
        </div>
        <?php } ?>

</div>
</div>
</body>
</html>