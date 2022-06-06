<header class="header d-blue-bg">
    <div class="header-top">
        <div class="container">
            <div class="header-inner">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-7">
                        <div class="header-inner-start">
                            <div class="support d-none d-sm-block">
                                <p>Need Help? <a href="tel:+001123456789">(024) 7620516</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-5 d-none d-lg-block">
                        <div class="header-inner-end text-md-end">
                            <div class="ovic-menu-wrapper">
                                <ul>
                                    <li><a href="{{ route('market.about')}}">About Us</a></li>
                                    <li><a href="{{ route('market.order')}}">Order Tracking</a></li>
                                    <li><a href="{{ route('contact')}}">Contact Us</a></li>
                                    <li><a href="javascript:void(0)">FAQs</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-mid">
        <div class="container">
            <div class="heade-mid-inner">
                <div class="row align-items-center">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-4">
                        <div class="header__info">
                            <div class="logo">
                                <a href="#" class="logo-image"><img src="assets/img/logo-kopdig.png" alt="logo"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-4 d-none d-lg-block">
                        <div class="header__search">
                            <form action="#">
                                <div class="header__search-box">
                                    <input class="search-input" type="text" placeholder="I'm shopping for...">
                                    <button class="button" type="submit"><i class="far fa-search"></i></button>
                                </div>
                                <div class="header__search-cat">
                                    <select>
                                        <option>All Categories</option>
                                        <option>Best Seller Products</option>
                                        <option>Top 10 Offers</option>
                                        <option>New Arrivals</option>
                                        <option>Phones &amp; Tablets</option>
                                        <option>Electronics &amp; Digital</option>
                                        <option>Fashion &amp; Clothings</option>
                                        <option>Jewelry &amp; Watches</option>
                                        <option>Health &amp; Beauty</option>
                                        <option>Sound &amp; Speakers</option>
                                        <option>TV &amp; Audio</option>
                                        <option>Computers</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-8 col-sm-8">
                        <div class="header-action">
                            <div class="block-userlink">
                                <a class="icon-link" href="{{ route('market.account')}}">
                                <i class="flaticon-user"></i>
                                <span class="text">
                                <span class="sub">Login </span>
                                My Account </span>
                                </a>
                            </div>
                            <div class="block-wishlist action">
                                <a class="icon-link" href="{{ route('market.wishlist')}}">
                                <i class="flaticon-heart"></i>
                                <span class="count">0</span>
                                <span class="text">
                                <span class="sub">Favorite</span>
                                My Wishlist </span>
                                </a>
                            </div>
                            <div class="block-cart action">
                                <a class="icon-link" href="cart.html">
                                <i class="flaticon-shopping-bag"></i>
                                <span class="count">1</span>
                                <span class="text">
                                <span class="sub">Your Cart:</span>
                                $00.00 </span>
                                </a>
                                <div class="cart">
                                    <div class="cart__mini">
                                        <ul>
                                            <li>
                                              <div class="cart__title">
                                                <h4>Your Cart</h4>
                                                <span>(1 Item in Cart)</span>
                                              </div>
                                            </li>
                                            <li>
                                              <div class="cart__item d-flex justify-content-between align-items-center">
                                                <div class="cart__inner d-flex">
                                                  <div class="cart__thumb">
                                                    <a href="{{ route('market.product')}}">
                                                      <img src="assets/img/cart/20.jpg" alt="">
                                                    </a>
                                                  </div>
                                                  <div class="cart__details">
                                                    <h6><a href="{{ route('market.product')}}"> Samsung C49J89: £875, Debenhams Plus  </a></h6>
                                                    <div class="cart__price">
                                                      <span>$255.00</span>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="cart__del">
                                                    <a href="#"><i class="fal fa-times"></i></a>
                                                </div>
                                              </div>
                                            </li>
                                            <li>
                                              <div class="cart__sub d-flex justify-content-between align-items-center">
                                                <h6>Subtotal</h6>
                                                <span class="cart__sub-total">$255.00</span>
                                              </div>
                                            </li>
                                            <li>
                                                <a href="cart.html" class="wc-cart mb-10">View cart</a>
                                                <a href="checkout.html" class="wc-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header__bottom">
        <div class="container">
            <div class="row g-0 align-items-center">
                <div class="col-lg-3">
                    <div class="cat__menu-wrapper side-border d-none d-lg-block">
                        <div class="cat-toggle">
                            <button type="button" class="cat-toggle-btn cat-toggle-btn-1"><i class="fal fa-bars"></i> Shop by department</button>
                            <div class="cat__menu">
                                <nav id="mobile-menu" style="display: block;">
                                    <ul>
                                        <li>
                                            <a href="{{ route('market.shop')}}">All Categories <i class="far fa-angle-down"></i></a>
                                            <ul class="mega-menu">
                                                <li><a href="{{ route('market.shop')}}">Shop Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Standard SHop Page</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop Right Sidebar</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop Left Sidebar</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop 3 Column</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Product Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Product Details</a></li>
                                                        <li><a href="{{ route('market.product')}}">Product V2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Product V3</a></li>
                                                        <li><a href="{{ route('market.product')}}">Varriable Product</a></li>
                                                        <li><a href="{{ route('market.product')}}">External Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Other Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">wishlist</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shopping Cart</a></li>
                                                        <li><a href="{{ route('market.product')}}">Checkout</a></li>
                                                        <li><a href="{{ route('market.product')}}">Login</a></li>
                                                        <li><a href="{{ route('market.product')}}">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('market.shop')}}">Phone and Electronics <i class="far fa-angle-down"></i></a>
                                            <ul class="mega-menu mega-menu-2">
                                                <li><a href="{{ route('market.shop')}}">Shop Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Standard SHop Page</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop Right Sidebar</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop Left Sidebar</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop 3 Column</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Product Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Product Details</a></li>
                                                        <li><a href="{{ route('market.product')}}">Product V2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Product V3</a></li>
                                                        <li><a href="{{ route('market.product')}}">Varriable Product</a></li>
                                                        <li><a href="{{ route('market.product')}}">External Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Other Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">wishlist</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shopping Cart</a></li>
                                                        <li><a href="{{ route('market.product')}}">Checkout</a></li>
                                                        <li><a href="{{ route('market.product')}}">Login</a></li>
                                                        <li><a href="{{ route('market.product')}}">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('market.shop')}}">Best Seller Products
                                                <span class="cat-label">hot!</span>
                                                <i class="far fa-angle-down"></i>
                                            </a>
                                            <ul class="mega-menu">
                                                <li><a href="{{ route('market.shop')}}">Shop Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Standard SHop Page</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop Right Sidebar</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop Left Sidebar</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop 3 Column</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shop 4 Column</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Product Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Product Details</a></li>
                                                        <li><a href="{{ route('market.product')}}">Product V2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Product V3</a></li>
                                                        <li><a href="{{ route('market.product')}}">Varriable Product</a></li>
                                                        <li><a href="{{ route('market.product')}}">External Product</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Other Pages</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">wishlist</a></li>
                                                        <li><a href="{{ route('market.product')}}">Shopping Cart</a></li>
                                                        <li><a href="{{ route('market.product')}}">Checkout</a></li>
                                                        <li><a href="{{ route('market.product')}}">Login</a></li>
                                                        <li><a href="{{ route('market.product')}}">Register</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                                    <ul class="mega-item">
                                                        <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                        <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="{{ route('market.shop')}}">Top 10 Offers
                                                <span class="cat-label green">new!</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('market.shop')}}">New Arrivals <i class="far fa-angle-down"></i></a>
                                            <ul class="submenu">
                                                <li><a href="{{ route('market.shop')}}">Home Appliances</a></li>
                                                <li><a href="{{ route('market.shop')}}">Technology</a>
                                                    <ul class="submenu">
                                                        <li><a href="{{ route('market.shop')}}">Storage Devices</a></li>
                                                        <li><a href="{{ route('market.shop')}}">Monitors</a></li>
                                                        <li><a href="{{ route('market.shop')}}">Laptops</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="{{ route('market.shop')}}">Office Equipments</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('market.shop')}}">TV &amp; Audio</a></li>
                                        <li><a href="{{ route('market.shop')}}">Electronics &amp; Digital</a></li>
                                        <li class="d-laptop-none"><a href="{{ route('market.shop')}}">Fashion &amp; Clothings</a></li>
                                        <li class="d-laptop-none"><a href="{{ route('market.shop')}}">Jewelry &amp; Watches</a></li>
                                        <li><a href="{{ route('market.shop')}}">Health &amp; Beauty</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-3">
                  <div class="header__bottom-left d-flex d-xl-block align-items-center">
                    <div class="side-menu d-lg-none mr-20">
                      <button type="button" class="side-menu-btn offcanvas-toggle-btn"><i class="fas fa-bars"></i></button>
                    </div>
                    <div class="main-menu d-none d-lg-block">
                        <nav>
                            <ul>
                                <li>
                                    <a href="#" class="active">Home <i class="far fa-angle-down"></i></a>
                                    <ul class="megamenu-1">
                                        <li><a href="#">Home Pages</a>
                                            <ul class="mega-item">
                                                <li><a href="#" class="active">Home One</a></li>
                                                <li><a href="index-2.html">Home Two</a></li>
                                                <li><a href="index-3.html">Home Three</a></li>
                                                <li><a href="{{ route('market.product')}}">Shop 3 Column</a></li>
                                                <li><a href="{{ route('market.product')}}">Shop 4 Column</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('market.shop')}}">Product Pages</a>
                                            <ul class="mega-item">
                                                <li><a href="{{ route('market.product')}}">Product Details</a></li>
                                                <li><a href="{{ route('market.product')}}">Product V2</a></li>
                                                <li><a href="{{ route('market.product')}}">Product V3</a></li>
                                                <li><a href="{{ route('market.product')}}">Varriable Product</a></li>
                                                <li><a href="{{ route('market.product')}}">External Product</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('market.shop')}}">Other Pages</a>
                                            <ul class="mega-item">
                                                <li><a href="{{ route('market.product')}}">wishlist</a></li>
                                                <li><a href="{{ route('market.product')}}">Shopping Cart</a></li>
                                                <li><a href="{{ route('market.product')}}">Checkout</a></li>
                                                <li><a href="{{ route('market.product')}}">Login</a></li>
                                                <li><a href="{{ route('market.product')}}">Register</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                            <ul class="mega-item">
                                                <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                <li><a href="{{ route('market.product')}}">Catagory 4</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{ route('market.shop')}}">Phone &amp; Tablets</a>
                                            <ul class="mega-item">
                                                <li><a href="{{ route('market.product')}}">Catagory 1</a></li>
                                                <li><a href="{{ route('market.product')}}">Catagory 2</a></li>
                                                <li><a href="{{ route('market.product')}}">Catagory 3</a></li>
                                                <li><a href="{{ route('market.product')}}">Catagory 4</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{ route('market.about')}}">About Our Online Store</a></li>
                                <li class="has-mega"><a href="{{ route('market.shop')}}">Shop <i class="far fa-angle-down"></i></a>
                                    <div class="mega-menu">
                                        <div class="container container-mega">
                                            <ul>
                                                <li>
                                                    <ul>
                                                    <li class="title"><a href="{{ route('market.shop')}}">SHOP LAYOUT</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Pagination</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Ajax Load More</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Infinite Scroll</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Sidebar Right</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Sidebar Left</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                    <li class="title"><a href="{{ route('market.shop')}}">SHOP PAGES</a></li>
                                                    <li><a href="{{ route('market.shop')}}">List View</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Small Products</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Large Products</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Shop — 3 Items</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Shop — 4 Items</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Shop — 5 Items</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                    <li class="title"><a href="{{ route('market.shop')}}">PRODUCT LAYOUT</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Description Sticky</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Product Carousel</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Gallery Modern</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Thumbnail Left</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Thumbnail Right</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Thumbnail Botttom</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                    <li class="title"><a href="{{ route('market.shop')}}">Basketball</a></li>
                                                    <li><a href="{{ route('market.shop')}}">East Hampton Fleece</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Faxon Canvas Low</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Habitasse Dictumst</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Kaoreet Lobortis</a></li>
                                                    <li><a href="{{ route('market.shop')}}">NikeCourt Zoom</a></li>
                                                    <li><a href="{{ route('market.shop')}}">NikeCourts Air Zoom</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <ul>
                                                    <li class="title"><a href="{{ route('market.shop')}}">Basketball</a></li>
                                                    <li><a href="{{ route('market.shop')}}">East Hampton Fleece</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Faxon Canvas Low</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Habitasse Dictumst</a></li>
                                                    <li><a href="{{ route('market.shop')}}">Kaoreet Lobortis</a></li>
                                                    <li><a href="{{ route('market.shop')}}">NikeCourt Zoom</a></li>
                                                    <li><a href="{{ route('market.shop')}}">NikeCourts Air Zoom</a></li>
                                                    </ul>
                                                </li>
                                                <li class="mega-image hover-effect" style="background-image: url(assets/img/bg/menu-item.jpg);">
                                                    <ul>
                                                      <li><a href="{{ route('market.shop')}}">
                                                        <h4>Top Cameras <br> Bestseller Products</h4>
                                                        <h5>4K</h5>
                                                        <h6>Sale Up To <span>60% Off</span></h6>
                                                      </a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="offer mt-40">
                                            <p><b>30% OFF</b> the shipping of your first order with the code: <b>DUKA-SALE30</b></p>
                                        </div>
                                    </div>
                                </li>
                                <li><a href="{{ route('market.blog')}}">Blog <i class="far fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('market.blog')}}">Blog</a></li>
                                        <li><a href="{{ route('market.blog.detail')}}">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="about.html">Pages <i class="far fa-angle-down"></i></a>
                                    <ul class="submenu">
                                        <li><a href="{{ route('market.account')}}">My Account</a></li>
                                        <li><a href="{{ route('market.product')}}">Product Details</a></li>
                                        <li><a href="faq.html">FAQs pages</a></li>
                                        <li><a href="cart.html">Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                        <li><a href="404.html">404 Error</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-9">
                    <div class="shopeing-text text-sm-end">
                        <p>Spend $120 more and get free shipping!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
