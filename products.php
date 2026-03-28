<?php include "config/db.php"; ?>
<?php $pageTitle = "Products"; ?>

<!DOCTYPE html>
<html>

<head>
<?php include('include/head.php'); ?>
</head>

<body>

<?php include('include/header.php'); ?>

<section class="products-section">

<h1 class="page-title">Our Water Products</h1>

<div class="product-grid">

<?php

$limit = 12;

$page = isset($_GET['page']) ? $_GET['page'] : 1;

$start = ($page - 1) * $limit;

$q = mysqli_query($conn,"
SELECT id,name,price,image,description 
FROM products 
LIMIT $start,$limit
");

while($row = mysqli_fetch_assoc($q)){
?>

<div class="product-card">

<img 
src="assets/img/product/<?php echo $row['image']; ?>" 
class="product-img"
loading="lazy"
>

<h3><?php echo $row['name']; ?></h3>

<p class="price">₹ <?php echo $row['price']; ?></p>

<p class="product-desc">
<?php echo $row['description']; ?>
</p>

</div>

<?php } ?>

</div>

</section>

<!-- Pagination -->

<div class="pagination">

<?php

$totalQuery = mysqli_query($conn,"SELECT COUNT(id) as total FROM products");
$total = mysqli_fetch_assoc($totalQuery)['total'];

$pages = ceil($total / $limit);

for($i=1;$i<=$pages;$i++){

echo "<a href='?page=$i'>$i</a>";

}

?>

</div>

<?php include('include/footer.php'); ?>

</body>
</html>