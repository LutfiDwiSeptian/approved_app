<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
<div class="p-4 shadow-4 rounded-3 card" style="background-color: hsl(0, 0%, 94%);">
    <div class="card-body">
        <h2>Login as Direktur </h2>
        <h2>Halo {{$name}}</h2>
    <p>
      This is a simple hero unit, a simple jumbotron-style component for calling extra
      attention to featured content or information.
    </p>

    <hr class="my-4" />

    <p>
      It uses utility classes for typography and spacing to space content out within the
      larger container.
    </p>
    <a href="{{route('logout')}}" class="btn btn-sm btn-primary">Logout</a>
    </div>
  </div>

</body>
</html>
