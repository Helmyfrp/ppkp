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
      <p><label for="" style="font-size:30px;">Data Dosen Pembimbing</label>
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
          <h3 class="card-title">Tabel Data Dosen Pembimbing</h3>
          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 180px;">
              <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
                + Pilih Dosen Pembimbing
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
                <h4 class="modal-title">Pilih Dosen Pembimbing</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
              </div>

              <!-- Modal body -->
              <form action="/dosenpembimbing/insert" method="POST" enctype='multipart/form-data'>
                @csrf
                <div class="modal-body">
                  <div class="form-group">
                    <label>NIDN</label>
                    <input type="text" class="form-control" name="nidn" placeholder="NIDN :">
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
                    <input class="form-check-input" type="radio" name="status" id="" value="dosenpembimbing">
                    <label class="form-check-label" for="">
                      Dosen
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
              <th>Nidn</th>
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>Email</th>
            </tr>
          </thead>
          <tbody>
            @foreach($data as $item)
            <tr>
              <td>1</td>
              <td>{{$item->nidn}}</td>
              <td>{{$item->name}}</td>
              <td>{{$item->jeniskelamin}}</td>
              <td>{{$item->email}}</td>

              <td><a href="/dosenpembimbing/{{ $item->nidn }}">
                </a>
              </td>
              <td>
                <a href="/dosenpembimbing/{{$item->nidn}}/edit">
                </a>
              </td>
              <td>
                <a href="/dosenpembimbing/{{ $item->nidn }}/hapus">
                  
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