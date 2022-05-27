<!DOCTYPE html>
<html>
    <head>
        <title>ShizzleFish</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/uikit.min.css" />
        <link rel="stylesheet" href="css/style.css" />
        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
        <style type="text/css">
            #id{background-color: #bebebe;}
        </style>
    </head>
    <body>
        <!-- Main Navigation -->
        <div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky">
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a href="" class="uk-navbar-item uk-logo">ShizzleFish</a>
                <ul class="uk-navbar-nav">
                    <li><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: user"></span>Account</a></li>
                    <li><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: cart"></span>Cart</a></li>
                    <li><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: bell"></span>Notifications</a></li>
                    <li><a href="#"><span class="uk-icon uk-margin-small-right" uk-icon="icon: question"></span>Help</a></li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <div class="uk-navbar-item">
                    <form class="uk-search uk-search-default">
                        <span class="uk-search-icon-flip" uk-search-icon></span>
                        <input class="uk-search-input" type="search" placeholder="Search">
                    </form>
                </div>
            </div>
        </nav>
        </div>
        <!-- Jumbotron -->
        <div class="uk-section" id="jumbotron">
            <div class="uk-container">
                <div class="uk-grid uk-grid-small uk-grid-match">
                    <div class="uk-width-1-5">
                        <!-- Shop Navigation -->
                        <div class="uk-card uk-card-default uk-card-body">
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="uk-nav-header">SHOP</li>
                            <li class="uk-parent">
                                <a href="#">Tilapia</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">Raw Fish</a></li>
                                    <li><a href="#">Raw Fish Fillet</a></li>
                                    <li><a href="#">Fried Fish/Fillet</a></li>
                                </ul>
                            </li>
                            <li class="uk-parent">
                                <a href="#">Nile Perch</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="#">Raw Fish</a></li>
                                    <li><a href="#">Raw Fish Fillet</a></li>
                                    <li><a href="#">Fried Fish/Fillet</a></li>
                                </ul>
                            </li>
                            <li class="uk-nav-header">ACCOUNT</li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: cart"></span> Cart</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: bell"></span> Notifications</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Orders</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: settings"></span> Settings</a></li>
                        </ul>
                        </div>
                    </div>
                    <div class="uk-width-3-5">
                        
                            <div uk-slideshow="autoplay: true">
                                <ul class="uk-slideshow-items">
                                    <li uk-slideshow-item="0">
                                        <img src="img/images15.jpg" alt="" uk-cover>
                                    </li>
                                    <li uk-slideshow-item="1">
                                        <img src="img/image16.jpg" alt="" uk-cover>
                                    </li>
                                </ul>
                            </div>
                    
                    </div>
                     <div class="uk-width-1-5">
                        <!-- Side Navigation -->
                        <div class="uk-card uk-card-default uk-card-body">
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="uk-nav-header">HELP CENTRE</li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: question"></span> FAQs</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span> Orders</a></li>
                            <li class="uk-nav-header">CONTACTS</li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: receiver"></span> 0745535920</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: mail"></span> info@shizzlefish.co.ke</a></li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Featured -->
        <div class="uk-section" id="featured">
            <div class="uk-container featured-inner">
                <div class="uk-grid uk-grid-match uk-grid-small uk-child-width-1-4">
                    <div class="uk-card uk-card-body uk-card-hover">
                        <img src="img/images.jpg">
                         <h3 class="uk-card-title">Featured Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="uk-card uk-card-body uk-card-hover">
                        <img src="img/images (2).jpg">
                        <h3 class="uk-card-title">Featured Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="uk-card uk-card-body uk-card-hover">
                        <img src="img/images (3).jpg">
                        <h3 class="uk-card-title">Featured Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="uk-card uk-card-body uk-card-hover">
                         <img src="img/images (6).jpg">
                         <h3 class="uk-card-title">Featured Item</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                </div>                
            </div>
        </div>
        <!-- CTA Section -->

        <!-- About -->
        <div class="uk-section" id="about">
            <div class="uk-container" id="about-inner">
                <div class="uk-grid">
                    <div class="uk-width-2-3">
                    <p>Shizzle Fish is a team that is passionate about Fish and Fish Products. The kind of fish supplied include, Tilapia, Nile perch both raw and fried formats. The fish is categorized into units, fillet etc. These fish products are obtained for the best deals and delivery is done to you our esteemed client. Do not hesitate to order from us. We have a reliable system just place an order and have it delivered to your door step.</p>
                    </div>
                    <div class="uk-width-1-3"><img src="img/images.jpg" class=""></div>
                </div>
            </div>
        </div>

        <footer class="uk-section">
            <div class="uk-container">
                <div class="uk-grid uk-child-width-expand uk-grid-match uk-grid-small">
                    <div>
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="uk-nav-header">LINKS</li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: info"></span> About Us</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: question"></span> Help Centre</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: plus-circle"></span> Careers</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="uk-nav-header">SOCIALS</li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: facebook"></span> ShizzleFish</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: twitter"></span> @shizzlefish</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: whatsapp"></span> 0745535920</a></li>
                        </ul>
                    </div>
                    <div>
                        <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                            <li class="uk-nav-header">CONTACT &AMP; LOCATION</li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: receiver"></span> 0722 123 456</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: mail"></span> info@shizzlefish.co.ke</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>

