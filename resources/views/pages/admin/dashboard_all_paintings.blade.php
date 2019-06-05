@extends('includes.masterDashboard')

@section('title', 'Dashboard Paintings')

@section('content')
    <body>
    <div class="container-fluid m-0 p-0">
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <td><h3>All Paintings</h3></td>
                </tr>
                <tr>
                    <th style="width: 10%!important" scope="col">Id</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Author Name</th>
                    <th scope="col">Size</th>
                    <th scope="col">Material</th>
                    <th scope="col">Medium</th>
                    <th scope="col">Year Made</th>
                    <th scope="col">Price</th>
                    <th scope="col">Delete</th>
                    <th scope="col">Edit</th>
                </tr>
                </thead>

                @foreach($paintings as $painting)
                    <tr>
                        <th scope="row" class="col-md-1">{{$painting->id}}</th>
                        <td class="col-md-1">{{$painting->title}}</td>
                        <td class="col-md-1">{{$painting->description}}</td>
                        <td class="col-md-1">{{$painting->subject}}</td>
                        <td class="col-md-1">{{$painting->authorName}}</td>
                        <td class="col-md-1">{{$painting->size}}</td>
                        <td class="col-md-1">{{$painting->materials}}</td>
                        <td class="col-md-1">{{$painting->medium}}</td>
                        <td class="col-md-1">{{$painting->yearMade}}</td>
                        <td class="col-md-1">{{$painting->price}}</td>
                        <td class="col-md-1">
                            <form method="POST" action="/dashboardAdmin/paintings/{{$painting->id}}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger m-2">DELETE</button>
                            </form>
                        </td>
                        <td class="col-md-1">
                            <form method="POST" action="/dashboardAdmin/paintings/{{$painting->id}}/edit/">
                                {{ method_field('PATCH') }}
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-info m-2">EDIT</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

@endsection
