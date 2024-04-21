<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>

.toggle-container {
    position:absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    padding: 20px;
    background-color: white;
   
}

.toggle-btn {
    display:list-item;
    padding: 8px 15px;
    margin: 5px;
    border-radius: 20px;
    background-color: white;
    border: 1px solid #ccc;
    color: #333;
    font-size: 16px;
    cursor: pointer;
    transition: all 0.3s;
}

.toggle-btn.active {
    background-color: #6c14d0;
    color: #fff;
    border-color: transparent;
}


        .box {
            margin-left: 200px; /* Adjust as needed */
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            justify-items: center;
            padding: 0 20px;
        }


      .products {
            width: 100%;
            padding: 25px ;
        }

        .products h1 {
            margin: 35px 0;
            font-size: 60px;
            text-align: center;
            text-transform: uppercase;
            background: linear-gradient(to right, #c72092, #6c14d0);
            background-clip: text;
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .products .box {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(500px, 1fr));
            gap: 20px;
            justify-items: center;
            padding: 0 20px;
        }

        .products .box .card {
            width: 300px;
            height: 620px;
            box-shadow: 0 0 8px #6c14d0;
            border-radius: 5px;
            text-align: center;
            padding: 10px 20px;
            background: #f6f6f6;
        }

        .products .box .card .image {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 250px;
        }

        .products .box .card .image img {
            max-width: 100%;
            max-height: 100%;
            transition: transform 0.3s;
        }

        .products .box .card:hover .image img {
            transform: scale(1.1);
        }

        .products .box .card .products_text {
            padding: 20px 0;
        }

        .products .box .card .products_text h2 {
            font-size: 24px;
            margin-top: 15px;
        }

        .products .box .card .products_text p {
            color: #919191;
            line-height: 21px;
            margin: 8px 0;
        }

        .products .box .card .products_text .products_star {
            color: orange;
            margin-bottom: 19px;
            cursor: pointer;
        }

        .products .box .card .products_text .btn {
            text-decoration: none;
            padding: 10px 20px;
            background: linear-gradient(to right, #c72092, #6c14d0);
            color: white;
            border-radius: 5px;
            transition: background-color 0.3s;
        }

        .products .box .card .products_text .btn:hover {
            background-color: #c72092;
        }
</style>

</head>
<body>
    <div class="products" id="Products">
         <h1>Products</h1>

        <div class="toggle-container">
            <button class="toggle-btn active" onclick="filterProducts('all')">All</button>
            <button class="toggle-btn" onclick="filterProducts('men')">Men</button>
            <button class="toggle-btn" onclick="filterProducts('women')">Women</button>
            <button class="toggle-btn" onclick="filterProducts('kids')">Kids</button>
            <!-- Add more toggle buttons for other categories if needed -->
        </div>
        <hr/>
        <br/>

        <div class="box">
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
switch ($filter) {
    case 'all':
        $filteredProducts = $products;
            break;
    case 'Men':
        $filteredProducts = filterProducts('menshoes', $products);
        break;
    case 'Women':
        $filteredProducts = filterProducts('womenshoes', $products);
        break;
    case 'Kids':
        $filteredProducts = filterProducts('kidshoes', $products);
        break;
    default:
        // If filter is 'all', show all products
        $filteredProducts = $products;
        break;
}

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

        </div>

     
    </div>

    <script>
    function filterProducts(category) {
        // Toggle active class for buttons
        const toggleButtons = document.querySelectorAll('.toggle-btn');
        toggleButtons.forEach(btn => {
            btn.classList.remove('active');
        });
        event.target.classList.add('active');

        // Call PHP function to filter products based on category
        fetch('filter.php?category=' + category)
            .then(response => response.text())
            .then(data => {
                document.querySelector('.box').innerHTML = data;
            })
            .catch(error => {
                console.error('Error:', error);
            });
    }

    document.addEventListener('DOMContentLoaded', () => {
        // Add event listeners to toggle buttons
        const toggleButtons = document.querySelectorAll('.toggle-btn');
        toggleButtons.forEach(btn => {
            btn.addEventListener('click', () => {
                filterProducts(btn.dataset.category);
            });
        });
    });
</script>



  
</body>
</html>
