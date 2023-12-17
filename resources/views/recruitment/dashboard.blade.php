@extends('master')
@section('title', 'Dashboard Recruitment')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                {{-- @if (auth()->user()->jabatan == 'Admin') --}}
                    <div class="col-sm-2">
                        <a type="button" class="btn btn-block btn-outline-primary" href="{{ url('tambah-karyawan') }}">Tambah</a>
                    </div>
                {{-- @endif --}}
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>CALON KARYAWAN</th>
                        <th>TELEPON</th>
                        <th>ALAMAT</th>
                        <th>STATUS</th>
                        <th>BERKAS</th>
                        <th>WAKTU SUBMIT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle fas fa-edit" data-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="#">Diterima</a>
                                    <a class="dropdown-item" href="#">Ditolak</a>
                                </div>
                            </div>
                        </td>
                        <td>
                            <span class="badge bg-success">Diterima</span>
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