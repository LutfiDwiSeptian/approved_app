<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <style>

    </style>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admin Dashboard</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <h5> Halo {{$name}}</h5>
            </a>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <div class="collapse navbar-collapse" id="navbarNav">
             <ul class="navbar-nav ms-auto">
               <li class="nav-item active">
                 <a class="nav-link" href="{{url('/admin/home')}}">Home <span class="sr-only"></span></a>
               </li>
               <li class="nav-item active">
                   <a class="nav-link" href="{{url('/admin/tambah')}}">Tambah User<span class="sr-only"></span></a>
                 </li>
               <li class="nav-item active">
                   <a class="nav-link" href="{{url('/logout')}}">Logout<span class="sr-only"></span></a>
                 </li>
             </ul>
           </div>
        </div>
      </nav>
  <div class="page-header">
    <div class="container-xl">
        <div class="row g-2 align-item-center">
            <div class="col">
                <h2 class="page-title">
                    Daftar Karyawan
                </h2>
            </div>
        </div>
    </div>
  </div>
  <div class="page-body">
    <div class="container xl">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                               <div class="row">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($karyawan as $d )
                                        <tr>
                                            <td>{{ $loop->iteration}}</td>
                                            <td>{{ $d->name}}</td>
                                            <td>{{ $d->email}}</td>
                                            <td>{{ $d->role}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                {{ $karyawan->links('pagination::bootstrap-5') }}
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</body>
</html>
