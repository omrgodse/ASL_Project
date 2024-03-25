<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pizza House</title>
    <link rel="stylesheet" href="homepage_style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Catamaran:wght@200&family=Courgette&family=Edu+TAS+Beginner:wght@700&family=Lato:wght@300;900&family=Mukta:wght@700&family=Mulish:wght@300&family=Open+Sans&family=PT+Sans:ital,wght@1,700&family=Poppins:wght@300&family=Raleway:wght@100&family=Roboto&family=Roboto+Condensed:wght@700&family=Roboto+Slab&display=swap"
        rel="stylesheet">

    <script src="https://kit.fontawesome.com/f30fac2c61.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <!-- navbar -->
        <nav>
            <div class="logo">
                <h1>Pizza House</h1>

            </div>
            <!-- <div class="input">
                <input type="text" placeholder="Search Here..." value="" id="inp" onkeyup="myFun()">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div> -->
            <div class="icon">
                <i ondblclick="login()" onclick="showLogin()" class="fa-solid fa-user"></i>
                <i class="fa-solid fa-cart-shopping"></i>
                <i ondblclick="nav()" onclick="showNav()" class="fa-sharp fa-solid fa-bars"></i>
            </div>
        </nav>
        </div>
        <div class="nav">
             <p>Home</p>
             <p>Foods</p>
             <p>Blogs</p>
             <p>Customer</p>


        </div>

        <!-- main page -->
        <div class="mainPage">
            <div class="text">
                <h1>Simple & Tasty Recipes</h1>
                <p>"Welcome to Pizza House, where every slice tells a story of flavor and freshness. Explore our delicious menu and experience the true taste of Pizza right here!"</p>
                <button>Explore Now</button>
            </div>
            <img src="Margherita_pizza.jpg" alt="">
        </div>

        <!-- foods cards -->

        <table>
            <tr> 
                <td>
                    <div class="head">
                        <h1>Our <span>Foods...</span></h1>
                    </div>
                    <div class="crd">

                        <div class="card">
                            <img src="Margherita_pizza.jpg" alt="">
                            <h2>170 Rupees Only</h2>
                            <p>Margherita Pizza</p>
                            <button>Order Now</button>
                        </div>

                        <div class="card">
                            <img src="paneer_pizza.jpg" alt="">
                            <h2>299 Rupees Only</h2>
                            <p>Paneer Pizza</p>
                            <button>Order Now</button>
                        </div>

                        <div class="card">
                            <img src="CHEESE_MUSHROOM_PIZZA.jpg" alt="">
                            <h2>399 Rupees Only</h2>
                            <p>Cheese Mushroom Pizza</p>
                            <button>Order Now</button>
                        </div>
                    </div>
                </td>
            </tr>

            <tr>
               <td>
                <div class="crd">
                    <div class="card">
                        <img src="Cheese_Capsicum_Corn_Pizza.jpg" alt="">
                        <h2>385 Rupees Only</h2>
                        <p>Cheese Capsicum Corn Pizza</p>
                        <button>Order Now</button>
                    </div>

                    <div class="card">
                        <img src="IndianTandooriPaneer.jpg" alt="">
                        <h2>278 Rupees Only</h2>
                        <p>IndianTandooriPaneer.jpg</p>
                        <button>Order Now</button>
                    </div>

                    <div class="card">
                        <img src="Paneer_Makhni.jpg" alt="">
                        <h2>395 Rupees Only</h2>
                        <p>Paneer Makhani</p>
                        <button  >Order Now</button>
                    </div>
                </div>
               </td>
            </tr>

            <tr>
                <td>
                    <div class="head">
                        <h1>Read Our <span>Blogs</span></h1>
                    </div>
                    <div class="crd">
                        <div class="blog">
                            <img src="pizza_types.jpg" alt="">
                            <h2>Fact About Italian Food</h2>
                            <p></p>
                            <a href="https://www.kevmrc.com/interesting-facts-about-italian-food">Read More</a>
                        </div>
                        <div class="blog">
                            <img src="pizza_types.jpg" alt="">
                            <h2>Diffrent Types of Pizzas</h2>
                            <p>A classic Italian pizza, the Margherita is a simple yet delicious creation featuring a thin crust topped with tomato sauce,...</p>
                            <a href="https://www.chefspencil.com/23-types-of-pizza/">Read More</a>
                        </div>
                        <div class="blog">
                            <img src="pizza_receipe.jpg" alt="">
                            <h2>Delicious Pizza Recipes</h2>
                            <p>In a mixing bowl, combine the flour, instant yeast, sugar, and salt.</p>
                            <a class="aa" href="https://www.indianhealthyrecipes.com/pizza-recipe-make-pizza/">Read More</a>
                        </div>
                    </div>
                </td>
                 
            </tr>
        </table>
        <div class="head">
            <h1>Customer <span>Review</span></h1>
        </div>
        <div class="review">
            <div class="customer">
                <img src="Margherita_pizza.jpg" alt=""> <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis iste nostrum sapiente quas officia possimus quibusdam laudantium </p>
                
            </div>
            <div class="customer">
                <img src="Margherita_pizza.jpg" alt=""> <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis iste nostrum sapiente quas officia possimus quibusdam laudantium </p>
                
            </div>
            <div class="customer">
                <img src="Margherita_pizza.jpg" alt=""> <br>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star"></i>
                <i class="fa-solid fa-star-half-stroke"></i>
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Corporis iste nostrum sapiente quas officia possimus quibusdam laudantium </p>
                
            </div>
        </div>
        <div class="btns">
            <button onclick="prev()">Prev</button>
            <button  onclick="next()">Next</button>

        </div>
      <br>
 
    </div>

    <div class="footer">
        <div class="txt">
            <h2>About US </h2>
            <p>Lorem ipsum dolor porro vero <br> earum architecto beatae ipsam.</p>
            <p>Career</p>
            <p>Blogs</p>
            <p>Service</p>

        </div>
        <div class="txt">
            <h2>Product</h2>
            <p>Team</p>
            <p>Career</p>
            <p>Blogs</p>
            <p>Service</p>

        </div>
        <div class="txt">
            <h2>our Food</h2>
            <p>Team</p>
            <p>Career</p>
            <p>Blogs</p>
            <p>Service</p>

        </div>
        <div class="txt">
            <h2>Services</h2>
            <p>Team</p>
            <p>Career</p>
            <p>Blogs</p>
            <p>Service</p>

        </div>
    </div>
    <script src="home_page.js"></script>
</body>

</html>