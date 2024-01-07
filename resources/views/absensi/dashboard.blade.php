@extends('master')
@section('title', 'Dashboard Absensi')
@section('btn-table', 'print')
@section('content')
    <div class="container-fluid">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-sm-10">
                        <h2>Absensi</h2>
                    </div>
                    <div class="col-sm-2">
                        <a class="btn btn-block btn-outline-primary" type="button" data-toggle="modal" data-target="#modal-default-1">Absensi</a>
                    </div>
                </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Bulan</label>
                            <select id="pilihan_konsumen" name="bulan" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option>Pilih Bulan</option>
                                <option>Januari</option>
                                <option>Februari</option>
                                <option>Maret</option>
                                <option>April</option>
                                <option>Mei</option>
                                <option>Juni</option>
                                <option>Juli</option>
                                <option>Agustus</option>
                                <option>September</option>
                                <option>Oktober</option>
                                <option>November</option>
                                <option>Desember</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Tahun</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                                </div>
                                <input name="tahun" type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="yyyy" data-mask="" inputmode="numeric">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label>Filter</label>
                            <div class="input-group">
                                <a type="button" class="btn btn-md btn-outline-primary">
                                    <i class="fas fa-search"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <thead>
                    <tr>
                        <th>NAMA</th>
                        <th>ABSEN</th>
                        <th>TANGGAL</th>
                        <th>FOTO</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absensi as $item)
                        <tr>
                            <td></td>
                            <td>{{ $item->jenis }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td>
                                <img src="{{ asset('storage/dokument/' . $item->foto) }}" alt="Deskripsi Gambar" style="max-width: 150px; max-height: 360px;">
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>NAMA</th>
                        <th>ABSEN</th>
                        <th>TANGGAL</th>
                        <th>FOTO</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        </div>
    </div>
    </div>
    @include('absensi.modal')
@endsection
