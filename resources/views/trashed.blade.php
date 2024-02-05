<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cars Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Hover Rows</h2>
  <p>The .table-hover class enables a hover state on table rows:</p>            
  <table class="table table-hover">
    <thead>
    <tr>
    <th>Title</th>
    <th>content</th>
    <th>Luggage</th>
    <th>Doors</th>
    <th>Passengers</th>
   <th>image</th>
    <th>Price</th>
    <th>Active</th>
    <th>restore</th>
    <th>destroy</th>
    <th>Delete</th>
    </tr>
    </thead>
    <tbody>
    <tr>
    @foreach($car as $cars)
        <tr>
        <td>{{ $cars->title }}</td>
        <td>{{ $cars->content }}</td>
        <td>{{ $cars->Luggage }}</td>
        <td>{{ $cars->Doors }}</td>
        <td>{{ $cars->Passengers }}</td>
        <td>{{ $cars->image }}</td>
        <td>{{ $cars->price }}</td>
    <td>
        @if( $cars->Active)
        true 👍
        @else
        faulse 🤦‍♀️
        @endif
    </td>
        
        <td><a href="restorecars/{{$cars->id}}">restore</a></td>
        <td><a href="destroynews/{{$cars->id}}">destroy</a></td>
        <td><a href="delete/{{$cars->id}}">delete</a></td>

      </tr>
      
      @endforeach

    </tbody>
</div>

</body>
</html>
