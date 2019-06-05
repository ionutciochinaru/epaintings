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
                            <img class="card-img-top" data-src="holder.js/100px180/?text=Image cap" alt="Image cap [100%x180]" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22286%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20286%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b17c2f049%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b17c2f049%22%3E%3Crect%20width%3D%22286%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2299.1640625%22%20y%3D%2296.271875%22%3EImage%20cap%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true" style="height: 180px; width: 100%; display: block;">
                            <div class="card-body">
                                <h4 class="card-text">Title: {{$painting->title}}</h4>
                                <h6 class="card-text">Description: {{$painting->description}}</h6>
                                <span class="card-text">Size: {{$painting->size}}</span>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Buy</button>
                                    </div>
                                    <small class="text-muted">Price: {{$painting->price}}$</small>
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
