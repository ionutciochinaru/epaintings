<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/product.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <link rel="stylesheet" href="/css/dashboardAdmin.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
</head>
<body class="holy-grail">
<div class="holy-grail-body">

    <section class="holy-grail-content">
        @yield('content')
    </section>

    <div class="holy-grail-sidebar-1 hg-sidebar">
        <ul class="nav flex-column">
            <li class="nav-item nav-sidebar-profile">
                <a class="nav-link" href="/dashboardAdmin">
                    <i class="fas fa-chalkboard-teacher fa-lg"></i> <span class="text-center ml-3">{{ Auth::user()->name }}</span>
                </a>
            </li>
            <li class="nav-item nav-link-sidebar">
                    <a class="nav-link" href="/dashboardAdmin/paintings">
                        <span data-feather="Paintings"></span>
                         <i class="fas fa-palette"> </i> Paintings
                    </a>
            </li>
            <li class="nav-item nav-link-sidebar">
                    <a class="dropdown-item" href="/dashboardAdmin/paintings/create"><i class="fas fa-spray-can"></i> Add Painting </a>
            </li>
            <li class="nav-item nav-link-sidebar">
                <a class="nav-link" href="#">
                    <span data-feather="users"></span>
                    <i class="far fa-newspaper"></i> Articles
                </a>
            </li>
            <li class="nav-item nav-link-sidebar">
                <a class="nav-link" href="#">
                    <span data-feather="file"></span>
                    <i class="fas fa-book"></i> Orders
                </a>
            </li>
            <li class="nav-item nav-link-sidebar">
                <a class="nav-link" href="#">
                    <span data-feather="layers"></span>
                    <i class="fas fa-user-edit"></i> Customers
                </a>
            </li>
            <li class="nav-item nav-link-sidebar">
                <a class="nav-link" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">
                    <i class="fas fa-sign-out-alt"></i> {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </li>
        </ul>
    </div>

</div>

<div class="flex-container">
    <nav class="d-none d-md-block bg-light sidebar">
        <div class="sidebar-sticky">

        </div>
        <div>

        </div>
    </nav>

</div>

</body>
<script src="/js/app.js" charset="utf-8"></script>
<script src="/js/all.min.js" charset="utf-8"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>