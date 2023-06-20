<!DOCTYPE html>
<html lang="en">
<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
</head>
<body>
    <h1>appoimant details</h1>
    

    <table class="table table-dark">
  <thead>

  
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Contact Number</th>
      <th scope="col">Age</th>
      <th scope="col">Gender</th>
      <th scope="col">Doctor</th>
      <th scope="col">Date</th>
    </tr>
    
  </thead>
  <tbody>

  @foreach($data as $info)
    <tr>
    <td>{{$info->id}}</td>
      <td>{{$info->name}}</td>
      <td>{{$info->phone}}</td>
      <td>{{$info->age}}</td>
      <td>{{$info->gender}}</td>
      <td>{{$info->doctor}}</td>
      <td>{{$info->date}}</td>
    </tr>
    @endforeach
    
  </tbody>
</table>
</body>
</html>