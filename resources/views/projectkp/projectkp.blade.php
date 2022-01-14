@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

@stop

@section('content')

@if (session('alert'))
<div class="alert alert-success">
  {{ session('alert') }}
</div>
@endif

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

<div class="container-fluid">
  <div class="card card-info card-outline">
    <div class="col-sm-6">
      <p><label for="" style="font-size:30px;">Project KP Mahasiswa</label>
    </div>
  </div>
</div>
</div>

<section class="content">
  <hr>
  <div class="row">
    <div class="col-12" style="padding: 25px">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Tabel Project KP Mahasiswa</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 180px;">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                + Tambah Project KP Mahasiswa
              </button>
              <div class="input-group-append">
              </div>
            </div>
          </div>

          <!-- ./col -->
        </div>
        <div class="modal" id="myModal">
          <div class="modal-dialog">
            <div class="modal-content">

              <!-- Modal Header -->
              <div class="modal-header">
                <h4 class="modal-title">Tambah Form Kerja Praktek</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <form action="/projectkp/insert" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="namalengkap" placeholder="Nama :">
                  </div>
                  <div class="form-group">
                    <label>File</label>
                    <input type="file" class="form-control" name="namafile" placeholder="">
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                  </div>
              </form>
            </div>
          </div>
        </div>
      </div>

      <div class="container">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Lengkap</th>
              <th>Nama File</th>
              <th>Detail</th>
              <th>Ubah</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dataProjectkp as $item)
            <tr>
              <td>1</td>
              <td>{{$item->namalengkap}}</td>
              <td>{{$item->namafile}}</td>
              <td><a href="/projectkp/{{ $item->id }}">
                  <button id="" type="button" class="btn btn-primary">
                    Detail
                  </button>
                </a>
              </td>
              <td>
                <a href="/projectkp/{{ $item->id }}" button id="" type="button" class="btn btn-warning" data-toggle="modal1" data-target="#myModal1">
                  Ubah
                </a>
              </td>
              <td>
                <a href="/projectkp/{{ $item->id ">
                  <button button id="" type="button" class="btn btn-danger">
                    Hapus
                  </button>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>


  @stop

  @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
  @stop