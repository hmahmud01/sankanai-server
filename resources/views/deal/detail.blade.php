@extends('site.main')

@section('main')
<div class="uk-container uk-padding">

<div class="uk-grid-small uk-text-right" uk-grid>
    <div class="uk-width-3-4@m uk-padding-large">
        <img class="product" data-src="{{ Storage::url($deal->image) }}" alt="" uk-img>
    </div>
    <div class="uk-width-1-4@m uk-margin">
    <article class="uk-article">
        <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{ $deal->name }}</a></h1>

        <p class="uk-article-meta">Category: {{ $deal->cattegory }}</p>                
        <p class="uk-text-lead">Price: {{ $deal->price == 0.00 ? "Call For Price" : $deal->price . "CA$" }}</p>        
        <p>{{ $deal->description }}</p>
        <a href="#" data-name="{{ $deal->name }}" data-price="0.5" data-img="{{ Storage::url($deal->image) }}" class="add-to-cart uk-button uk-button-secondary">Add to Wishlist</a>
        </article>
    </div>
</div>

</div>
@endsection
