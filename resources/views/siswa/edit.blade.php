@extends('layout')

@section('konten')

<h4>Edit Siswa</h4>

<form action="{{ route('siswa.update', $siswa->id) }}" method="post">
    @csrf
    <label>NIS</label>
    <input type="number" name="nis" value="{{ $siswa->nis }}" class="form-control mb-2">
    <label>Name</label>
    <input type="text" name="name" value="{{ $siswa->name }}" class="form-control mb-2" readonly>
    <label>Address</Address></label>
    <input type="text" name="addres" value="{{ $siswa->addres }}" class="form-control mb-2">
    <label>Number</label>
    <input type="number" name="number" value="{{ $siswa->number }}" class="form-control mb-2">
    <label>Gender</label>
    <input type="text" name="gender" value="{{ $siswa->gender }}" class="form-control mb-2">

    <button class="btn btn-warning">Edit Siswa</button>
</form>

@endsection