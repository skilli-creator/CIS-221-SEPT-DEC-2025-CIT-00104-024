<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Sell Item - Fashion Store</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Sell Item</h2>

<form method="POST">
  <input type="text" name="item_name" placeholder="Item Name" required>
  <input type="number" name="quantity" placeholder="Quantity Sold" required>
  <button type="submit" name="sell">Record Sale</button>
</form>

<?php
if (isset($_POST['sell'])) {
    $name = $_POST['item_name'];
    $quantity = $_POST['quantity'];

    $sql = "UPDATE inventory SET sold = sold + $quantity WHERE item_name='$name'";
    if ($conn->query($sql)) {
        echo "<p>Sale recorded successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
