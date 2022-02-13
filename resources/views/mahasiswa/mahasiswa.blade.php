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
      <p><label for="" style="font-size:30px;">Data Mahasiswa</label>
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
          <h3 class="card-title">Tabel Data Mahasiswa</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 180px;">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                + Tambah Data Mahasiswa
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
                <h4 class="modal-title">Tambah Data Mahasiswa</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <form action="/mahasiswa/insert" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label>NIM</label>
                    <input type="text" class="form-control" name="nim" placeholder="NIM :">
                  </div>
                  <div class="form-group">
                    <label>Nama Lengkap</label>
                    <input type="text" class="form-control" name="name" placeholder="Nama :">
                  </div>
                  <div class="form-group">
                    <label for="sel1">Jenis Kelamin</label>
                    <select class="form-control" name="jeniskelamin">
                      <option value="lakilaki">Laki Laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>

                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="status" id="" value="mahasiswa">
                    <label class="form-check-label" for="">
                      Mahasiswa
                    </label>
                  </div>
                  <div class="form-group">
                    <label>Email</label>
                    <input type="email" class="form-control" name="email" placeholder="Email :">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="text" class="form-control" name="password" placeholder="Password :">
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
              <th>Nim</th>
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>Email</th>
              <th>Detail</th>
              <th>Ubah</th>
              <th>Hapus</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>1</td>
              <td>{{$item->Nim}}</td>
              <td>{{$item->NamaLengkap}}</td>
              <td>{{$item->JenisKelamin}}</td>
              <td>{{$item->Email}}</td>

              <td><a href="/mahasiswa/{{ $item->nim }}">
                  <button id="" type="button" class="btn btn-primary">
                    Detail
                  </button>
                </a>
              </td>
              <td>
                <a href="/mahasiswa/{{$item->nim}}/edit" button id="" type="button" class="btn btn-warning" data-toggle="modal1" data-target="#myModal1">
                  Ubah
                </a>
              </td>
              <td>
                <a href="/mahasiswa/{{ $item->nim }}/hapus">
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