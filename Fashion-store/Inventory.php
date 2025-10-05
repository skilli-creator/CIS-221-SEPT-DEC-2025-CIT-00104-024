<?php include 'db.php'; ?>

<!DOCTYPE html>
<html>
<head>
  <title>Inventory Dashboard - Fashion Store</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<h2>Inventory Dashboard</h2>

<table border="1" cellpadding="8">
  <tr>
    <th>Item Name</th>
    <th>Bought</th>
    <th>Sold</th>
    <th>Stock Remaining</th>
    <th>Price</th>
    <th>Total Revenue</th>
  </tr>

<?php
$result = $conn->query("SELECT * FROM inventory");
$totalRevenue = 0;

while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>{$row['item_name']}</td>
            <td>{$row['bought']}</td>
            <td>{$row['sold']}</td>
            <td>{$row['stock']}</td>
            <td>{$row['price']}</td>
            <td>{$row['revenue']}</td>
          </tr>";
    $totalRevenue += $row['revenue'];
}
echo "</table><h3>Total Revenue: $totalRevenue</h3>";
?>
</body>
</html>
