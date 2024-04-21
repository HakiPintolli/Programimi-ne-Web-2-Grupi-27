
<!-- Products  -->

<?php

class Kepuce {
    private $brendi;
    private $modeli;
    protected $cmimi;
    public $stoku;

    public function __construct($brendi, $modeli, $cmimi, $stoku) {

        $this->brendi = $brendi;
        $this->modeli = $modeli;
        $this->cmimi = $cmimi;
        $this->stoku = $stoku;

    }
    public function getBrendi() {
        return $this->brendi;
    }

    public function setBrendi($brendi) {
        $this->brand = $brand;
    }

    public function getModeli() {
        return $this->modeli;
    }

    public function setModeli($modeli) {
        $this->modeli = $modeli;
    }

    public function getCmimi() {
        return $this->cmimi;
    }

    public function setCmimi($cmimi) {
        $this->price = $price;
    }
 
    public function getStoku() {
        return $this->stoku;
    }

    public function setStoku($stoku) {
        $this->stoku = $stoku;
    }

    public function set($brendi, $modeli, $cmimi, $stoku) {
        $this->brendi = $brendi;
        $this->model = $modeli;
        $this->price = $cmimi;
        $this->stock = $stoku;
    }


    public function getInfo() {

        return "Brendi: {$this->brendi}, Modeli: {$this->modeli}, Cmimi: {$this->cmimi}, Stoku: {$this->stoku}";

    }


    public function shikoGjendjen() {

        if ($this->stoku > 0) {
            return "Ne gjendje";
        } else {
         return "Nuk ka ne stok";
        }
    }


    public function ZvogeloStokun($sasia) {

        if ($this->stoku >= $sasia) {
            $this->stoku -= $sasia;
            return true; // Blerja u krye me sukses
        } else {
            return false; // Kepucet nuk jane ne sasi te mjaftueshme ne stok
        }
    }
}

$kepuce1 = new Kepuce("Nike", "Pegasus 30", 70, 10);

echo "Detajet e Produktit: " . $kepuce1>getInfo() . "<br>";

echo "Gjendja: " . $kepuce1->shikoGjendjen() . "<br>";

$sasia_per_blerje = 2;

if ($kepuce1->ZvogeloStokun($sasia_per_blerje)) {

    echo "Blerja u krye me sukses! Sasia: " . $sasia_per_blerje . "<br>";

} else {

    echo "Blerja deshtoi! Nuk ka mbetur produkte ne stok.<br>";

}

echo "Gjendja e stokut pas blerjes: " . $kepuce1>shikoGjendjen() . "<br>";


$kepuce1 = new Kepuce("Nike", "Pegasus 30", 70, 10);
$kepuce1-> setCmimi(55);

$kepuce1 = new Kepuce("Nike", "Pegasus 30", 70, 10);
echo "Stoku: " . $kepuce1->getStoku() . "<br>";
$kepuce1->getStoku(20);
echo "Stoku i perditesuar: " . $kepuce1->getStoku() . "<br>";

class KepuceFormale extends Kepuce {
    private $materiali:
    public function __construct($brendi, $modeli, $cmimi, $stoku, $materiali) {
        parent:: __construct($brendi, $modeli, $cmimi, $stoku);
        $this->materiali = $materiali;
    }
    //Metoda per te marre materialin e kepucave formale 
    public function getMateriali() {
        echo $this-> materiali;
    }
}

$kepuceFormale = new KepuceFormale("Clarks", "Oxford", 99.99, 5, "Leather");


echo $kepuceFormale->getInfo() . "<br>"
echo "Materiali: " . $kepuceFormale->getMateriali() . "<br>";

?>

<!--Services-->
<?php
class Sherbimet {
    public function dergesa($produkti, $adresa) {

        return "Produkti '{$produkti}' eshte derguar ne adresen {$adresa}.";
    }

    public function kthimi($produkti, $arsyeja) {
    
        return "Produkti '{$produkti}' eshte kthyer per arsyen '{$arsyeja}'.";
    }

    public function suporti($klientID, $problemi) {
        
        return "Kostumeri me ID '{$klientID}' morri suport per problemin: {$problemi}";
    }
}

$sherbimet = new Sherbimet();

echo $sherbimet->dergesa("Nike Pegasus", "Bregu i Diellit, Prishtine, Kosove") . "<br>";

echo $sherbimet->kthimi("Adidas Superstar", "Gabim ne numer") . "<br>";

