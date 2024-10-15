<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <link rel="stylesheet" href=" {{ asset('boostrap/css/bootstrap.css') }}">
</head>

<body>

    <h1 class="text-center mt-3">CRUD Laravel 11</h1>

    @if (Auth::check())
        <div class="text-center">
            <b>Halo {{ Auth::user()->name }}, Anda Berhasil Login</b>
            <form action="{{ route('logout') }}" method="post">
                @csrf
                <button class="btn btn-danger btn-sm mt-2">Logout</button>
            </form>
        </div>
    @endif


    <div class="mt-3 container">
        @yield('konten')
    </div>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#form-ajax").submit(function (e) {
                e.preventDefault(); 

                var form = $(this);
                var url = form.attr('action'); 
                var method = form.attr('method'); 
                var data = form.serialize(); 

                $.ajax({
                    type: method, 
                    url: url,     
                    data: data,
                    success: function (response) {
                        
                        alert(response.message);

                    
                        form[0].reset();

                        
                        window.location.href = "{{ route('siswa.tampil') }}";
                    },
                    error: function (xhr, status, error) {
                        
                        alert('Data gagal disimpan: ' + xhr.responseText);
                    }
                });
            });
        });
    </script>

</body>

</html>