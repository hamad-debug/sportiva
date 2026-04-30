<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Sportiva Animated Header</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>

body{
    margin:0;
    font-family:'Segoe UI',sans-serif;
    background:#eef2f7;
}

/* ===== ANIMATIONS ===== */
@keyframes fadeDown{
    from{opacity:0; transform:translateY(-30px);}
    to{opacity:1; transform:translateY(0);}
}

@keyframes bounce{
    0%,100%{transform:translateY(0);}
    50%{transform:translateY(-6px);}
}

/* ===== TOP BAR ===== */
.topbar{
    background:#000;
    color:#aaa;
    font-size:13px;
    padding:6px 80px;
    animation:fadeDown 0.8s ease;
}

/* ===== HEADER ===== */
.header{
    background:linear-gradient(180deg,#111,#000);
    padding:18px 80px;
    display:flex;
    align-items:center;
    justify-content:space-between;
    animation:fadeDown 1s ease;
}

/* LOGO */
.logo{
    display:flex;
    align-items:center;
    cursor:pointer;
}

.logo-img{
    width:45px;
    height:45px;
    margin-right:10px;
    transition:0.4s;
}

.logo:hover .logo-img{
    transform:rotate(10deg) scale(1.1);
}

.logo-text{
    font-size:24px;
    font-weight:700;
    color:#00ff88;
    letter-spacing:2px;
}

/* SEARCH */
.search-wrapper{
    width:50%;
    display:flex;
    background:white;
    border-radius:50px;
    overflow:hidden;
    transition:0.3s;
}

.search-wrapper:focus-within{
    box-shadow:0 0 15px #00ff88;
}

.search-input{
    flex:1;
    border:none;
    padding:12px;
}

.search-btn{
    background:#00c853;
    color:white;
    border:none;
    padding:0 25px;
    transition:0.3s;
}

.search-btn:hover{
    background:#00ff88;
}

/* ICONS */
.icons{
    display:flex;
    align-items:center;
}

.icon{
    width:42px;
    height:42px;
    background:rgba(255,255,255,0.05);
    border-radius:50%;
    display:flex;
    align-items:center;
    justify-content:center;
    margin-left:15px;
    position:relative;
    transition:0.3s;
}

.icon i{
    color:#ccc;
    transition:0.3s;
}

.icon:hover{
    background:#00ff88;
    transform:translateY(-5px) scale(1.1);
}

.icon:hover i{
    color:black;
}

/* CART BADGE */
.badge-cart{
    position:absolute;
    top:2px;
    right:2px;
    background:red;
    color:white;
    font-size:10px;
    padding:2px 5px;
    border-radius:50%;
    animation:bounce 1.5s infinite;
}

</style>
</head>

<body>

<!-- TOP BAR -->
<div class="topbar d-flex justify-content-between">
    <div>📞 0300-1234567 | info@sportiva.com</div>
    <div>🚚 Free Delivery Above Rs.5000</div>
</div>

<!-- HEADER -->
<div class="header">

    <!-- LOGO -->
    <div class="logo">
        <img src="https://cdn-icons-png.flaticon.com/512/861/861512.png" class="logo-img">
        <span class="logo-text">SPORTIVA</span>
    </div>

    <!-- SEARCH -->
    <div class="search-wrapper">

        <input class="search-input" placeholder="Search premium sports gear...">

        <button class="search-btn">
            <i class="fa fa-search"></i>
        </button>

    </div>

    <!-- ICONS -->
    <div class="icons">

        <div class="icon">
            <i class="fa fa-user"></i>
        </div>

        <div class="icon">
            <i class="fa fa-heart"></i>
        </div>

        <div class="icon">
            <i class="fa fa-shopping-cart"></i>
            <span class="badge-cart">0</span>
        </div>

    </div>

</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark navbar-custom px-5">
    <ul class="navbar-nav align-items-center">

        <li class="nav-item"><a class="nav-link">Home</a></li>

        <!-- MEGA MENU -->
        <li class="nav-item position-relative">
            

            <div class="mega-menu container">

                <div class="row">

                    <!-- COLUMN -->
                    <div class="col-md-3">
                        <h6><i class="fa fa-baseball-bat-ball me-2"></i>Cricket</h6>
                        <ul>
                            <li>Bats</li>
                            <li>Balls</li>
                            <li>Gloves</li>
                            <li>Pads</li>
                        </ul>
                    </div>

                    <!-- COLUMN -->
                    <div class="col-md-3">
                        <h6><i class="fa fa-futbol me-2"></i>Football</h6>
                        <ul>
                            <li>Boots</li>
                            <li>Balls</li>
                            <li>Kits</li>
                            <li>Shin Guards</li>
                        </ul>
                    </div>

                    <!-- COLUMN -->
                    <div class="col-md-3">
                        <h6><i class="fa fa-dumbbell me-2"></i>Fitness</h6>
                        <ul>
                            <li>Dumbbells</li>
                            <li>Machines</li>
                            <li>Yoga Mats</li>
                            <li>Accessories</li>
                        </ul>
                    </div>

                    <!-- IMAGE SIDE -->
                    <div class="col-md-3">
                        <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b" class="img-fluid rounded">
                    </div>

                </div>

            </div>
        </li>

        <li class="nav-item"><a class="nav-link">Cricket</a></li>
        <li class="nav-item"><a class="nav-link">Football</a></li>
        <li class="nav-item"><a class="nav-link">Fitness</a></li>
        <li class="nav-item"><a class="nav-link text-danger">Sale</a></li>

    </ul>
</nav>

<style>

/* NAVBAR */
.navbar-custom{
    background:#1a1a1a;
    box-shadow:0 5px 20px rgba(0,0,0,0.3);
}

.nav-link{
    color:#fff !important;
    margin-right:20px;
    position:relative;
    transition:0.3s;
}

/* HOVER UNDERLINE */
.nav-link::after{
    content:"";
    position:absolute;
    width:0;
    height:2px;
    background:#00ff88;
    bottom:-6px;
    left:0;
    transition:0.3s;
}

.nav-link:hover::after{
    width:100%;
}

/* MEGA MENU */
.mega-menu{
    position:absolute;
    top:120%;
    left:0;
    width:800px;
    background:#fff;
    padding:25px;
    border-radius:10px;
    box-shadow:0 20px 50px rgba(0,0,0,0.3);
    opacity:0;
    visibility:hidden;
    transform:translateY(20px);
    transition:0.4s;
}

/* SHOW */
.nav-item:hover .mega-menu{
    opacity:1;
    visibility:visible;
    transform:translateY(0);
}

/* HEADINGS */
.mega-menu h6{
    font-weight:bold;
    margin-bottom:12px;
}

/* LIST */
.mega-menu ul{
    list-style:none;
    padding:0;
}

.mega-menu li{
    margin:6px 0;
    cursor:pointer;
    transition:0.3s;
}

.mega-menu li:hover{
    color:#00c853;
    transform:translateX(6px);
}

</style>

<!-- HERO SLIDER -->
<div id="heroSlider" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">

    <!-- INDICATORS -->
    <div class="carousel-indicators">
        <button data-bs-target="#heroSlider" data-bs-slide-to="0" class="active"></button>
        <button data-bs-target="#heroSlider" data-bs-slide-to="1"></button>
        <button data-bs-target="#heroSlider" data-bs-slide-to="2"></button>
    </div>

    <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <div class="carousel-item active">
            <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1505842465776-3d90f616310d');">
                <div class="overlay">
                    <div class="hero-content">
                        <h1>CRICKET COLLECTION</h1>
                        <p>Gear used by professionals</p>
                        <button class="btn btn-success">Shop Now</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item">
            <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1517649763962-0c623066013b');">
                <div class="overlay">
                    <div class="hero-content">
                        <h1>FOOTBALL ENERGY</h1>
                        <p>Play like a champion</p>
                        <button class="btn btn-success">Explore</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item">
            <div class="hero-slide" style="background-image:url('https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b');">
                <div class="overlay">
                    <div class="hero-content">
                        <h1>FITNESS GEAR</h1>
                        <p>Train harder, get stronger</p>
                        <button class="btn btn-success">Start Now</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- CONTROLS -->
    <button class="carousel-control-prev" data-bs-target="#heroSlider" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
    </button>

    <button class="carousel-control-next" data-bs-target="#heroSlider" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
    </button>

</div>

<style>

/* SLIDE */
.hero-slide{
    height:550px;
    background-size:cover;
    background-position:center;
    animation:zoom 8s ease-in-out infinite;
}

/* ZOOM EFFECT */
@keyframes zoom{
    0%{transform:scale(1);}
    50%{transform:scale(1.08);}
    100%{transform:scale(1);}
}

/* OVERLAY */
.overlay{
    background:linear-gradient(to right, rgba(0,0,0,0.8), rgba(0,0,0,0.3));
    height:100%;
    display:flex;
    align-items:center;
    padding-left:90px;
}

/* TEXT */
.hero-content{
    color:white;
    max-width:500px;
    animation:fadeUp 1s ease;
}

.hero-content h1{
    font-size:55px;
    font-weight:800;
    letter-spacing:2px;
}

.hero-content p{
    font-size:18px;
    margin:10px 0;
}

/* BUTTON */
.hero-content button{
    padding:12px 30px;
    font-size:16px;
}

/* TEXT ANIMATION */
@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

/* DOTS */
.carousel-indicators button{
    width:12px;
    height:12px;
    border-radius:50%;
}

/* ARROWS */
.carousel-control-prev-icon,
.carousel-control-next-icon{
    background-color:black;
    padding:20px;
    border-radius:50%;
}

</style>

<!-- CATEGORY ULTRA PRO -->
<div class="container mt-5">

    <h2 class="text-center fw-bold mb-5">Explore Categories</h2>

    <div class="row g-4">

        <!-- BIG CARD -->
        <div class="col-md-6">
            <div class="category-pro big">
                <img src="https://images.pexels.com/photos/274422/pexels-photo-274422.jpeg">
                <div class="overlay-pro">
                    <h3>Cricket</h3>
                    <p>Professional gear collection</p>
                    <button>Shop Now</button>
                </div>
            </div>
        </div>

        <!-- RIGHT SIDE -->
        <div class="col-md-6">
            <div class="row g-4">

                <div class="col-12">
                    <div class="category-pro small">
                        <img src="https://images.pexels.com/photos/46798/the-ball-stadion-football-the-pitch-46798.jpeg">
                        <div class="overlay-pro">
                            <h4>Football</h4>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="category-pro small">
                        <img src="https://images.pexels.com/photos/1552242/pexels-photo-1552242.jpeg">
                        <div class="overlay-pro">
                            <h4>Fitness</h4>
                        </div>
                    </div>
                </div>

                <div class="col-6">
                    <div class="category-pro small">
                        <img src="https://images.pexels.com/photos/163452/basketball-dunk-blue-game-163452.jpeg">
                        <div class="overlay-pro">
                            <h4>Basketball</h4>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

</div>

<style>

/* CARD BASE */
.category-pro{
    position:relative;
    overflow:hidden;
    border-radius:16px;
    cursor:pointer;
    height:100%;
}

/* IMAGE */
.category-pro img{
    width:100%;
    height:100%;
    object-fit:cover;
    transition:0.6s;
}

/* SIZES */
.category-pro.big{height:420px;}
.category-pro.small{height:200px;}

/* OVERLAY */
.overlay-pro{
    position:absolute;
    bottom:0;
    width:100%;
    height:100%;
    background:linear-gradient(to top, rgba(0,0,0,0.85), transparent);
    display:flex;
    flex-direction:column;
    justify-content:flex-end;
    padding:25px;
    color:white;
    transition:0.4s;
}

/* TEXT */
.overlay-pro h3{
    font-size:28px;
    font-weight:bold;
}

.overlay-pro h4{
    font-size:20px;
}

/* BUTTON */
.overlay-pro button{
    background:#00c853;
    border:none;
    padding:8px 20px;
    margin-top:10px;
    border-radius:20px;
    color:white;
    opacity:0;
    transform:translateY(20px);
    transition:0.4s;
}

/* HOVER EFFECT */
.category-pro:hover img{
    transform:scale(1.12);
}

.category-pro:hover .overlay-pro{
    background:rgba(0,0,0,0.75);
}

.category-pro:hover button{
    opacity:1;
    transform:translateY(0);
}

/* ENTRANCE ANIMATION */
.category-pro{
    animation:fadeUp 0.8s ease;
}

@keyframes fadeUp{
    from{opacity:0; transform:translateY(40px);}
    to{opacity:1; transform:translateY(0);}
}

</style>

<!-- PRODUCT SECTION -->
<div class="container mt-5">

    <h2 class="text-center fw-bold mb-4">Featured Products</h2>

    <div class="row g-4">

        <!-- PRODUCT CARD -->
        @foreach($products as $product)

<div class="col-md-3">
    <div class="product-card">

        <!-- BADGE (optional dynamic later) -->
        <span class="badge-sale">New</span>

        <!-- IMAGE -->
        <div class="product-img">
           <img src="{{ asset('uploads/'.$product->image) }}">
        </div>

        <!-- ICONS -->
        <div class="product-icons">
            <i class="fa fa-heart"></i>
            <i class="fa fa-eye"></i>
        </div>

        <!-- CONTENT -->
        <div class="product-info">

            <!-- NAME -->
            <h6>{{ $product->name }}</h6>

            <!-- RATING (static for now) -->
            <div class="rating">
                ★★★★☆
            </div>

            <!-- PRICE -->
            <p class="price">
                Rs. {{ $product->price }}
            </p>

            <button class="btn btn-primary add-to-cart" data-id="{{ $product->id }}">
    Add to Cart
</button>
            

        </div>

    </div>
</div>

@endforeach
        
        <div class="col-md-3">
            <div class="product-card">
                <span class="badge-sale">-15%</span>
                <div class="product-img">
                    <img src="https://images.pexels.com/photos/841130/pexels-photo-841130.jpeg">
                </div>
                <div class="product-icons">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="product-info">
                    <h6>Dumbbells Set</h6>
                    <div class="rating">★★★★★</div>
                    <p class="price">Rs. 6999 <span>Rs. 8000</span></p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="product-card">
                <span class="badge-sale">-10%</span>
                <div class="product-img">
                    <img src="https://images.pexels.com/photos/3621104/pexels-photo-3621104.jpeg">
                </div>
                <div class="product-icons">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="product-info">
                    <h6>Running Shoes</h6>
                    <div class="rating">★★★★☆</div>
                    <p class="price">Rs. 4999 <span>Rs. 5500</span></p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

        <div class="col-md-3">
            <div class="product-card">
                <span class="badge-sale">-25%</span>
                <div class="product-img">
                    <img src="https://images.pexels.com/photos/2294361/pexels-photo-2294361.jpeg">
                </div>
                <div class="product-icons">
                    <i class="fa fa-heart"></i>
                    <i class="fa fa-eye"></i>
                </div>
                <div class="product-info">
                    <h6>Cricket Bat</h6>
                    <div class="rating">★★★★★</div>
                    <p class="price">Rs. 8999 <span>Rs. 12000</span></p>
                    <button>Add to Cart</button>
                </div>
            </div>
        </div>

    </div>

</div>

<style>

/* CARD */
.product-card{
    background:#fff;
    border-radius:12px;
    overflow:hidden;
    position:relative;
    transition:0.4s;
}

/* IMAGE */
.product-img img{
    width:100%;
    height:220px;
    object-fit:cover;
    transition:0.5s;
}

/* BADGE */
.badge-sale{
    position:absolute;
    top:10px;
    left:10px;
    background:red;
    color:white;
    padding:4px 8px;
    font-size:12px;
    border-radius:5px;
}

/* ICONS */
.product-icons{
    position:absolute;
    top:10px;
    right:-50px;
    display:flex;
    flex-direction:column;
    transition:0.4s;
}

.product-icons i{
    background:white;
    margin:5px;
    padding:8px;
    border-radius:50%;
    cursor:pointer;
}

/* INFO */
.product-info{
    padding:15px;
}

.product-info h6{
    font-weight:bold;
}

/* RATING */
.rating{
    color:gold;
}

/* PRICE */
.price{
    font-weight:bold;
}
.price span{
    text-decoration:line-through;
    color:#999;
    font-size:13px;
}

/* BUTTON */
.product-info button{
    width:100%;
    border:none;
    background:#00c853;
    color:white;
    padding:8px;
    border-radius:5px;
    margin-top:8px;
}

/* HOVER */
.product-card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,0,0,0.2);
}

.product-card:hover img{
    transform:scale(1.1);
}

.product-card:hover .product-icons{
    right:10px;
}

</style>

<!-- NEWSLETTER -->
<div class="newsletter text-center">

    <h3>Join Our Newsletter</h3>
    <p>Get updates about latest sports gear & offers</p>

    <div class="newsletter-box">
        <input type="email" placeholder="Enter your email">
        <button>Subscribe</button>
    </div>

</div>

<!-- FOOTER -->
<footer class="footer mt-5">

    <div class="container">

        <div class="row">

            <!-- BRAND -->
            <div class="col-md-3">
                <h4 class="logo-footer">SPORTIVA</h4>
                <p>Premium sports store for professionals and beginners.</p>

                <div class="social">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-twitter"></i>
                </div>
            </div>

            <!-- LINKS -->
            <div class="col-md-3">
                <h5>Quick Links</h5>
                <ul>
                    <li>Home</li>
                    <li>Shop</li>
                    <li>Categories</li>
                    <li>Contact</li>
                </ul>
            </div>

            <!-- SUPPORT -->
            <div class="col-md-3">
                <h5>Support</h5>
                <ul>
                    <li>Help Center</li>
                    <li>Returns</li>
                    <li>Shipping</li>
                    <li>Privacy Policy</li>
                </ul>
            </div>

            <!-- CONTACT -->
            <div class="col-md-3">
                <h5>Contact</h5>
                <p>📞 0300-1234567</p>
                <p>📧 info@sportiva.com</p>
                <p>📍 Pakistan</p>
            </div>

        </div>

        <!-- BOTTOM -->
        <div class="footer-bottom text-center mt-4">
            <p>© 2026 Sportiva. All rights reserved.</p>
        </div>

    </div>

