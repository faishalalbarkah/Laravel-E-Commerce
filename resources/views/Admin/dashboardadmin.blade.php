@extends('Admin.layouts.app')
@section('title', 'dashboard')
    @push('css')
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-grid.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap-reboot.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.min.css') }}" type="text/css" />
    <link rel="stylesheet" href="{{ asset('/css/bootstrap.css') }}" type="text/css" />
    @endpush
@section('contentadmin')
    <div class="container">
        <button class="btn-success button-add-products shadow">Add Product</button>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Description</th>
                    <th scope="col">Jenis</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama Menu</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Rp. 200.000</td>
                    <td>120</td>
                    <td>-</td>
                    <td>Kue Basah</td>
                    <td>bukti.jpg</td>
                    <td>Cake</td>
                    <td class="d-flex justify-content-between">
                        <div class="btn-edit">
                            <button class="btn-warning">Edit</button>
                        </div>
                        <div class="btn-hapus">
                            <button class="btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Mark</td>
                    <td>Rp. 200.000</td>
                    <td>120</td>
                    <td>-</td>
                    <td>Kue Basah</td>
                    <td>bukti.jpg</td>
                    <td>Cake</td>
                    <td class="d-flex justify-content-between">
                        <div class="btn-edit">
                            <button class="btn-warning">Edit</button>
                        </div>
                        <div class="btn-hapus">
                            <button class="btn-danger">Hapus</button>
                        </div>
                    </td>
                </tr>

            </tbody>
        </table>
    </div>
@endsection
