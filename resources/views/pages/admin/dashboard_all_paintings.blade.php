@extends('includes.masterDashboard')

@section('title', 'Dashboard Paintings')

@section('content')
    <body>
    <div class="container mt-5 mb-3 text-center">
        <div class="card" style="width: 100%">
            <div class="card-body">
                <h5 class="card-title">List All Painting</h5>
            </div>
        </div>
    </div>

    @foreach($paintings as $painting)
        <table class="table">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                <th scope="col">Subject</th>
                <th scope="col">Author Name</th>
                <th scope="col">Size</th>
                <th scope="col">Material</th>
                <th scope="col">Medium</th>
                <th scope="col">Year Made</th>
                <th scope="col">Price</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row">{{$painting->id}}</th>
                <td>{{$painting->title}}</td>
                <td>{{$painting->description}}</td>
                <td>{{$painting->subject}}</td>
                <td>{{$painting->authorName}}</td>
                <td>{{$painting->size}}</td>
                <td>{{$painting->materials}}</td>
                <td>{{$painting->medium}}</td>
                <td>{{$painting->yearMade}}</td>
                <td>{{$painting->price}}</td>
                <td><button class="btn btn-danger">Delete</button></td>
                <td><button class="btn btn-info">Edit</button></td>
            </tr>
            </tbody>
        </table>
    @endforeach
@endsection
