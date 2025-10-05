<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Add Item - Fashion Store</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Add New Item</h2>

<form method="POST">
  <input type="text" name="item_name" placeholder="Item Name" required>
  <input type="number" name="bought" placeholder="Quantity Bought" required>
  <input type="number" step="0.01" name="price" placeholder="Price per item" required>
  <button type="submit" name="add">Add Item</button>
</form>

<?php
if (isset($_POST['add'])) {
    $name = $_POST['item_name'];
    $bought = $_POST['bought'];
    $price = $_POST['price'];

    $sql = "INSERT INTO inventory (item_name, bought, price) VALUES ('$name', $bought, $price)";
    if ($conn->query($sql)) {
        echo "<p>Item added successfully!</p>";
    } else {
        echo "<p>Error: " . $conn->error . "</p>";
    }
}
?>
</body>
</html>
