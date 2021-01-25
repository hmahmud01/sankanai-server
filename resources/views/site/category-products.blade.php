@extends('site.main-list')

@section('main')
<div class="uk-container uk-padding">
    <div class="uk-child-width-1-1@m uk-grid-small" uk-grid>
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
                            <a href="#" data-name="{{ $product->name }}" data-price="0.5" data-img="{{ Storage::url($product->image) }}" class="add-to-cart uk-button uk-button-text">Add to Cart</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection