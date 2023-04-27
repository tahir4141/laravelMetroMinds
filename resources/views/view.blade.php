<!DOCTYPE html>
<html lang="en">
<head>
  <title>Employee Table</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container pt-5">
  
  <h2>Employee Table</h2>
  <a href="{{url('home')}}"><button type = "submit" style="float:right; " class = "btn btn-primary">Add</button></a>
  <table class="table table-bordered p-5">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Age</th>
        <th>City</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($employees as $data)
      <tr >
        <td>{{$data['first_name']}}</td>
        <td>{{$data['email']}}</td>
        <td>{{$data['age']}}</td>
        <td>{{$data['city']}}</td>
        <td>
        <a href= "{{ url('edit/'.$data['id']) }}" class="btn btn-success">Update</a>
          <a href="{{ url('delete/'.$data['id']) }}" class="btn btn-danger">Delete</a>
        </td>
      </tr>

      @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
