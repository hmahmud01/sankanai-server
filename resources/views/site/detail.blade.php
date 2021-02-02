@extends('site.main')

@section('main')
<div class="uk-container uk-padding">

<div class="uk-grid-small uk-text-right" uk-grid>
    <div class="uk-width-3-4@m uk-padding-large">
        <img class="product" data-src="{{ Storage::url($product->image) }}" alt="" uk-img>
    </div>
    <div class="uk-width-1-4@m">
    <article class="uk-article">
        <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{ $product->name }}</a></h1>

        <p class="uk-article-meta">Category: {{ $product->cattegory }}</p>        
        <p class="uk-text-lead">Price: {{ $product->price == 0.00 ? "Call For Price" : $product->price . "CA$" }}</p>
        <p>{{ $product->description }}</p>
        <a href="#" data-name="{{ $product->name }}" data-price="0.5" data-img="{{ Storage::url($product->image) }}" class="add-to-cart uk-button uk-button-secondary">Add to Wishlist</a>
        </article>
    </div>
</div>

</div>
@endsection