echo $sherbimet->suporti("123456", "Produkti nuk ka ardhur ne gjendje te mire.") . "<br>";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KIX- For the Best</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="image/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap" rel="stylesheet">
</head>

<body>
    <section>
        <nav>
            <div class="logo">
                <h1>Kick<span>s</span></h1>
            </div>
            <ul>
                <li><a href="#Home">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Reviews">Reviews</a></li>
                <li><a href="#Services">Services</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
            <div class="icons">
                <i class="fa-solid fa-heart"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <i class="fa-solid fa-user"><a href="login.php"></a></i>
            </div>
        </nav>

        <div class="main" id="Home">
            <div class="main_content">
                <div class="main_text">
                    <h1>NIKE<br><span>Collection</span></h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Autem officia eos et, quam quaerat
                        quidem repellat exercitationem laborum voluptatum ea non suscipit? Quas in sit esse maxime
                        expedita porro saepe perferendis aliquam temporibus. Cupiditate molestiae, numquam dolore sequi
                        vel eaque eius iure sed eos voluptatibus omnis. Quaerat et, suscipit consequuntur repellat
                        repellendus unde dolorum.</p>
                </div>
                <div class="main_image">
                    <img src="image/shoes.png" alt="Shoes">
                </div>
            </div>
            <div class="social_icon">
                <i class="fa-brands fa-facebook-f"></i>
                <i class="fa-brands fa-twitter"></i>
                <i class="fa-brands fa-instagram"></i>
                <i class="fa-brands fa-linkedin-in"></i>
            </div>
            <div class="button">
                <a href="#">SHOP NOW</a>
                <i class="fa-solid fa-chevron-right"></i>
            </div>
        </div>
    </section>

    <!--Products -->

    <div class="products" id="Products">
        <h1>Products</h1>

        <div class="box">
            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes1.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$100.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes2.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$200.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes3.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$175.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes4.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$120.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes5.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$150.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes6.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$220.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes7.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$110.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                        <i class="fa-regular fa-star"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

            <div class="card">
                <div class="small_card">
                    <i class="fa-solid fa-heart"></i>
                    <i class="fa-solid fa-share"></i>
                </div>


                <div class="image">
                    <img src="image/shoes8.png" alt="">
                </div>

                <div class="products_text">
                    <h2>NIKE</h2>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    </p>
                    <h3>$150.99</h3>
                    <div class="products_star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star-half-stroke"></i>
                    </div>
                    <a href="#Products" class="btn">Add To Cart</a>
                </div>
            </div>

        </div>
    </div>


    <!-- About  -->

    <div class="about" id="About">

        <h1>Web<span>About</span></h1>

        <div class="about_main">
            <div class="about_image">
                <div class="about_small_image">
                    <img src="image/red_shoes1.png" alt="red shoes" onclick="functio(this)">
                    <img src="image/red_shoes2.png" alt="red shoes" onclick="functio(this)">
                    <img src="image/red_shoes3.png" alt="red shoes" onclick="functio(this)">
                    <img src="image/red_shoes4.png" alt="red shoes" onclick="functio(this)">
                </div>

                <div class="image_container">
                    <img src="image/red_shoes1.png" id="imagebox">
                </div>
            </div>
            <div class="about_text">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis cumque dignissimos qui quo
                    perferendis! Minima quia quod assumenda facilis nostrum sunt dolor tempora accusantium odio eaque.
                    Ducimus non cupiditate velit at recusandae minus eaque repellat consequatur reprehenderit quam!
                    Maxime, ullam cupiditate voluptatum recusandae suscipit in beatae eligendi temporibus quas porro.
                    Obcaecati reprehenderit deserunt quos. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Veniam minus perferendis, accusamus similique voluptate, dolorem placeat fugit asperiores
                    distinctio, explicabo suscipit et tenetur numquam libero necessitatibus! Laudantium nesciunt Lorem
                    ipsum dolor sit amet consectetur, adipisicing elit. Doloribus, in deserunt quae fugiat repudiandae
                    corrupti unde possimus maiores commodi ipsa, beatae esse dolore animi illum saepe vitae eos iusto
                    quas.
                    quas. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat deserunt amet autem ea
                    perferendis mollitia pariatur aliquam earum illum aliquid?
                </p>
            </div>
        </div>
        <a href="#" class="about_btn">Shop Now</a>

        <script src="script.js"></script>
    </div>

    <!-- Review  -->

    <div class="review" id="Reviews">
        <h1>Customer's<span>review</span></h1>

        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">
                        <div class="profile_image">
                            <img src="image/girl_dp1.jpg" alt="customer dp">
                        </div>

                        <div class="name">
                            <strong>Prachi Gupta</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro dicta cumque explicabo vel
                        sint ipsa velit qui vitae sequi, eaque ratione quo similique aspernatur a laboriosam iure
                        nostrum dolore.
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">
                        <div class="profile_image">
                            <img src="image/man_dp1.jpg" alt="customer dp">
                        </div>

                        <div class="name">
                            <strong>Sayuru Tharanga</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro dicta cumque explicabo vel
                        sint ipsa velit qui vitae sequi, eaque ratione quo similique aspernatur a laboriosam iure
                        nostrum dolore.
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">
                        <div class="profile_image">
                            <img src="image/man_dp2.jpg" alt="customer dp">
                        </div>

                        <div class="name">
                            <strong>Yusuf Diwan</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro dicta cumque explicabo vel
                        sint ipsa velit qui vitae sequi, eaque ratione quo similique aspernatur a laboriosam iure
                        nostrum dolore.
                    </p>
                </div>
            </div>
        </div>

        <div class="review_box">
            <div class="review_card">
                <div class="card_top">
                    <div class="profile">
                        <div class="profile_image">
                            <img src="image/gir_dp3.jpg" alt="customer dp">
                        </div>

                        <div class="name">
                            <strong>Charlotte Johnson</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro dicta cumque explicabo vel
                        sint ipsa velit qui vitae sequi, eaque ratione quo similique aspernatur a laboriosam iure
                        nostrum dolore.
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">
                        <div class="profile_image">
                            <img src="image/gir_dp2.jpg" alt="customer dp">
                        </div>

                        <div class="name">
                            <strong>Sakshi Lochab</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro dicta cumque explicabo vel
                        sint ipsa velit qui vitae sequi, eaque ratione quo similique aspernatur a laboriosam iure
                        nostrum dolore.
                    </p>
                </div>
            </div>

            <div class="review_card">
                <div class="card_top">
                    <div class="profile">
                        <div class="profile_image">
                            <img src="image/man_dp3.jpg" alt="customer dp">
                        </div>

                        <div class="name">
                            <strong>John Deo</strong>

                            <div class="like">
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star-half-stroke"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="comment">
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero porro dicta cumque explicabo vel
                        sint ipsa velit qui vitae sequi, eaque ratione quo similique aspernatur a laboriosam iure
                        nostrum dolore.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Services  -->

    <div class="services" id="Services">
        <h1>Our<span>services</span></h1>

        <div class="services_cards">
            <div class="services_box">
                <i class="fa-solid fa-truck-fast"></i>
                <h3>Fast Delivery</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-rotate-left"></i>
                <h3>10 Days Replacement</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>

            <div class="services_box">
                <i class="fa-solid fa-headset"></i>
                <h3>24 x 7 Support</h3>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</p>
            </div>
        </div>
    </div>



    <!-- Footer  -->

    <footer>
        <div class="footer_main">
            <div class="tag">
                <h1>Contact</h1>
                <a href="#"><i class="fa-solid fa-house"></i>72/Vijay Nagar/Banglore/India</a>
                <a href="#"><i class="fa-solid fa-phone"></i>+91 9422244499</a>
                <a href="#"><i class="fa-solid fa-envelope"></i>contact@gmail.com</a>
            </div>

            <div class="tag">
                <h1>Get Help</h1>
                <a href="#" class="center">FAQ</a>
                <a href="#" class="center">Shipping</a>
                <a href="#" class="center">Returns</a>
                <a href="#" class="center">Payment Options</a>
            </div>

            <div class="tag">
                <h1>Our Stores</h1>
                <a href="#" class="center">Australia</a>
                <a href="#" class="center">USA</a>
                <a href="#" class="center">India</a>
                <a href="#" class="center">Japan</a>
            </div>

            <div class="tag">
                <h1>Follow Us</h1>
                <div class="social_link">
                    <a href="#" class="center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#" class="center"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="center"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="center"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
            </div>

            <div class="tag">
                <h1>Newsletter</h1>
                <div class="search_bar">
                    <input type="text" placeholder="Your email id here" id="email">
                    <button type="submit">Subscribe</button>
                </div>
            </div>

        </div>
    </footer>
</body>

</html>
