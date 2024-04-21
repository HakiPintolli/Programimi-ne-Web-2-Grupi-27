<?php
// Filter products based on category
function filterProducts($category, $products) {
    $filteredProducts = array();
    foreach ($products as $product) {
        // Check if the product image name contains the category
        if (strpos($product['images'], $category) !== false) {
            $filteredProducts[] = $product;
        }
    }
    return $filteredProducts;
}

// Array of all products
$products = array(
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", 
    "images" => "images/menshoes.png"),
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", 
    "images" => "images/menshoes1.png"),
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", 
    "images" => "images/womenshoes.png"),
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", 
    "images" => "images/kidshoes.png"),
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", 
    "images" => "images/menshoes3.png"),
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", "images" => 
    "images/menshoes4.png"),
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", "images" => "images/womenshoes2.png"),
    array("name" => "NIKE", 
    "description" => "Lorem ipsum dolor sit amet consectetur adipisicing elit.", 
    "price" => "$100.99", "images" => "images/womenshoes4.png"),
);

// Default filter is set to 'all'
$filter = isset($_GET['category']) ? $_GET['category'] : 'all';

// Filter the products based on the selected category
$filteredProducts = filterProducts($filter, $products);

// Display each filtered product
foreach ($filteredProducts as $product) {
    echo '<div class="card">';
    echo '<div class="small_card">';
    echo '<i class="fa-solid fa-heart"></i>';
    echo '<i class="fa-solid fa-share"></i>';
    echo '</div>';
    echo '<div class="images">';
    echo '<img src="' . $product['images'] . '" alt="' . $product['name'] . '">';
    echo '</div>';
    echo '<div class="products_text">';
    echo '<h2>' . $product['name'] . '</h2>';
    echo '<p>' . $product['description'] . '</p>';
    echo '<h3>' . $product['price'] . '</h3>';
    echo '<div class="products_star">';
    echo '<i class="fa-solid fa-star"></i>';
    echo '<i class="fa-solid fa-star"></i>';
    echo '<i class="fa-solid fa-star"></i>';
    echo '<i class="fa-solid fa-star"></i>';
    echo '<i class="fa-solid fa-star"></i>';
    echo '</div>';
    echo '<a href="#Products" class="btn">Add To Cart</a>';
    echo '</div>';
    echo '</div>';
}
?>
