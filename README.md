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
                <input type="text" class="form-control" id="" name="name" required value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Quantity</label>
                <input type="number" class="form-control" id="" name="quantity" required min="1" value="">
            </div>
            <div class="mb-3">
                <label class="form-label">Price per Item</label>
                <input type="number" class="form-control" id="" name="price" required min="1" value="">
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
        if (isset($_POST['submit'])){
                echo"<h3>Purchase Summary:</h3>";
                $name = $_POST['name'];
                echo "Name: $name<br>";
                $quantity = $_POST['quantity'];
                echo"Quantity: $quantity<br>"; 
                $price = $_POST['price'];{
                echo"Price per Item: ₱".number_format($price,2)."<br>"; 
                $subtotal = $quantity * $price;
                echo"Subtotal: ₱".number_format($subtotal,2)."<br>";
                $final = $subtotal;
                echo"Add-ons:";
            if(!empty($_POST['addons'])){
                $total = 0;
                    foreach($_POST['addons'] as $addons){
                    echo" ₱".number_format($addons + $total,2)."<br>"; 
                    $total += $addons;
                    $final = $subtotal + $total;
                }
            }
        }        
                echo"<h5>Final Total: ₱".number_format($final,2)."<h5>";
            } 
     
        else {
            echo"<p></p>";
        }
    ?>
            </div>
</div>
</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h2>Select your favorite items</h2>
    <form action="" method="post">
        <input type="checkbox" name="items[]" id="" value="50"> Notebook (₱50.00)<br>
        <input type="checkbox" name="items[]" id="" value="30"> Ballpen (₱30.00)<br>
        <input type="checkbox" name="items[]" id="" value="100"> Bag (₱100.00)<br>
        <input type="checkbox" name="items[]" id="" value="75"> Shoes (₱75.00)<br>
        <input type="checkbox" name="items[]" id="" value="20"> Pencil (₱20.00)<br>
        <input type="checkbox" name="items[]" id="" value="25"> Eraser (₱25.00)<br><br>
        <input type="submit" value="Submit" name="submit"><br>
    </form>
    <?php
        if (isset($_POST['submit'])){
            if(!empty($_POST['items'])){
                $total = 0; 
                echo"<h3>You selected:</h3>";
                foreach($_POST['items'] as $price){
                    echo"₱".number_format($price,2)."<br>"; 
                    $total += $price;
                }
                echo"<h3>Total: ₱".number_format($total,2)."<h3>";
            } 
        }
        else {
            echo"<p>Please select at least one product.</p>";
        }
        
    ?>
</body>
</html>
