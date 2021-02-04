<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sankanai Furniture</title>
    <link rel="stylesheet" href="assets/css/uikit.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">

</head>
<body>  
    <div class="prenav">
    
        <p class="nomargin nopadding uk-text-right uk-margin-right uk-visible@m">Sankanai Furniture & Mattress, 2563 Eglinton Avenue East, Scarborough, ON M1K 2R7 Tel: (416) 264-9642</p>
        <p class="nomargin nopadding uk-text-center uk-margin-right uk-hidden@m">Sankanai Furniture & Mattress, 2563 Eglinton Avenue East, Scarborough, ON M1K 2R7 Tel: (416) 264-9642</p>
    </div>
    <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-light; top: 200">
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo nav-item-height" href="/"><img class="logo-img" src="assets/img/logo.png" alt="Sankanai"></a>
                <ul class="uk-navbar-nav uk-visible@m">
                    <li><a class="uk-button uk-button-text nav-item-height" href="{{ route('gallery.index')}}">All Categories</a></li>
                    <li><a class="uk-button uk-button-text nav-item-height" href="{{ route('dealindex') }}">Deals & Promotions</a></li>
                    <li><a class="uk-button uk-button-text nav-item-height" href="{{ route('saveindex') }}">Save on Mattresses</a></li>
                    <li><a class="uk-button uk-button-text nav-item-height" href="{{ route('clearanceindex') }}">clearance</a></li>
                </ul>
        
            </div>
            <div class="uk-navbar-right">                
                <ul class="uk-navbar-nav uk-visible@m">
                    <!-- <li><a href="#">Sign in</a></li> -->
                    <li><a href="#cartlayer" uk-toggle><span class="uk-margin-small-right" ></span> Wishlist (<span class="total-count"></span>)</a></li>
                </ul>
                <a class="uk-navbar-toggle uk-hidden@m uk-icon uk-navbar-toggle-icon" uk-toggle="target: #main-menu"><span class="uk-margin-small-right" uk-icon="icon: menu"></span></a>
            </div>
        </nav>
    </div>
    <div id="main-menu" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar uk-light">
    
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <li class="uk-nav-header">Menu</li>
                <li><a class="uk-margin-small-right" href="{{ route('gallery.index')}}">All Categories</a></li>
                <li><a class="uk-margin-small-right" href="{{ route('dealindex')}}">Deals & Promotions</a></li>
                <li><a class="uk-margin-small-right" href="{{ route('saveindex')}}">Save on Mattresses</a></li>
                <li><a class="uk-margin-small-right" href="{{ route('clearanceindex')}}">Clearance</a></li>

                
                <li class="uk-nav-divider"></li>
                <!-- <li><a href="#"><span class="uk-margin-small-right" ></span> Login</a></li> -->
                <li><a href="#cartlayer" uk-toggle><span class="uk-margin-small-right" ></span> Cart (<span class="total-count"></span>)</a></li>
            </ul>
    
        </div>
    </div>

    <div id="cartlayer" uk-offcanvas="flip: true; overlay: true">
        <div class="uk-offcanvas-bar">

            <button class="uk-offcanvas-close" type="button" uk-close></button>            
            <h3>Your Wishlist</h3>            
            <form class="uk-form-stacked" method="POST" action="{{ route('sendemail') }}">@csrf
                <table class="uk-table uk-table-divider show-cart">
                </table>
                <button class="clear-cart uk-button uk-button-primary uk-button-small">Clear Cart</button>
                <div class="uk-margin">
                    <label class="uk-form-label" for="name">Name</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="name" name="name" type="text" placeholder="Name">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="email">Email Address</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="email" name="email" type="email" placeholder="Email Address" required>
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="phone">Phone Number (Optional)</label>
                    <div class="uk-form-controls">
                        <input class="uk-input" id="phone" name="phone" type="text" placeholder="Phone Number (Optional)">
                    </div>
                </div>

                <div class="uk-margin">
                    <label class="uk-form-label" for="notes">Message</label>
                    <div class="uk-form-controls">
                        <textarea class="uk-textarea" id="notes" name="notes" type="text" rows="5" placeholder="Message"></textarea>
                    </div>
                </div>

                <button type="submit" class="uk-button uk-button-default uk-width-1-1 uk-margin-small-bottom">Submit</button>
            </form>
        </div>
    </div>
    <!-- SLIDER -->
    @yield('main')    


    <footer>
        <div class="uk-section uk-section-secondary uk-light uk-padding-remove-top uk-padding-remove-bottom">
            <div class="uk-container uk-padding">        
                <p class="uk-text-right">Sankanai Furniture & Mattresses. Developed by Shareng.biz</p>    
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <script src="assets/js/uikit.js"></script>
    <script src="assets/js/uikit-icons.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/script.js"></script>
    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
</body>
</html>

