<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href=" {{ asset('boostrap/css/bootstrap.css') }}">
</head>
<body>
    
    <div class="text-center mt-4">
        <h2>Apllication Regist</h2>
        <p>- please fill out this form to register -</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('registrasi.submit')}}" method="post">
                        @csrf
                        <label>Full Name</label>
                        <input type="text" name="name" class="form-control mb-2">
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control mb-2">
                        <label>Passwword</label>
                        <input type="password" name="password" class="form-control mb-2">

                        <button class="btn btn-primary"> Registration </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>