@extends('includes.masterDashboard')

@section('title', 'Dashboard Create Paintings')

@section('content')
    <body>
    <div class="container mt-5 mb-3 text-center">
        <div class="card" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">Edit the painting {{$painting->title}}</h5>
                <p class="card-text">Edit the painting using the form below.</p>
            </div>
        </div>
    </div>


    <div class="container">
        <form method="POST" action="/dashboardAdmin/paintings/{{$painting->id}}">
            {{ method_field('PATCH') }}
            {{ csrf_field() }}
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputTitle">Title</label>
                    <input type="text" class="form-control" value="{{$painting->title}}" name="inputTitle" placeholder="Title Of The Piece">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputAuthorName">Author Name</label>
                    <input type="text" class="form-control" value="{{$painting->authorName}}" name="inputAuthorName" placeholder="Author Name">
                </div>
                <div class="form-group col-md-3">
                    <label for="inputAuthorName">Subject</label>
                    <input type="text" class="form-control" value="{{$painting->subject}}" name="inputSubject" placeholder="Author Name">
                </div>
                <div class="form-group col-md-34">
                    <label for="inputDescription">Description</label>
                    <input type="text" class="form-control" value="{{$painting->description}}" name="inputDescription" placeholder="Description">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-3">
                    <label for="inputMedium">Medium</label>
                    <select name="inputMedium" value="{{$painting->medium}}" class="form-control">
                        <option selected>Acrylic</option>
                        <option>Watercolour</option>
                        <option>Paper</option>
                        <option>Oil</option>
                        <option>Digital (Tablet/Mouse)</option>
                        <option>Pencil and charcoal</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputYearMade">Year Made</label>
                    <input type="text" class="form-control" value="{$painting->yearMade}}" name="inputYearMade" placeholder="The Year the painting was made">
                </div>
                <div class="form-group col-md-3">
                    <div class="form-group">
                        <label for="inputSize">Size</label>
                        <input type="text" class="form-control" value="{{$painting->size}}" name="inputSize" placeholder="Size">
                    </div>
                </div>
                <div class="form-group col-md-3">
                    <label for="inputMaterials">Materials</label>
                    <select name="inputMaterials" value="{{$painting->materials}}" class="form-control">
                        <option selected>Canvas</option>
                        <option>Wood Panels</option>
                        <option>Paper</option>
                    </select>
                </div>

            </div>
            <div class="form-row align-items-center">
                <div class="col-auto">

                    <div class="input-group mb-2">
                        <label class="sr-only" for="inputPrice">Price</label>
                        <input type="number" class="form-control" value="{{$painting->price}}" name="inputPrice" placeholder="Price $" id="inputPrice">
                    </div>
                </div>
                <div class="col-auto">
                    <div class="form-check mb-2">
                        <input type="hidden" name="onSaleCheck" value="0">
                        <input class="form-check-input" value="{{$painting->onSale}}" checked type="checkbox" name="onSaleCheck">
                        <label class="form-check-label" for="gridCheck">
                            On Sale
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
    </div>

@endsection