@extends('site.main')

@section('main')
<div class="uk-container uk-padding uk-margin">
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: fade; min-height: 300; max-height: 600; autoplay: true; autoplay-interval: 3000">
        <ul class="uk-slideshow-items">
            <li>
                <img src="assets/img/front/bedroom.JPG" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-left uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Bedroom</h3>
                    <p class="uk-margin-remove"><button class="uk-button uk-button-text">See catalogue</button></p>
                </div>
            </li>
            <li>
                <img src="assets/img/front/livingroom.JPG" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-left uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Living Room</h3>
                    <p class="uk-margin-remove"><button class="uk-button uk-button-text">See catalogue</button></p>
                </div>
            </li>
            <li>
                <img src="assets/img/front/mattress.JPG" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-left uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Mattress</h3>
                    <p class="uk-margin-remove"><button class="uk-button uk-button-text">See catalogue</button></p>
                </div>
            </li>
            <li>
                <img src="assets/img/front/diningroom.JPG" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-left uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Dining Room</h3>
                    <p class="uk-margin-remove"><button class="uk-button uk-button-text">See catalogue</button></p>
                </div>
            </li>
            <li>
                <img src="assets/img/front/accent.JPG" alt="" uk-cover>
                <div class="uk-overlay uk-overlay-primary uk-position-bottom uk-text-left uk-transition-slide-bottom">
                    <h3 class="uk-margin-remove">Accent Furnitures</h3>
                    <p class="uk-margin-remove"><button class="uk-button uk-button-text">See catalogue</button></p>
                </div>
            </li>        
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

    </div>
</div>  

<div class="uk-container uk-margin">
    <div class="uk-child-width-1-3@s uk-grid-match" uk-grid>
        <div>
            <div class="uk-inline">
                <img src="assets/img/front/children.JPG" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                    <p>Children/Youth/Students Furniture</p>
                    <a href="{{ route('childrenindex') }}" class="uk-button uk-button-danger uk-button-small">Check Offers</a>    
                </div>
            </div>
        </div>
        <div>
            <div class="uk-inline">
                <img src="assets/img/front/monthlyflyer.JPG" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                    <p>Monthly Flyers</p>
                    <a href="{{ route('flyerindex') }}" class="uk-button uk-button-danger uk-button-small">Check Offers</a>    
                </div>
            </div>
        </div>
        <div>
            <div class="uk-inline">
                <img src="assets/img/front/packagedeals.JPG" alt="">
                <div class="uk-overlay uk-overlay-primary uk-position-bottom">
                    <p>Package Deals</p>
                    <a href="{{ route('packageindex') }}" class="uk-button uk-button-danger uk-button-small">Check Offers</a>    
                </div>
            </div>
        </div>

    </div>
</div>

@endsection