</footer>

<style>

/* NEWSLETTER */
.newsletter{
    background:#111;
    color:white;
    padding:50px 20px;
}

.newsletter h3{
    font-weight:bold;
}

.newsletter-box{
    margin-top:15px;
    display:flex;
    justify-content:center;
}

.newsletter-box input{
    padding:12px;
    width:300px;
    border:none;
    outline:none;
}

.newsletter-box button{
    background:#00c853;
    border:none;
    padding:12px 25px;
    color:white;
}

/* FOOTER */
.footer{
    background:#000;
    color:#aaa;
    padding:50px 0;
}

.footer h5{
    color:white;
    margin-bottom:15px;
}

.footer ul{
    list-style:none;
    padding:0;
}

.footer li{
    margin:6px 0;
    cursor:pointer;
    transition:0.3s;
}

.footer li:hover{
    color:#00ff88;
    transform:translateX(5px);
}

/* LOGO */
.logo-footer{
    color:#00ff88;
    font-weight:bold;
}

/* SOCIAL */
.social i{
    margin-right:10px;
    cursor:pointer;
    transition:0.3s;
}

.social i:hover{
    color:#00ff88;
    transform:scale(1.2);
}

/* BOTTOM */
.footer-bottom{
    border-top:1px solid #222;
    padding-top:15px;
}

</style>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){

    $('.add-to-cart').click(function(){

        let productId = $(this).data('id');

        $.ajax({
            url: '/cart/add/' + productId,
            type: 'GET',
            success: function(response) {
                alert(response.message);
                console.log('Cart Count:', response.cart_count);
            },
            error: function() {
                alert('Something went wrong!');
            }
        });

    });

});
</script>

</body>
</html>
