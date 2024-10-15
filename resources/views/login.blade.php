<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Laravel 11</title>
    <link rel="stylesheet" href=" {{ asset('boostrap/css/bootstrap.css') }}">
</head>
<body>
    
    <div class="text-center mt-4">
        <h2>Apllication Regist</h2>
        <p>- Please log in with your account -</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('login.submit')}}" method="post">
                        @csrf
                        <label>Email Address</label>
                        <input type="email" name="email" class="form-control mb-2">
                        <label>Passwword</label>
                        <input type="password" name="password" class="form-control mb-2">

                        <button class="btn btn-primary"> Login </button>
                    </form>

                    @if (session('gagal'))
                    <p class="text-danger">{{session('gagal')}}</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</body>
</html>