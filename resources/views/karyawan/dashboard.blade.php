@extends('master')
@section('title', 'Dashboard Karyawan')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                {{-- @if (auth()->user()->jabatan == 'Admin') --}}
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Karyawan</h2>
                    </div>
                    <div class="col-sm-2">
                        <a type="button" class="btn btn-block btn-outline-primary" href="{{ url('tambah-karyawan') }}">Tambah</a>
                    </div>
                </div>
                {{-- @endif --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>STATUS</th>
                        <th>NAMA</th>
                        <th>USERNAME</th>
                        <th>TELEPON</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>NIK</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle fas fa-edit" data-toggle="dropdown" aria-expanded="false">
                                <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="#">Action</a>
                                    <a class="dropdown-item" href="#">Another action</a>
                                    <a class="dropdown-item" href="#">Something else here</a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#">Separated link</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-success">Aktif</span>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>STATUS</th>
                        <th>NAMA</th>
                        <th>USERNAME</th>
                        <th>TELEPON</th>
                        <th>JENIS KELAMIN</th>
                        <th>AGAMA</th>
                        <th>ALAMAT</th>
                        <th>NIK</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection
