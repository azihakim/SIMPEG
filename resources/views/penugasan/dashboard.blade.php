@extends('master')
@section('title', 'Dashboard Penugasan')
@section('btn-table', 'print')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                {{-- @if (auth()->user()->jabatan == 'Admin') --}}
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Penugasan</h2>
                    </div>
                    <div class="col-sm-2">
                        <a type="button" class="btn btn-block btn-outline-primary" href="{{ url('tambah-penugasan') }}">Tambah Data</a>
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
                        <th>KARYAWAN</th>
                        <th>TEMPAT PENUGASAN</th>
                        <th>TANGGAL</th>
                        <th>KETERANGAN</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td>KARYAWAN</td>
                        <td>TEMPAT PENUGASAN</td>
                        <td>TANGGAL</td>
                        <td>KETERANGAN</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>KARYAWAN</th>
                        <th>TEMPAT PENUGASAN</th>
                        <th>TANGGAL</th>
                        <th>KETERANGAN</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection
