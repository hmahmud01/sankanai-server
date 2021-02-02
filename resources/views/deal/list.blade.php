@extends('site.main-list')

@section('main')
<div class="uk-container uk-padding">
        <div class="uk-child-width-1-2@m uk-grid-small uk-grid-match uk-text-right" uk-grid>
            @foreach($deals as $deal)
            <div>
                <div class="uk-card uk-card-default uk-grid-collapse uk-child-width-1-2@m uk-margin" uk-grid>
                    <div class="uk-card-media-left uk-cover-container">
                        <img src="{{ Storage::url($deal->image) }}" alt="" uk-cover>
                        <canvas width="600" height="400"></canvas>
                    </div>
                    <div>
                        <div class="uk-card-body">
                            <h3 class="uk-card-title">{{ $deal->name }}</h3>
                            <p class="uk-text-truncate">{{ $deal->description }}</p>                            
                            <a href="{{ route('deals.show', $deal)}}" class="uk-button uk-button-text">Detail</a>
                            <a href="#" data-name="{{ $deal->name }}" data-price="0.5" data-img="{{ Storage::url($deal->image) }}" class="add-to-cart uk-button uk-button-text">Add to Wishlist</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection