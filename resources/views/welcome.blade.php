<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href=" {{ asset('boostrap/css/bootstrap.css') }}">
</head>
<body>
    
    <h1 class="text-center mt-3">Welcome to CRUD Dashboard</h1>

    <div class="text-center mt-5">
    <a href="{{ route('siswa.tampil') }}" class="btn btn-primary">Mnagement Student</a>
    </div>

</body>

</html>