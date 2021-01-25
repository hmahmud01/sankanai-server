@extends('site.main')

@section('main')
<div class="category-content uk-container uk-padding">

<div class="uk-grid-small uk-text-right" uk-grid>
    <div class="uk-width-3-4">
        <img class="product" data-src="{{ Storage::url($deal->image) }}" alt="" uk-img>
    </div>
    <div class="uk-width-1-4">
    <article class="uk-article">
        <h1 class="uk-article-title"><a class="uk-link-reset" href="">{{ $deal->name }}</a></h1>

        <p class="uk-article-meta">Category: {{ $deal->cattegory }}</p>        

        <p>{{ $deal->description }}</p>

        </article>
    </div>
</div>

</div>
@endsection