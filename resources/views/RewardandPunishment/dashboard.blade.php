@extends('master')
@section('title', 'Dashboard Reward and Punishment')
@section('btn-table', 'print')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                {{-- @if (auth()->user()->jabatan == 'Admin') --}}
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Reward and Punishment</h2>
                    </div>
                    <div class="col-sm-2">
                        <a type="button" class="btn btn-block btn-outline-primary" href="{{ url('tambah-RewardandPunishment') }}">Tambah Data</a>
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
                        <th>TAHUN</th>
                        <th>BULAN</th>
                        <th>GAJI</th>
                        <th>POTONGAN GAJI</th>
                        <th>BONUS</th>
                        <th>DITERIMA</th>
                        <th>KETERANGAN</th>
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
                        <td>KARYAWAN</td>
                        <td>TAHUN</td>
                        <td>BULAN</td>
                        <td>GAJI</td>
                        <td>POTONGAN GAJI</td>
                        <td>BONUS</td>
                        <td>DITERIMA</td>
                        <td>KETERANGAN</td>
                    </tr>
                </tbody>
                <tfoot>
                    <tr>
                        <th></th>
                        <th>KARYAWAN</th>
                        <th>TAHUN</th>
                        <th>BULAN</th>
                        <th>GAJI</th>
                        <th>POTONGAN GAJI</th>
                        <th>BONUS</th>
                        <th>DITERIMA</th>
                        <th>KETERANGAN</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    </div>
@endsection
