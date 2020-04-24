<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-sm navbar-light bg-light ">
            <a class="navbar-brand" href="#">Gober Library</a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse d-flex justify-content-end" id="collapsibleNavId">
                <ul class="navbar-nav align-self-center">
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/dashboard')}}">Library <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="{{url('/show-collection')}}">My Collection</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/edit-profile')}}">Profile</a>
                    </li>
                </ul>
            </div>
        </nav>
  <h1 class="text-center">Edit Profile</h1>
<form action="{{url('change-profile')}}" method="POST" class="container-fluid col-6 mt-4">
  @csrf
    <div class="form-group">
      <label for="exampleInputPassword1">Name</label>
    <input type="text" class="form-control"  placeholder="Name" value="{{$user->name}}" name="user_name"> 
    </div>
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Enter email" value="{{$user->email}}" name="user_email">
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <button type="submit" class="btn btn-primary">Change Profile</button>
    <a class="btn btn-danger" href="{{url('log-out')}}">Log Out</a>
  </form>

</body>
</html>