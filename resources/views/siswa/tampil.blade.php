@extends('layout')

@section('konten')


<div class="d-flex">
    <h4>List</h4>
    <div class="ms-auto">
        <a class="btn btn-success" href="{{ route('siswa.tambah') }}">Tambah</a>
    </div>
</div>

<table class="table">
    <tr>
        <th>No</th>
        <th>Nis</th>
        <th>Name</th>
        <th>Addres</th>
        <th>Number</th>
        <th>Gender</th>
        <th>Aksi</th>
    </tr>
    @foreach ($siswa as $no=>$data)
        <tr>
            <td>{{ $no+1 }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->addres }}</td>
            <td>{{ $data->number }}</td>
            <td>{{ $data->gender }}</td>
            <td>
                <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                <form action="{{ route('siswa.delete', $data->id) }}" method="post">
                    @csrf
                    <button class="btn btn-sm btn-danger mt-2">Delete</button>
                </form>
            </td>
        </tr>
    @endforeach
</table>

@endsection