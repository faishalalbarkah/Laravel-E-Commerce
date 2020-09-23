@extends('Admin.layouts.app')
@section('title', 'add product')
    @push('css')
        <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
        <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" />
    @endpush
@section('contentadmin')
    <div class="container">
        <form class="form-addproducts">
            <h2>Form Add Product</h2>
            <div class="form-group">
                <label for="exampleFormControlInput1">Name</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Harga </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Harga">
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Stok </label>
                <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Stok">
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1">Description </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label for="exampleFormControlInput1">Jenis </label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Jenis">
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">Gambar </label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">--Masukan Menu--</label>
                <select class="form-control" id="exampleFormControlSelect1">
                    <option>Cake</option>
                    <option>Cookies</option>
                </select>
            </div>
            <button class="btn-success button-add-products">Save</button>
        </form>
    </div>
@endsection
