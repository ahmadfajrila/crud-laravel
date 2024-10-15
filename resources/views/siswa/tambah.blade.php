@extends('layout')

@section('konten')

<h4>Tambah Siswa</h4>

<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label>NIS</label>
    <input type="number" name="nis" class="form-control mb-2">
    <label>Name</label>
    <input type="text" name="name" class="form-control mb-2">
    <label>Address</Address></label>
    <input type="text" name="addres" class="form-control mb-2">
    <label>Number</label>
    <input type="number" name="number" class="form-control mb-2">
    <label>Gender</label>
    <input type="text" name="gender" class="form-control mb-2">

    <button class="btn btn-primary">Add Siswa</button>
</form>

@endsection