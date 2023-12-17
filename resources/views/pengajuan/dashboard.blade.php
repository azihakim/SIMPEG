@extends('master')
@section('title', 'Dashboard Pengajuan Cuti/Izin')
{{-- @section('btn-table', 'print') --}}
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                {{-- @if (auth()->user()->jabatan == 'Admin') --}}
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Data Pengajuan Cuti/Izin</h2>
                    </div>
                    <div class="col-sm-2">
                        <a type="button" class="btn btn-block btn-outline-primary" href="{{ url('tambah-pengajuan') }}">Tambah Data</a>
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
                        <th>CUTI/IZIN</th>
                        <th>TANGGAL</th>
                        <th>ALASAN</th>
                        <th>STATUS</th>
                        <th>SURAT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-default dropdown-toggle fas fa-edit" data-toggle="dropdown" aria-expanded="false">
                                </button>
                                <div class="dropdown-menu" role="menu" style="">
                                    <a class="dropdown-item" href="#">ACC</a>
                                    <a class="dropdown-item" href="#">Tolak</a>
                                </div>
                            </div>
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><span class="badge bg-warning">Pending</span></td>
                        <td></td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>KARYAWAN</th>
                        <th>CUTI/IZIN</th>
                        <th>TANGGAL</th>
                        <th>ALASAN</th>
                        <th>STATUS</th>
                        <th>SURAT</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection
