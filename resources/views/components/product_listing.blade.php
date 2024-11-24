@extends('layouts.app')
@section('title') Product List - shopnow @endsection
@section('keyword') Product Listing @endsection
@section('description') Product Listing @endsection
@include('Reusable_components.user.header')

@section('content')
<div class="container m-3">
    <div class="text-center mb-4">
        <div>
            <font color="#008000" face="Arial Black">
                <span style="font-size: 24px;"><b>Festivel Offer 50%</b></span>
            </font><br>
        </div>
    </div>
    
    <div class="text-center mb-4">
        <div class="row">
            @foreach ($products as $item)
                <div class="col-md-4 m-3">
                    <div class="card">
                        <img src="https://via.placeholder.com/175" class="card-img-top" alt="{{$item->title}}">
                        <div class="card-body">
                            <h5 class="card-text">{{$item->name}}</h5>
                            <p>{!! $item->additional_info !!}</p>
                            <div class="list-group list-group-flush">
                                <div class="list-group-item">{{$item->name}}</div>
                                <div class="list-group-item"><b><i>Price:</i></b>₹{{ $item->price }}</div>
                            </div>
                            <button type="button" class="btn-primary btn">Add to cart</button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="d-flex justify-content-between ">
        @if($products->onFirstPage())
            <button class="btn btn-secondary" disabled>Previous</button>
        @else
            <a href="{{ $products->previousPageUrl() }}" class="btn btn-primary">Previous</a>
        @endif

        @if($products->hasMorePages())
            <a href="{{ $products->nextPageUrl() }}" class="btn btn-primary">Next</a>
        @else
            <button class="btn btn-secondary" disabled>Next</button>
        @endif
    </div>

</div>
@include('Reusable_components.user.footer')
@endsection
