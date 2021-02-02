@extends('site.main-list')

@section('main')
    <div class="uk-container uk-padding">
        <div class="uk-text-center" uk-grid>
            <div class="uk-width-1-4@m uk-text-left">
                <ul uk-accordion>
                    <li>
                        <a class="uk-accordion-title" href="#">Bedroom</a>
                        <div class="uk-accordion-content">
                            <a href="{{ route('gallery.category', 'allsizesbed')}}">All Sizes Beds only</a><br>                            
                            <a href="{{ route('gallery.category', 'adultbed')}}">Adult Bedroom Sets</a><br>
                            <a href="{{ route('gallery.category', 'childrenbed')}}">Children/Youth Bedroom sets</a><br>
                            <a href="{{ route('gallery.category', 'bunkbed')}}">Bunk Beds</a><br>
                            <a href="{{ route('gallery.category', 'trundle')}}">Trundle/Day/Rollaway Beds</a><br>
                            <a href="{{ route('gallery.category', 'headboards')}}">Headboards only</a><br>
                            <a href="{{ route('gallery.category', 'bedframes')}}">Bed Frames</a><br>
                            <a href="{{ route('gallery.category', 'drawers')}}">Drawers Chests</a><br>
                            <a href="{{ route('gallery.category', 'dresser')}}">Dresser Mirrors</a><br>
                            <a href="{{ route('gallery.category', 'wardrobes')}}">Armoires/ Wardrobes</a><br>
                            <a href="{{ route('gallery.category', 'bedside')}}">Bedside Lamps</a><br>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Mattress</a>
                        <div class="uk-accordion-content">           
                            <a href="{{ route('gallery.category', 'basicmattresses')}}">Basic Mattresses</a><br>                                         
                            <a href="{{ route('gallery.category', 'hardmattresses')}}">Hard/Firm Mattress </a><br>
                            <a href="{{ route('gallery.category', 'mediummattresses')}}">Medium Firm Mattress </a><br>
                            <a href="{{ route('gallery.category', 'softmattresses')}}">Soft/Plush Mattress </a><br>                            
                            <a href="{{ route('gallery.category', 'childrenmattresses')}}">Children/Youth Mattress</a><br>                            
                            <a href="{{ route('gallery.category', 'memorymattress')}}">Memory/Gel Hybrid Mattress </a><br>                            
                            <a href="{{ route('gallery.category', 'luxurymattress')}}">Luxury in Lowest Price Mattresses </a><br>                            
                            <a href="{{ route('gallery.category', 'rollmattress')}}">Roll Pack Boxed Mattress </a><br>
                            <a href="{{ route('gallery.category', 'boxsprings')}}">Box Springs</a><br>                            
                            <a href="{{ route('gallery.category', 'pillow')}}">Pillows/Comforters </a><br>
                            <a href="{{ route('gallery.category', 'bedsheets')}}">Bed Sheets </a><br>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Dining Room</a>
                        <div class="uk-accordion-content">
                            <a href="{{ route('gallery.category', 'smalldine')}}">Small Size Dinettes </a><br>
                            <a href="{{ route('gallery.category', 'mediumdine')}}">Medium Size Dining sets </a><br>
                            <a href="{{ route('gallery.category', 'largedine')}}">Large Size Dining Sets</a><br>                            
                            <a href="{{ route('gallery.category', 'glassdine')}}">Glass top Dining sets</a><br>                            
                            <a href="{{ route('gallery.category', 'pubdine')}}">Pub Height Dining Sets</a><br>
                            <a href="{{ route('gallery.category', 'tables')}}">Tables only </a><br>
                            <a href="{{ route('gallery.category', 'chairs')}}">Chairs only </a><br>
                            <a href="{{ route('gallery.category', 'barstools')}}">Barstools/ Counter Stools</a><br>
                            <a href="{{ route('gallery.category', 'servers')}}">Servers</a><br>
                            <a href="{{ route('gallery.category', 'hutch')}}">Hutch Buffets</a><br>
                            <a href="{{ route('gallery.category', 'diningaccessories')}}">Dining Accessories </a><br>
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Living Room</a>
                        <div class="uk-accordion-content">
                            <a href="{{ route('gallery.category', 'fabricsofa')}}">Fabric Sofas & Sectionals</a><br>                                                        
                            <a href="{{ route('gallery.category', 'leathersofa')}}">Leather Sofas & Sectionals</a><br>                                                                                
                            <a href="{{ route('gallery.category', 'classicsofa')}}">Classic Traditional Sofa Sets</a><br>   
                            <a href="{{ route('gallery.category', 'reclinersofa')}}">All Types of Recliner Sofa Sets</a><br>             
                            <a href="{{ route('gallery.category', 'sofabeds')}}">Sofa Beds</a><br>
                            <a href="{{ route('gallery.category', 'klickklack')}}">Klick Klack/ Futons </a><br>
                            <a href="{{ route('gallery.category', 'accentarm')}}">Accent/Arm/Rocking Chairs</a><br>                            
                            <a href="{{ route('gallery.category', 'ottomans')}}">Ottomans & Benches </a><br>                            
                            <a href="{{ route('gallery.category', 'coffeetable')}}">Coffee/End/Hall table sets</a><br>                                                        
                            <a href="{{ route('gallery.category', 'rugs')}}">Rugs & Carpets</a><br>
                            <a href="{{ route('gallery.category', 'mirrors')}}">Mirrors </a><br>                                 
                        </div>
                    </li>
                    <li>
                        <a class="uk-accordion-title" href="#">Accent Furniture</a>
                        <div class="uk-accordion-content">
                            <a href="{{ route('gallery.category', 'lamps')}}">Lamps & Lights</a><br>
                            <a href="{{ route('gallery.category', 'studydesk')}}">Study/ Computer Desks</a><br>
                            <a href="{{ route('gallery.category', 'officedesk')}}">Office/ Study Chairs</a><br>
                            <a href="{{ route('gallery.category', 'bookshelves')}}">Bookshelves </a><br>
                            <a href="{{ route('gallery.category', 'decorationshelves')}}">Decoration Shelves</a><br>
                            <a href="{{ route('gallery.category', 'microstand')}}">Micro oven Stands/Shelves</a><br>
                            <a href="{{ route('gallery.category', 'coathanger')}}">Coat Hangers</a><br>
                            <a href="{{ route('gallery.category', 'mentaframe')}}">Metal Frames</a><br>
                            <a href="{{ route('gallery.category', 'decorationaccessories')}}">Decoration Accessories</a><br>
                            <a href="{{ route('gallery.category', 'clocks')}}">Clocks</a><br>
                            <a href="{{ route('gallery.category', 'furniturecare')}}">Furniture Care Products</a><br>
                        </div>
                    </li>
                </ul>                               
            </div>
            <div class="uk-width-3-4@m">
                <div class="uk-child-width-1-1@m" uk-grid>
                    <ul uk-accordion>
                        <li>
                            <a class="uk-accordion-title" href="#">Filter Option</a>
                            <div class="uk-accordion-content">
                                <p>Category name: {{ $cat }}</p>       
                                <a class="uk-button uk-button-default uk-width-1-1@s uk-margin-small-bottom" href="{{ route('gallery.catasc', $cat)}}">Sort Alphabetically A-Z</a>
                                <a class="uk-button uk-button-default uk-width-1-1@s uk-margin-small-bottom" href="{{ route('gallery.catdesc', $cat)}}">Sort Alphabetically Z-A</a>
                                <a class="uk-button uk-button-default uk-width-1-1@s uk-margin-small-bottom" href="{{ route('gallery.catupper', $cat)}}">Sort Price Low-High </a>
                                <a class="uk-button uk-button-default uk-width-1-1@s uk-margin-small-bottom" href="{{ route('gallery.catlower', $cat)}}">Sort Price High-Low </a>
                            </div>
                        </li>
                    </ul> 
                    <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match uk-text-right" uk-grid>
                        @foreach($products as $product)
                        <div>
                            <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-margin" uk-grid>
                                <div class="uk-card-media-left uk-cover-container">
                                    <img src="{{ Storage::url($product->image) }}" alt="" uk-cover>
                                    <canvas width="600" height="400"></canvas>
                                </div>
                                <div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">{{ $product->name }}</h3>
                                        <p class="uk-text-truncate">{{ $product->description }}</p>                            
                                        <a href="{{ route('gallery.detail', $product->id)}}" class="uk-button uk-button-text">Detail</a>
                                        <a href="#" data-name="{{ $product->name }}" data-price="0.5" data-img="{{ Storage::url($product->image) }}" class="add-to-cart uk-button uk-button-text">Add to Wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>        

    </div>
@endsection