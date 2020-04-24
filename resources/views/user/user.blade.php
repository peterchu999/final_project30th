<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <style>
        body{
            margin: 0;
        }
        .main, .row{
            height: 100vh;
        }
        .sides-menu{
            background: rgba(0, 0, 0, 0.8);
            height: 100vh;
        }
    </style>
</head>
<body>
    <div class="container-fluid main">
        <nav class="navbar navbar-expand-sm navbar-light bg-light ">
            <a class="navbar-brand" href="#">Gober Library</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavId">
                <ul class="navbar-nav align-self-center">
                    <li class="nav-item active">
                    <a class="nav-link" href="{{url('/dashboard')}}">Library <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/show-collection')}}">My Collection</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/edit-profile')}}">Profile</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="d-flex container">
        @foreach ($books as $book)
    <form action="{{url('get-book')}}" method="post">
        @csrf
            @if($book->owner_id === null)
            <div class="card mr-3" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$book->book_name}}</h5>
                    <p class="card-text">Category :{{$book->book_category}}</p>
                    <p class="card-text">Year     :{{$book->book_year}}</p>
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <button class="btn btn-success">Add To Collection</a>
                </div>
            </div>
            @endif
        </form>
        @endforeach
    </div>
    </div>
</body>
</html>