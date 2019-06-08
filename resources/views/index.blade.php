@extends('includes.masterApp')

@section('title', 'ePantings')

@section('content')
    <main role="main">
        <div class="image-over" style="background-image: url('img/h52.png');">
            <div class="container">
                    <div class="image-over-div">
                        <h1>Paintings</h1>
                        <h2>Choose for a wide selection off paintings</h2>
                    </div>
                    <div>
                        <p>
                            <a href="#" class="btn btn-primary my-2">See all available paintings</a>
                            <a href="#" class="btn btn-secondary my-2">See all special offers</a>
                        </p>
                    </div>


            </div>
        </div>
        <div class="album py-5 bg-light">
            <div class="container">
                <div class="row">
                    @foreach($paintings as $painting)
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <img class="card-img-top border-dark" data-src="{{url('uploads/'.$painting->filename)}}" alt="{{$painting->title}}" src="{{url('uploads/'.$painting->filename)}}" data-holder-rendered="true">
                            <div class="card-body">
                                <h4 class="card-text">Title: {{$painting->title}}</h4>
                                <h6 class="card-text">Description: {{$painting->description}}</h6>
                                <span class="card-text">Size: {{$painting->size}}</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                                    </div>
                                    <small class="text">Price: {{$painting->price}}$</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
