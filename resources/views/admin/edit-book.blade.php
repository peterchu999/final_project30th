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
  <h1 class="text-center">Edit Book</h1>
  <form action="{{url('/admin/edit-book')}}" method="POST" class="container-fluid col-6 mt-4">
    @csrf
    <div class="form-group">
        <label for="exampleInputPassword1">Book Name</label>
    <input type="text" class="form-control"  placeholder="Name"  name="book_name" value="{{$book->book_name}}"> 
    </div>
    <div class="form-group">
            <label for="exampleInputPassword1">Book Year</label>
            <input type="text" class="form-control"  placeholder="Publish Year"  name="book_year" value="{{$book->book_year}}"> 
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Book Category</label>
        <select class="form-control" id="exampleFormControlSelect2" name="book_category">
            <option value="Geographic">Geography</option>
            <option value="Fiction">Fiction</option>
            <option value="Science">Science</option>
            <option value="Computer">Computer</option>
            <option value="Design">Design</option>
        </select>
    </div>
    <input type="hidden" name="id" value="{{$book->id}}">
    <button type="submit" class="btn btn-secondary">Edit book</button>
    <a class="btn btn-warning" href="{{url('admin/dashboard')}}">Go back</a>
</form>
</body>
</html>